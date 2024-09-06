<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Member\BusinessController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\PhoneController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\SupportApplicationController;
use App\Http\Controllers\Admin\ZipController;

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


Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();


Route::group(['`middleware`' => ['auth','isAdmin']], function () {
    Route::resource('member', MemberController::class);
    Route::get('member/show/{id}',[App\Http\Controllers\Admin\MemberController::class, 'show'])->name('member.show');

    Route::post('/add-dependent', [App\Http\Controllers\Admin\MemberController::class, 'dependent_store'])->withoutMiddleware(['isAdmin'])->name('dependent.store');
    Route::get('/update-dependent/{id}', [App\Http\Controllers\Admin\MemberController::class, 'dependent_update'])->withoutMiddleware(['isAdmin'])->name('dependent.update');
    Route::get('/delete-dependent/{id}', [App\Http\Controllers\Admin\MemberController::class, 'dependent_destroy'])->withoutMiddleware(['isAdmin'])->name('dependent.destroy');

    Route::get('approve-business',[App\Http\Controllers\Admin\BusinessController::class, 'approve'])->name('approve.business');

    Route::resource('phone', PhoneController::class)->withoutMiddleware(['isAdmin']);
    Route::resource('email', EmailController::class);
    Route::get('/delete-phone/{id}', [App\Http\Controllers\Admin\PhoneController::class, 'delete'])->name('delete.phone');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('business',App\Http\Controllers\Admin\BusinessController::class);
        Route::resource('job', App\Http\Controllers\Admin\JobController::class);
        Route::resource('job-seeker', App\Http\Controllers\Admin\JobSeekerController::class);
        Route::resource('fees', App\Http\Controllers\Admin\FeesController::class);
        Route::resource('donation', App\Http\Controllers\Admin\DonationController::class);
        Route::resource('donationtype', App\Http\Controllers\Admin\DonationTypeController::class);
        Route::resource('supportapplication', App\Http\Controllers\Admin\SupportApplicationController::class);
        Route::post('carousel/multi-store-support' , [SupportApplicationController::class , 'multiStoreProduct'])->name('multiStore.product');
        Route::post('delete-gallery-image/{galleryId}', [SupportApplicationController::class , 'deleteImage'])->name('deleteImage');
        Route::post('/update-is-main', [SupportApplicationController::class , 'updateIsMain'])->name('updateIsMain');

    });
});
Route::get('/downloadZip',[ZipController::class , 'qrzip'])->name('download.zip');
Route::get('/expired',[HomeController::class , 'expired'])->name('expired');
