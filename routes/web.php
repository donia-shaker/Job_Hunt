<?php

use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\admin\jobsController;
use App\Http\Controllers\admin\UsersController;
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


Route::get('/details', function () {
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
Route::get('/sign_up', [UsersController::class,'showRegisterPage']);
Route::post('/register', [UsersController::class,'register'])->name('register');
Route::get('/login', [UsersController::class,'showloginPage'])->name('login');
Route::post('/do_login', [UsersController::class,'login'])->name('do_login');



	// Route::group(['middleware'=>'auth'],function(){
        // Admin Show All Jobs
	// Route::group(['middleware'=>'role:admin'],function(){

        Route::get('/all_Jobs',[jobsController::class ,'showPage'])->name('all_Jobs');
        Route::get('/add_Job',[jobsController::class,'addJobs'])->name('add_Job');
        Route::get('/edit_Job/{id}',[jobsController::class,'editJobs'])->name('edit_Job');
        Route::post('/store_Job',[jobsController::class,'storeJobs'])->name('store_Job');
        Route::get('/delete_Job/{id}',[jobsController::class,'deleteJob'])->name('delete_Job');

        // Route::get('/all_Jobs',[jobsController::class,'showAllJobs'])->name('all_Jobs');
        // Route::post('/store_Job',[jobsController::class,'storeJobs'])->name('store_Job');
        // Route::get('/all_Jobs/{id}/edit',[jobsController::class,'editJobs'])->name('edit_Job');
        Route::post('/update_Job',[jobsController::class,'updateJobs'])->name('update_Job');



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

//         Route::get('/all_Jobs',[jobsController::class ,'showPage'])->name('all_Jobs');
//         Route::get('/add_Job',[jobsController::class,'addJobs'])->name('add_Job');
//         Route::get('/edit_Job/{id}',[jobsController::class,'editJobs'])->name('edit_Job');
//         Route::post('/store_Job',[jobsController::class,'storeJobs'])->name('store_Job');
//         Route::post('/update_Job/{id}',[jobsController::class,'updateJobs'])->name('update_Job');
//         Route::get('/delete_Job/{id}',[jobsController::class,'deleteJob'])->name('delete_Job');

	Route::get('/logout',[AuthController::class,'logout'])->name('logout');

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

// // generate role
// Route::get('/generate_roles',[settingsController::class,'generateRoles'])->name('generate_roles');



});
