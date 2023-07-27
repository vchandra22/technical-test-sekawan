<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogActivityController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

Route::get('/', [AuthController::class, 'showFormLogin']);
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::controller(App\Http\Controllers\Auth\AuthController::class)->group(function () {
    Route::get('/register', 'showFormRegister')->middleware('guest');
    Route::post('/register/account', 'register');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/kendaraan', [VehicleController::class, 'index'])->name('kendaraan');
    Route::get('/add-kendaraan', [VehicleController::class, 'create'])->name('add.kendaraan');
    Route::get('/edit-kendaraan/{id}', [VehicleController::class, 'edit'])->name('edit.kendaraan');
    Route::put('/update-kendaraan/{vehicle}', [VehicleController::class, 'update'])->name('update.kendaraan');
    Route::post('/kendaraan/store', [VehicleController::class, 'store']);
    Route::delete('/kendaraan/delete/{id}', [VehicleController::class, 'destroy'])->name('delete.kendaraan');
    Route::put('/approve/kendaraan/{id}', [VehicleController::class, 'approve'])->name('approve.kendaraan');
    Route::put('/reject/kendaraan/{id}', [VehicleController::class, 'reject'])->name('reject.kendaraan');
    Route::get('/exportexcel', [VehicleController::class, 'exportexcel'])->name('exportexcel');
    Route::get('/search', [VehicleController::class, 'search'])->name('search');

    Route::get('/transaksi', [TransactionController::class, 'create'])->name('transaksi');
    Route::post('/transaksi/store', [TransactionController::class, 'store']);

    Route::resource('/logactivity', LogActivityController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('user.profile');
    Route::put('/users/{user}', [ProfileController::class, 'update'])->name('users.update');
    Route::get('/profile/password', [PasswordController::class, 'edit']);
    Route::patch('/profile/password', [PasswordController::class, 'update'])->name('password.update');

});

//memberikan permission untuk admin
Route::get('/give-permission-admin', function () {
    $roles = Role::whereIn('id', [1])->get();

    $permissions = [
        'add kendaraan',
        'edit kendaraan',
    ];

    foreach ($roles as $role) {
        $role->givePermissionTo($permissions);
    }
});

//memberikan permission untuk verifikator
Route::get('/give-permission-verifikator', function () {
    $roles = Role::whereIn('id', [2])->get();

    $permissions = [
        'approve',
    ];

    foreach ($roles as $role) {
        $role->givePermissionTo($permissions);
    }
});
