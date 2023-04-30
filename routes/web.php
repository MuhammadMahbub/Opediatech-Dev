<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\GalleryController;



use App\Http\Controllers\Admin\blogController;
use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\TeamController;

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ServiceController;

use App\Http\Controllers\FrontEnd\PageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TrainingController;

use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\blogDetailsController;


use App\Http\Controllers\Admin\EmailSubscribeController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\FrontEnd\FrontEndHomeController;
use App\Http\Controllers\SubGalleryController;

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// ============================= Backend ========================




Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function(){
    // Message Route
    Route::get('message', [MessageController::class, 'getMessage'])->name('message.index');
    Route::get('message/published/{id}', [MessageController::class, 'messagePublished'])->name('message.published');
    Route::get('message/view/{id}', [MessageController::class, 'messageView'])->name('message.view');
    Route::get('message/pending/{id}', [MessageController::class, 'messagePending'])->name('message.pending');
    Route::get('/message/delete/{id}', [MessageController::class, 'messageDelete']);


    // Email Route
    Route::get('email/index', [EmailSubscribeController::class, 'Emailindex'])->name('email.index');
    Route::get('email/delete/{id}', [EmailSubscribeController::class, 'EmailDelete']);
    Route::get('email/send/{id}', [EmailSubscribeController::class, 'EmailSend'])->name('mail.send');
    Route::post('send/allemail/', [EmailSubscribeController::class, 'sendAllemail'])->name('sendAllemail');


    // Service Route
    Route::resource('service', ServiceController::class);
    Route::get('service/delete/{id}', [ServiceController::class, 'serviceDelete']);
    Route::get('service/published/{id}', [serviceController::class, 'servicePublished'])->name('service.published');
    Route::get('service/pending/{id}', [serviceController::class, 'servicePending'])->name('service.pending');
    Route::get('service/featured/{id}', [serviceController::class, 'Featured'])->name('service.featured');
    Route::get('service/unFeatured/{id}', [serviceController::class, 'unFeatured'])->name('service.unFeatured');
    // Service Category Route
    Route::resource('serviceCategory', ServiceCategoryController::class);
    Route::get('/service/category/delete/{id}', [ServiceCategoryController::class, 'serviceCategoryDelete']);

    // Category Route
    Route::resource('category', CategoryController::class);
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);
    Route::get('/category/featured/{id}', [CategoryController::class, 'isFeatured'])->name('isFeatured');

    // Portfolio Route
    Route::resource('portfolio', PortfolioController::class);
    Route::get('/portfolio/delete/{id}', [PortfolioController::class, 'portfolioDelete']);


    // Trainning Route
    Route::resource('training',TrainingController::class);
    Route::get('/training/delete/{id}',[TrainingController::class,'delete']);

    // Team Route
    Route::resource('team',TeamController::class);
    Route::get('/team/delete/{id}',[TeamController::class,'delete']);
    Route::get('/team/active/{id}', [TeamController::class , 'Active'])->name('team.active');
    Route::get('/team/deactive/{id}', [TeamController::class , 'Deactive'])->name('team.deactive');



    // blog
    Route::resource('blog', blogController::class);
    Route::get('/blog/delete/{id}', [blogController::class, 'delete']);
    Route::get('/blog/active/{id}', [blogController::class , 'Active'])->name('blog.active');
    Route::get('/blog/deactive/{id}', [blogController::class , 'Deactive'])->name('blog.deactive');

    // blog details

    Route::resource('blogDetails', blogDetailsController::class);
    Route::get('/blog_details/delete/{id}',[blogDetailsController::class,'delete']);


    // Gallery route
    Route::resource('gallery', GalleryController::class);
    Route::get('/gallery/delete/{id}', [GalleryController::class, 'galleryDelete'])->name('gallery.delete');

    Route::resource('sub_gallery', SubGalleryController::class);
    Route::get('sub/gallery/delete/{id}', [SubGalleryController::class, 'subGalleryDelete'])->name('sub_gallery.delete');
    Route::post('multi/gallery/delete', [SubGalleryController::class, 'multiimageDelete'])->name('multiimageDelete');


 });

// ================================= Backend end =================================



// ================================== Frontend start ============================

Route::get('/', [FrontEndHomeController::class, 'FrontIndex'])->name('index');

Route::post('subscribe', [FrontEndHomeController::class, 'Subscribe'])->name('subscribe');

Route::get('/work', [PageController::class, 'WorkPageIndex'])->name('work.index');
Route::get('/service', [PageController::class, 'ServicePageIndex'])->name('servicepage.index');
Route::get('/agency', [PageController::class, 'AgencyPageIndex'])->name('agency.index');
Route::get('/contact', [PageController::class, 'contactPageIndex'])->name('contact.index');
Route::post('/contact/store', [PageController::class, 'contactStore'])->name('contact.store');
Route::get('/career', [PageController::class, 'CareerIndexPage'])->name('career.index');
Route::get('/blog', [PageController::class, 'BlogIndexPage'])->name('blogpage.index');
Route::get('/blog/show', [PageController::class, 'blogShow']);
Route::get('/gallery', [PageController::class, 'galleryPageIndex'])->name('galleryPage.index');
Route::get('/sub/gallery/{slug}', [PageController::class, 'subGalleryPage'])->name('subgalleryPage');
Route::get('/gallery/details/{slug}', [PageController::class, 'galleryDetails'])->name('galleryPage.details');
// Route::get('/return/back', [PageController::class, 'returnBack'])->name('returnBack');


Route::get('/{slug}', [FrontEndHomeController::class, 'SingleService'])->name('single_service');


// ================================== Frontend end ==============================


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
