<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Hash;;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/ixp', function () {
    return Hash::make('123456');
});

Route::get('/clear', function () {
    \Artisan::call('config:cache');
    \Artisan::call('view:clear');
    \Artisan::call('route:clear');
    \Artisan::call('key:generate');
    dd("Done");
});

Route::get('/', [WebController::class, 'homePage']);

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/send', [WebController::class, 'contactFormAction']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/clients', [WebController::class, 'clientPage']);

Route::get('/products', [WebController::class, 'productsPage']);
Route::get('/products/service/{slug}', [WebController::class, 'productsServicePage']);
Route::get('/products/service/{serviceSlug}/brand/{brandSlug}', 
    [WebController::class, 'productsBrandPage']
);
Route::get('/products/service/{serviceSlug}/brand/{brandSlug}/category/{categorySlug}', 
    [WebController::class, 'productsCategoryPage']
);

Route::get('/news', [WebController::class, 'newsPage']);
Route::get('/news/details/{slug}', [WebController::class, 'newsDetailsPage']);



Route::get('/ixony/login', [AdminController::class, 'loginView'])->middleware('alreadyLoggedIn');
Route::post('/ixony/login/process', [AdminController::class, 'loginProcess']);

Route::group(["prefix" => "ixony", "middleware" => "checkLogin"], function(){

    
    Route::get('/logout', [AdminController::class, 'logoutProcess']);

    Route::get('/users/view', [AdminController::class, 'adminUserView']);
    Route::post('/users/create', [AdminController::class, 'adminUserCreate']);
    Route::get('/users/delete/{id}', [AdminController::class, 'adminUserDelete']);

    Route::get('/brands/view', [AdminController::class, 'adminBrandView']);
    Route::post('/brands/create', [AdminController::class, 'adminBrandCreate']);
    Route::get('/brands/delete/{id}', [AdminController::class, 'adminBrandDelete']);

    Route::get('/clients/view', [AdminController::class, 'adminClientView']);
    Route::post('/clients/create', [AdminController::class, 'adminClientCreate']);
    Route::get('/clients/delete/{id}', [AdminController::class, 'adminClientDelete']);

    Route::get('/services/view', [AdminController::class, 'adminServiceView']);
    Route::post('/services/create', [AdminController::class, 'adminServiceCreate']);
    Route::get('/services/delete/{id}', [AdminController::class, 'adminServiceDelete']);
    Route::get('/services/with/brands/view/{id}', [AdminController::class, 'adminServiceWithBrandView']);
    Route::post('/services/with/brands/create', [AdminController::class, 'adminServiceWithBrandCreate']);
    Route::get('/services/with/brands/delete/{id}', [AdminController::class, 'adminServiceWithBrandDelete']);

    Route::get('/products/view/serviceAndBrand/{id}', [AdminController::class, 'adminProductView']);
    Route::post('/products/serviceAndBrand/create', [AdminController::class, 'adminProductCreate']);
    Route::get('/products/view/serviceAndBrand/delete/{id}', [AdminController::class, 'adminProductDelete']);
    

    Route::get('/categories/view', [AdminController::class, 'adminCategoryView']);
    Route::post('/categories/create', [AdminController::class, 'adminCategoryCreate']);
    Route::get('/categories/delete/{id}', [AdminController::class, 'adminCategoryDelete']);

    Route::get('/videos/view', [AdminController::class, 'adminVideoView']);
    Route::post('/videos/create', [AdminController::class, 'adminVideoCreate']);
    Route::get('/videos/delete/{id}', [AdminController::class, 'adminVideoDelete']);

    Route::get('/sliders/view', [AdminController::class, 'adminSliderView']);
    Route::post('/sliders/create', [AdminController::class, 'adminSliderCreate']);
    Route::get('/sliders/delete/{id}', [AdminController::class, 'adminSliderDelete']);

    Route::get('/testimonials/view', [AdminController::class, 'adminTestimonialView']);
    Route::post('/testimonials/create', [AdminController::class, 'adminTestimonialCreate']);
    Route::get('/testimonials/delete/{id}', [AdminController::class, 'adminTestimonialDelete']);

    Route::get('/news/view', [AdminController::class, 'adminNewsView']);
    Route::post('/news/create', [AdminController::class, 'adminNewsCreate']);
    Route::get('/news/delete/{id}', [AdminController::class, 'adminNewsDelete']);

    Route::get('/contacts/messages/view', [AdminController::class, 'adminContactMessagesView']);








    /* Route::get('/testform', function () {
        return view('testform');
    });

    Route::post('/testform/action', [WebController::class, 'testformAction']); */





});
