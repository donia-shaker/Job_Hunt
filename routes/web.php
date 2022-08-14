<?php

use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\admin\CitiesController;
use App\Http\Controllers\admin\CompaniesController;
use App\Http\Controllers\admin\jobsController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\UsersJobsController;
// use App\Http\Controllers\settingsController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    // Route::get('/about_us',[ aboutUsController::class,'showPage'])->name('about_us');

    Route::get('/', function () {
        return view('front.index');
    })->name('index');

    Route::get('/contact_us', function () {
        return view('front.contact-us');
    });

    Route::get('/courses', function () {
        return view('customer.courses');
    });


    Route::get('/job_details', function () {
        return view('front.details');
    });


    Route::get('/jobs', function () {
        return view('front.job');
    });

    Route::get('/membership', function () {
        return view('front.membership');
    });

    Route::get('/services', function () {
        return view('front.services');
    });

    Route::get('/about_us', function () {
        return view('front.about-us');
    })->name('about_us');

    // login and register
    Route::get('/sign_up', [UsersController::class, 'showRegisterPage']);
    Route::post('/register', [UsersController::class, 'register'])->name('register');
    Route::get('/login', [UsersController::class, 'showloginPage'])->name('login');
    Route::post('/do_login', [UsersController::class, 'login'])->name('do_login');



    // Route::group(['middleware'=>'auth'],function(){
    // Admin Show All Jobs
    // Route::group(['middleware'=>'role:admin'],function(){

    // Satrt Companies 
    Route::controller(CompaniesController::class)->group(function () {
        Route::get('/companies', 'show')->name('companies');
        Route::post('/add_company', 'add')->name('add_company');
        Route::post('/update_company/{id}', 'update')->name('update_company');
        Route::get('/active_company/{id}', 'active')->name('active_company');
        Route::get('/delete_company/{id}', 'delete')->name('delete_company');
    });
    // End Companies

    // Satrt Cities 
    Route::controller(CitiesController::class)->group(function () {
        Route::get('/cities', 'show')->name('cities');
        Route::post('/add_city', 'add')->name('add_city');
        Route::post('/update_city/{id}', 'update')->name('update_city');
        Route::get('/active_city/{id}', 'active')->name('active_city');
        Route::get('/delete_city/{id}', 'delete')->name('delete_city');
    });
    // End Cities

    // Satrt Jobs 
    Route::controller(jobsController::class)->group(function () {
        Route::get('/jobs', 'show')->name('jobs');
        Route::get('/ended_jobs', 'show')->name('ended_jobs');
        Route::get('/complated_jobs', 'show')->name('complated_jobs');
        Route::post('/add_job', 'add')->name('add_job');
        Route::post('/update_job/{id}', 'update')->name('update_job');
        Route::get('/active_job/{id}', 'active')->name('active_job');
        Route::get('/delete_job/{id}', 'delete')->name('delete_job');
        Route::get('/status_job/{id}', 'changeStatus')->name('status_job');
    });
    // End Jobs

    // Show Client Job Details
    Route::controller(UsersJobsController::class)->group(function () {
    Route::get('/show_clients/{id}', 'showAllUser')->name('show_clients');
    Route::get('/CV/{id}', 'showUserCV')->name('CV');
    });

    // Show Users 
    Route::controller(UsersController::class)->group(function () {
    Route::get('/show_users', 'show')->name('show_users');
    Route::get('/active_user/{id}', 'active')->name('active_user');
    Route::get('/delete_user/{id}', 'delete')->name('delete_user');
    });



    // });
    // Route::group(['middleware'=>'role:client'],function(){

    Route::get('/education', function () {
        return view('customer.education');
    });
    Route::get('/skills', function () {
        return view('customer.skills');
    });
    Route::get('/cv', function () {
        return view('front.cv');
    });

    Route::get('/dashboard', function () {
        return view('customer.dashboard');
    })->name('dashboard');

    //    });

    // });


    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //            Route::get('/education', function () {
    //     return view('customer.education');
    // });
    // Route::get('/skills', function () {
    //     return view('customer.skills');
    // });
    // Route::get('/cv', function () {
    //     return view('front.cv');
    // });

    // Route::get('/dashboard', function () {
    //     return view('customer.dashboard');
    // })->name('dashboard');
});
