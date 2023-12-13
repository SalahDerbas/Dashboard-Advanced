<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Auth\AuthinticateController;
use App\Http\Controllers\Dashboard\HomeController;
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


Route::group(['middleware' => ['guest']], function () {
    Route::get('/',           [WebsiteController::class ,'index'])->name('website.index');
    Route::get('/contact-us', [WebsiteController::class ,'contact_us'])->name('website.contact_us');
    Route::get('/forget_password' , [AuthinticateController::class , 'forget'])->name('forget_password');
});

Auth::routes();

 //==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function () {

     //==============================dashboard============================
    Route::get('/dashboard', [HomeController::class , 'index'])->name('dashboard');

    Route::resource('Students', 'StudentsController');
    Route::resource('Teachers', 'TeachersController');
    Route::resource('Courses', 'CoursesController');
    Route::resource('Categories', 'CategoriesController');
    Route::resource('Attendance', 'AttendanceController');
    Route::resource('Quizes', 'QuizesController');
    Route::resource('Libraries', 'LibrariesController');
    Route::resource('ZoomMeetings', 'ZoomMeetingsController');
    Route::resource('Reports', 'ReportsController');
    Route::get('/Settings', 'SettingsController@index')->name('Settings');

});
