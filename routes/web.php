<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FormContriller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\VerfyController;
use App\Http\Controllers\ExtractedCertificatesController;
use Illuminate\Support\Facades\Route;

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
//////////////////////////////////site////////////////////////////////////////
Route::get('/', [HomeController::class, 'home'])->name('home');



Route::get('about', [AboutController::class, 'abouthome'])->name('about');
Route::get('partner', [PartnerController::class, 'home'])->name('partner');
Route::get('event', [EventController::class, 'event'])->name('event');
Route::get('master', [CoursesController::class, 'master'])->name('master');
Route::get('doctoral', [CoursesController::class, 'doctoral'])->name('doctoral');
Route::get('course/{id}', [CoursesController::class, 'show'])->name('course');
Route::get('logout',[LoginController::class, 'logout'])->name('logout');
Route::post('check',[LoginController::class, 'check'])->name('check');
Route::get('certificate-check', [VerfyController::class, 'index'])->name('cert-check');
Route::get('certifiction/{id}', [VerfyController::class, 'certifiction'])->name('cert-certifiction');
Route::post('certificate-search', [VerfyController::class, 'search'])->name('cert-search');
//////////////////////////////////admin////////////////////////////////////////
Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogin'],function (){
    Route::resource('extracted-certificates', ExtractedCertificatesController::class);
 
    Route::get('sliders',[AdminController::class,'getSliders'])->name('getSliders');
    Route::get('Createsliders',[AdminController::class,'Createsliders'])->name('Createsliders');
    Route::get('edit/sliders/{id}',[AdminController::class,'editSliders'])->name('editSliders');
    Route::post('updatedSliders',[AdminController::class,'updatedSliders'])->name('updatedSliders');
    Route::get('deletedSliders/{id}',[AdminController::class,'deletedSliders'])->name('deletedSliders');
    Route::post('SaveedSliders',[AdminController::class,'SaveedSliders'])->name('SaveedSliders');


    Route::get('Academics',[AdminController::class,'getAcademics'])->name('getAcademics');
    Route::get('CreateAcademics',[AdminController::class,'CreateAcademics'])->name('CreateAcademics');
    Route::get('edit/Academics/{id}',[AdminController::class,'editAcademics'])->name('editAcademics');
    Route::post('updatedAcademics',[AdminController::class,'updatedAcademics'])->name('updatedAcademics');
    Route::get('deletedAcademics/{id}',[AdminController::class,'deletedAcademics'])->name('deletedAcademics');
    Route::post('SaveedAcademics',[AdminController::class,'SaveedAcademics'])->name('SaveedAcademics');

    Route::get('aboutsus',[AdminController::class,'getaboutsus'])->name('getaboutsus');
    Route::get('Createaboutsus',[AdminController::class,'Createaboutsus'])->name('Createaboutsus');
    Route::get('edit/aboutsus/{id}',[AdminController::class,'editaboutsus'])->name('editaboutsus');
    Route::post('updatedaboutsus',[AdminController::class,'updatedaboutsus'])->name('updatedaboutsus');
    Route::get('deletedaboutsus/{id}',[AdminController::class,'deletedaboutsus'])->name('deletedaboutsus');
    Route::post('Saveedaboutsus',[AdminController::class,'Saveedaboutsus'])->name('Saveedaboutsus');

    Route::get('campus',[AdminController::class,'getcampus'])->name('getcampus');
    Route::get('Createcampus',[AdminController::class,'Createcampus'])->name('Createcampus');
    Route::get('edit/campus/{id}',[AdminController::class,'editcampus'])->name('editcampus');
    Route::post('updatedcampus',[AdminController::class,'updatedcampus'])->name('updatedcampus');
    Route::get('deletedcampus/{id}',[AdminController::class,'deletedcampus'])->name('deletedcampus');
    Route::post('Saveedcampus',[AdminController::class,'Saveedcampus'])->name('Saveedcampus');

    Route::get('admissions',[AdminController::class,'getadmissions'])->name('getadmissions');
    Route::get('Createadmissions',[AdminController::class,'Createadmissions'])->name('Createadmissions');
    Route::get('edit/admissions/{id}',[AdminController::class,'editadmissions'])->name('editadmissions');
    Route::post('updatedadmissions',[AdminController::class,'updatedadmissions'])->name('updatedadmissions');
    Route::get('deletedadmissions/{id}',[AdminController::class,'deletedadmissions'])->name('deletedadmissions');
    Route::post('Saveedadmissions',[AdminController::class,'Saveedadmissions'])->name('Saveedadmissions');

    Route::get('healths',[AdminController::class,'gethealths'])->name('gethealths');
    Route::get('Createhealths',[AdminController::class,'Createhealths'])->name('Createhealths');
    Route::get('edit/healths/{id}',[AdminController::class,'edithealths'])->name('edithealths');
    Route::post('updatedhealths',[AdminController::class,'updatedhealths'])->name('updatedhealths');
    Route::get('deletedhealths/{id}',[AdminController::class,'deletedhealths'])->name('deletedhealths');
    Route::post('Saveedhealths',[AdminController::class,'Saveedhealths'])->name('Saveedhealths');

    Route::get('podcasts',[AdminController::class,'getpodcasts'])->name('getpodcasts');
    Route::get('Createpodcasts',[AdminController::class,'Createpodcasts'])->name('Createpodcasts');
    Route::get('edit/podcasts/{id}',[AdminController::class,'editpodcasts'])->name('editpodcasts');
    Route::post('updatedpodcasts',[AdminController::class,'updatedpodcasts'])->name('updatedpodcasts');
    Route::get('deletedpodcasts/{id}',[AdminController::class,'deletedpodcasts'])->name('deletedpodcasts');
    Route::post('Saveedpodcasts',[AdminController::class,'Saveedpodcasts'])->name('Saveedpodcasts');
   
   
    Route::get('stories',[AdminController::class,'getstories'])->name('getstories');
    Route::get('Createstories',[AdminController::class,'Createstories'])->name('Createstories');
    Route::get('edit/stories/{id}',[AdminController::class,'editstories'])->name('editstories');
    Route::post('updatedstories',[AdminController::class,'updatedstories'])->name('updatedstories');
    Route::get('deletedstories/{id}',[AdminController::class,'deletedstories'])->name('deletedstories');
    Route::post('Saveedstories',[AdminController::class,'Saveedstories'])->name('Saveedstories');

   
    Route::get('news',[AdminController::class,'getnews'])->name('getnews');
    Route::get('Createnews',[AdminController::class,'Createnews'])->name('Createnews');
    Route::get('edit/news/{id}',[AdminController::class,'editnews'])->name('editnews');
    Route::post('updatednews',[AdminController::class,'updatednews'])->name('updatednews');
    Route::get('deletednews/{id}',[AdminController::class,'deletednews'])->name('deletednews');
    Route::post('Saveednews',[AdminController::class,'Saveednews'])->name('Saveednews');


    Route::get('/',[DashboardController::class,'count'])->name('dashboard');
    Route::get('add-course',[CoursesController::class,'create'])->name('add_course');
    Route::get('all-courses',[CoursesController::class,'allcourses'])->name('allcourses');
    Route::post('store',[CoursesController::class,'store'])->name('store');
    Route::get('edit/{id}', [CoursesController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [CoursesController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [CoursesController::class, 'destroy'])->name('destroy');
    ////////////////////////Login///////////////////////////////////////////////////
    Route::get('admin-area',[LoginController::class, 'index'])->name('login');
    ////////////////////////category///////////////////////////////////////////////////
    Route::prefix('category')->group(function(){
        Route::get('add', [CategoryController::class, 'create'])->name('add-category');
        Route::get('all-category', [CategoryController::class, 'allcategory'])->name('allcategory');
        Route::post('store',[CategoryController::class,'store'])->name('store-category');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit-category');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('update-category');
        Route::get('destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy-category');
    });
    ////////////////////////Event///////////////////////////////////////////////////
    Route::prefix('event')->group(function(){
        Route::get('add', [EventController::class, 'create'])->name('add-event');
        Route::get('all-event', [EventController::class, 'index'])->name('allevent');
        Route::post('store',[EventController::class,'store'])->name('store-event');
        Route::get('edit/{id}', [EventController::class, 'edit'])->name('edit-event');
        Route::post('update/{id}', [EventController::class, 'update'])->name('update-event');
        Route::get('destroy/{id}', [EventController::class, 'destroy'])->name('destroy-event');
    });
    Route::prefix('Verfy')->group(function(){
        Route::get('add', [VerfyController::class, 'create'])->name('add-cert');
        Route::get('all-cert', [VerfyController::class, 'allcertification'])->name('allcert');
        Route::post('store',[VerfyController::class,'store'])->name('store-cert');
        Route::get('edit/{id}', [VerfyController::class, 'edit'])->name('edit-cert');
        Route::post('update/{id}', [VerfyController::class, 'update'])->name('update-cert');
        Route::get('destroy/{id}', [VerfyController::class, 'destroy'])->name('destroy-cert');
    });
    ////////////////////////Form///////////////////////////////////////////////////
    Route::prefix('form')->group(function(){
        Route::get('all-Register', [FormContriller::class, 'create'])->name('allRegister');
        Route::post('store',[FormContriller::class,'store'])->name('store-form');
        Route::get('destroy/{id}', [FormContriller::class, 'destroy'])->name('destroy-form');
    });
    ////////////////////////Pages///////////////////////////////////////////////////
    Route::prefix('pages')->group(function(){
        ////////////////////////////Home Page/////////////////////////////////////////////
        Route::get('home-page', [HomeController::class, 'index'])->name('home-page');
        Route::get('all-pages',[HomeController::class,'allpages'])->name('allpages');
        Route::get('edit/{id}', [HomeController::class, 'edit'])->name('edit-home-page');
        Route::post('update/{id}', [HomeController::class, 'update'])->name('update-home-page');
        ////////////////////////////About Page/////////////////////////////////////////////
        Route::get('about-us', [AboutController::class, 'index'])->name('about-page');
        Route::get('aboutedit/{id}', [AboutController::class, 'aboutedit'])->name('edit-about-page');
        Route::post('aboutupdate/{id}', [AboutController::class, 'update'])->name('update-about-page');
        ////////////////////////////Partner Page/////////////////////////////////////////////
        Route::get('add-partner', [PartnerController::class, 'index'])->name('add-partner');
        Route::get('edit-partner', [PartnerController::class, 'create'])->name('edit-partner-page');
        Route::post('storepartner', [PartnerController::class, 'store'])->name('storepartner');
        Route::get('destroy/{id}', [PartnerController::class, 'destroy'])->name('destroy-partner');

    });
});


Route::get('{page}', [HomeController::class,'url'])->name('url');


