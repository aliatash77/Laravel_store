<?php

Route::group(['prefix'=>'dashboard','middleware'=>'CheckAdmin'],function (){

        Route::get('/','DashboardController@index')->name('dashboard');

        Route::group(['prefix'=>'category'],function () {

            Route::get('/create', 'CategoryController@create')->name('CreateCategory');

            Route::post('/store', 'CategoryController@store')->name('StoreCategory');

            Route::get('/index', 'CategoryController@index')->name('CategoryList');

            Route::delete('/delete/{id}', 'CategoryController@delete')->name('DeleteCategory');

            Route::get('/edit/{id}', 'CategoryController@edit')->name('EditCategory');

            Route::post('/update/{id}', 'CategoryController@update')->name('UpdateCategory');
        });

        Route::group(['prefix'=>'brand'],function () {

            Route::get('/create', 'BrandController@create')->name('CreateBrand');

            Route::post('/store', 'BrandController@store')->name('StoreBrand');

            Route::get('/index', 'BrandController@index')->name('BrandList');

            Route::delete('/delete/{id}', 'BrandController@delete')->name('DeleteBrand');

            Route::get('/edit/{id}', 'BrandController@edit')->name('EditBrand');

            Route::post('/update/{id}', 'BrandController@update')->name('UpdateBrand');
        });

        Route::group(['prefix'=>'product'],function () {

            Route::get('/create', 'ProductController@create')->name('CreateProduct');

            Route::post('/store', 'ProductController@store')->name('StoreProduct');

            Route::get('/special/{id}', 'ProductController@special')->name('SpecialProduct');

            Route::get('/UnSpecial/{id}', 'ProductController@UnSpecial')->name('UnSpecialProduct');

            Route::get('/sponser/{id}', 'ProductController@sponser')->name('SponserProduct');

            Route::get('/UnSponser/{id}', 'ProductController@UnSponser')->name('UnSponserProduct');

            Route::get('/index', 'ProductController@index')->name('ProductList');

            Route::delete('/delete/{id}', 'ProductController@delete')->name('ProductDelete');

            Route::get('/edit/{id}', 'ProductController@edit')->name('EditProduct');

            Route::post('/update/{id}', 'ProductController@update')->name('ProductUpdate');
        });

        Route::group(['prefix'=>'manage'],function () {

            Route::get('/', 'ManageController@show')->name('showM');

        });



    });

Route::get('/','HomeController@index')->name('home');

Route::get("/search","HomeController@search")->name('search');

Route::group(['prefix'=>'/','middleware'=>'CheckLogin'],function (){


        Route::get('/profile/{id}','ProfileController@show')->name('profile');
        Route::post('/editProfile/{id}','ProfileController@editProfile')->name('editProfile');



    });
    Route::get('/product/{id}','ProductController@show')->name('product');

    Route::get('/product_category/{id}','ProductController@PListAsC')->name('productC');

    Route::get('/category/{id}','CategoryController@show');

    Route::get('/cart','CartController@show')->name('cart');
    Route::post('/cart/store','CartController@store')->name('CartStore');
    Route::post('/cart/counter','CartController@counter')->name('CartCounter');
    Route::post('/cart/delete','CartController@delete')->name('CartDelete');

    Route::get("/cartList","CartController@cartList")->name('cartList');

    Route::get("/goToPayment","PaymentController@go")->name('goPay');
    Route::get("/backFromPayment","PaymentController@back")->name('backPay');

    Auth::routes();


    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');



    Route::get("/cart","CartController@show")->name('showCart');

    Route::post("/cart/counter","CartController@counter")->name('cartCount');

    Route::get("/cart/delete/{id}","CartController@delete")->name("cart.delete");

    Route::post("/cart/store","CartController@store")->name("cart.store");


    Route::post("/wishlist/store","WishlistController@store")->name('storeWishlist');

    Route::get("/wishlist","WishlistController@index")->name('wishList');

    Route::get("/wishlist/{id}","WishlistController@delete")->name('DeleteWishList');




    Route::get('list','DatatablesController@index');


    Route::get('add-todo','DatatablesController@create');
    Route::post('post-todo','DatatablesController@store');


    Route::get('edit-todo/{id?}','DatatablesController@edit');
    Route::post('update-todo','DatatablesController@update');


    Route::get('delete-todo/{id?}','DatatablesController@delete');