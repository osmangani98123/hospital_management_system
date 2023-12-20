<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');

});


Route::controller(FrontendController::class)->group(function () {

    Route::get('/', 'FrontendIndex')->name('frontendindex');


});

Route::controller(AppointmentsController::class)->group(function () {
    Route::get('/add-appointments', 'AddAppointments')->name('addappointments');
    Route::post('/store-appointments', 'StoreAppointments')->name('storeappointments');


});


Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {

    Route::controller(DepartmentController::class)->group(function () {
        Route::get('/admin/departments', 'Departments')->name('departments');
        Route::get('/admin/add-department', 'AddDepartment')->name('adddepartment');
        Route::post('/admin/store-department', 'StoreDepartment')->name('storedepartment');
        Route::get('/admin/edit-department/{id}', 'EditDepartment')->name('editdepartment');
        Route::post('/admin/update-department', 'UpdateDepartment')->name('updatedepartment');
        Route::get('/admin/delete-department/{id}', 'DeleteDepartment')->name('deletedepartment');

    });
    Route::controller(DoctorsController::class)->group(function () {
        Route::get('/admin/all-doctors', 'DoctorsIndex')->name('alldoctors');
        Route::get('/admin/add-doctor', 'AddDoctors')->name('adddoctors');
        Route::post('/admin/store-doctor', 'StoreDoctors')->name('storedoctors');
        Route::get('/admin/edit-doctor/{id}', 'EditDoctors')->name('editdoctors');
        Route::post('/admin/update-doctor', 'UpdateDoctors')->name('updatedoctors');
        Route::get('/admin/delete-doctor/{id}', 'DeleteDoctors')->name('deletedoctors');
        Route::get('/admin/edit-doctor-img/{id}', 'EditDoctorsImg')->name('editdoctorsimg');
        Route::post('/admin/update-doctor-img', 'UpdateDoctorsImg')->name('updatedoctorsimg');


    });
    Route::controller(AppointmentsController::class)->group(function () {
        Route::get('/admin/all-appointments', 'AppointmentsIndex')->name('allappointments');


        Route::get('/admin/edit-appointments/{id}', 'EditAppointments')->name('editappointments');
        Route::post('/admin/update-appointments', 'UpdateAppointments')->name('updateappointments');
        Route::get('/admin/delete-appointments/{id}', 'DeleteAppointments')->name('deleteappointments');
        Route::get('/admin/view-appointments/{id}', 'ViewAppointments')->name('viewappointments');

    });




});

require __DIR__ . '/auth.php';
