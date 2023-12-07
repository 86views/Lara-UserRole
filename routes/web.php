<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
// use App\Http\Controllers\Student\TimetableController;
use App\Http\Controllers\Student;
use App\Http\Controllers\User;
use App\Http\Controllers\Teacher;
use App\Http\Controllers\Admin;



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
    return view('welcome');
});




// Route::get('/student/timetable', [TimetableController::class, 'index'])
//           ->middleware(['auth', 'verified'])->name('student.timetable');


Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');  

    Route::middleware('role:1')
         ->prefix('users')
        ->name('users.')
        ->group(function () {
            
                Route::get('/user', [User\UserController::class, 'index'])
                ->name('user');           
    
        });

   

        Route::middleware('role:2')   
        ->prefix('admin')
       ->name('admin.')
       ->group(function () {
           Route::get('/users', [Admin\UserController::class, 'index'])
               ->name('users');  
           
        //   Route::get('/users/all_users', [Admin\UserController::class, 'allusers'])
        //        ->name('allusers');   
           Route::resource('roles', RoleController::class);
   
                
       });


    //    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // });
});

require __DIR__ . '/auth.php';
