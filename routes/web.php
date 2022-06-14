<?php

use App\Models\StudentInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookMealController;
use App\Http\Controllers\HostelMealController;
use App\Http\Controllers\HostelSeatController;
use App\Http\Controllers\MealHistoryController;
use App\Http\Controllers\MonthlyBillController;
use App\Http\Controllers\StudentBillController;
use App\Http\Controllers\StudentMealHistoryController;
use App\Http\Controllers\student\StudentAuthController;
use App\Http\Controllers\StudentAuthenticationController;
use App\Http\Controllers\student\StudentInformationController;

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

/**System Route */
Route::get('/', function () {
    return view("auth.login");
});


Auth::routes([
    'logout' => false
]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

                                                    /**Module Routes*/

Route::group(['middleware' => 'auth'], function(){

    Route::get('/logout',[UserController::class,'logout'])->name('logout');
    // user manage route
    Route::get('user-profile', [UserController::class,'profile'])->name('user.profile');
    Route::get('user-profile-edit/{userID}',[UserController::class,'user_edit'])->name('user.edit');
    Route::match(['put', 'patch'],'user-profile/update/{userID}',[UserController::class, 'user_update'])->name('user.update');

    /**
     * Student Management Routes
     */
    Route::resource('student-information', StudentInformationController::class);
    Route::get('student-information/destroy/{id}',[StudentInformationController::class,'destroy'])->name('student-information.destroy');
    Route::get('student-information/download/{studentID}',[StudentInformationController::class,'studentInformationDownload'])->name('student-information.download');
    Route::resource('hostel-seats', HostelSeatController::class);
    Route::get('hostel-meal/destroy/{id}',[HostelMealController::class,'destroy'])->name('hostel-meal.destroy');
    Route::resource('hostel-meal', HostelMealController::class)->except('destroy');
    Route::get('monthly-bills/destroy/{id}',[MonthlyBillController::class,'destroy'])->name('monthly-bills.destroy');
    Route::resource('monthly-bills', MonthlyBillController::class)->except('destroy');
    Route::get('/logout',[UserController::class,'logout'])->name('logout');
    Route::get('student-meal/{studentID}',[MealHistoryController::class,'show'])->name('student-meal.view');
});

/**
 * Student Portal Routes
 */
Route::group(['prefix'=>'student'],function(){
    Route::get('login',[StudentAuthController::class,'showLogin'])->name('student.login');
    Route::post('login/perform',[StudentAuthController::class,'login'])->name('student.login.perform');
    Route::group(['middleware'=>'student'],function(){
        Route::get('dashboard',[StudentAuthController::class,'studentDashboard'])->name('student.dashboard');
        Route::get('logout',[StudentAuthController::class,'logout'])->name('student.logout');
        Route::get('settings',[StudentAuthController::class,'settings'])->name('student.settings');
        Route::get('view',[StudentAuthController::class,'view'])->name('student.view');
        Route::match(['put', 'patch'],'update-image',[StudentAuthController::class, 'updateImage'])->name('student.update.image');
        Route::match(['put', 'patch'],'update-password',[StudentAuthController::class, 'updatePassword'])->name('student.update.password');

        Route::get('bill-view',[StudentBillController::class,'view'])->name('student.bill.view');

        Route::resource('book-meal',BookMealController::class)->except('destroy');
        Route::post('meal-find',[BookMealController::class,'findMeal'])->name('meal.find');
    });
});
