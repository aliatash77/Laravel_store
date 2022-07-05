<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Factor;
use App\Factor_Porudct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class PaymentController extends Controller
{

    private $MerchantID = 'ee98b27e-404c-11e6-a4f8-000c295eb8fc';


    function get_error($id)
    {
                switch ($id) {
                    case '-1':
                        return 'اطلاعات ارسال شده ناقص است.';
        break;
                    case '-2':
                        return 'آی پی یا مرچنت کد پذیرنده صحیح نیست';
        break;
                    case '-3':
                        return 'با توجه به محدودیت های شاپرک امکان پرداخت با رقم درخواست شده میسر نمی باشد.';
        break;
                    case '-4':
                        return 'سطح تایید پذیرنده پایین تر از صطح نقره ای است.';
        break;
                    case '-11':
                        return 'درخواست مورد نظر یافت نشد.';
        break;
                    case '-12':
                        return 'امکان ویرایش درخواست میسر نمی باشد.';
        break;
                    case '-21':
                        return 'هیچ نوع عملیات مالی برای این تراکنش یافت نشد.';
        break;
                    case '-22':
                        return 'تراکنش نا موفق می باشد.';
        break;
                    case '-33':
                        return 'رقم تراکنش با رقم پرداخت شده مطابقت ندارد.';
        break;
                    case '-34':
                        return 'سقف تقسیم تراکنش از لحاظ تعداد با رقم عبور نموده است.';
        break;
                    case '-40':
                        return 'اجازه دسترسی به متد مربوطه وجود ندارد.';
        break;
                    case '-41':
                        return 'اطلاعات ارسال شده مربوط به AdditionalData غیر معتر می باشد.';
        break;
                    case '-42':
                        return 'مدت زمان معتبر طول عمر شناسه پرداخت بین 30 دقیقه تا 40 روز می باشد.';
        break;
                    case '-54':
                        return 'درخواست مورد نظر آرشیو شده است.';
        break;
                    case '100':
                        return 'عملیات با موفقیت انجام گردیده است.';
        break;
                    case '101':
                        return 'عملیات پرداخت موفق بوده و قبلا Payment Verification تراکنش انجام شده است';
        break;
                    default:
                        return $id;
                        break;
        }
    }

    public function go(){

        if(Auth::check()){
            $cart=Cart::with(["getCartProduct"=>function($query){
                $query->with("getProduct");
            }])->where("user_id",Auth::user()->id)->first();
        }else{
            $cart=Cart::with("getCartProduct")->where("code",( Cookie::has("bid") ? Cookie::get("bid") : null ))->first();
        }

        $offerPrice = 0;
        foreach($cart->getCartProduct as $cart_product){
            $offerPrice += ($cart_product->getProduct->price/100*$cart_product->getProduct->offer)*$cart_product->count;
        }


        $Amount = $cart->totalPrice-$offerPrice; //Amount will be based on Toman - Required

        $Description = 'پرداخت اینترنتی'; // Required
        $Email = ''; // Optional
        $Mobile = ''; // Optional
        $CallbackURL = route('backPay'); // Required


        $client = new \SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest(
            [
                'MerchantID' => $this->MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'Mobile' => $Mobile,
                'CallbackURL' => $CallbackURL,
            ]
        );

//Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {
            return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
//برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
//Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
        } else {
            echo'ERR: '.$this->get_error($result->Status);
        }
    }


    public function back(Request $request){


        if(Auth::check()){
            $cart=Cart::with(["getCartProduct"=>function($query){
                $query->with("getProduct");
            }])->where("user_id",Auth::user()->id)->first();
        }else{
            $cart=Cart::with("getCartProduct")->where("code",( Cookie::has("bid") ? Cookie::get("bid") : null ))->first();
        }

        $offerPrice = 0;
        foreach($cart->getCartProduct as $cart_product){
            $offerPrice += ($cart_product->getProduct->price/100*$cart_product->getProduct->offer)*$cart_product->count;
        }


        $Amount = $cart->totalPrice-$offerPrice; //Amount will be based on Toman - Required



        $Authority = $request->Authority;

        if ($request->Status == 'OK') {

            $client = new \SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $this->MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $Amount,
                ]
            );

            if ($result->Status == 100) {

                $factor = Factor::create(["totalPrice"=>$cart->totalPrice,"offerPrice"=>$offerPrice,"count"=>$cart->count]);

                foreach($cart->getCartProduct as $cart_product){
                    $cart_product->getProduct->update(["instock"=>$cart_product->getProduct->instock-$cart_product->count]);
                   Factor_Porudct::create(["factor_id"=>$factor->id,"count"=>$cart_product->count,"price"=>$cart_product->getProduct->price,"offer"=>$cart_product->getProduct->offer]);
                }

                $cart->delete();

                return view("factor",compact('factor'));
            } else {
                echo 'حطایی رخ داده. کد خطا:'.$result->Status;
            }
        } else {
            echo 'پرداخت توسط کاربر کنسل شد';
        }
    }
}
