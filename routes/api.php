<?php

use App\Http\Controllers\Accountant\FinanceController;
use App\Http\Controllers\Accountant\SalaryController;
use App\Http\Controllers\Accountant\TuitionController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\BrokerController;
use App\Http\Controllers\Admin\ClassroomController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\HolidayController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\WorkPartitionController;
use App\Http\Controllers\Authentication\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//AUTHENTICATION
Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/log-in', 'logIn');
    Route::post('/send-OTP', 'sendOTP');
});

//ADMIN
Route::middleware(['auth:sanctum', 'admin'])->prefix('admin')->group(function () {
    //AUTHENTICATION
    Route::controller(AuthController::class)->group(function () {
        Route::delete('/log-out', 'logOut');
        Route::post('/update-password', 'updatePassword');
    });

    //DASHBOARD
    Route::controller(DashBoardController::class)->group(function () {
        Route::get('/dashboard', 'showDashboard');
    });

    //DEPARTMENT
    Route::controller(DepartmentController::class)->prefix('department')->group(function () {
        Route::get('/{id}', 'show');
        Route::post('/create', 'create');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{id}', 'delete');
    });

    //EMPLOYEE
    Route::controller(EmployeeController::class)->prefix('employee')->group(function () {
        Route::post('/create', 'create');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{id}', 'delete');
        Route::get('/detail/{id}', 'showDetail');
        Route::post('/{department}', 'filterDepartment');  //department
    });

    //STUDENT
    Route::controller(StudentController::class)->prefix('student')->group(function () {
        Route::get('/', 'show');
        Route::post('/create', 'create');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{id}', 'delete');
        Route::get('/detail/{id}', 'showDetail');
        Route::post('/filter/{id}', 'filter'); //inactive
    });

    //CLASS-ROOM
    Route::controller(ClassroomController::class)->prefix('classroom')->group(function () {
        Route::get('/{id}', 'show');
        Route::post('/create', 'create');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{id}', 'delete');
        Route::get('/detail/{id}', 'showDetail');
    });

    //COURSE
    Route::controller(CourseController::class)->prefix('course')->group(function () {
        Route::get('/{id}', 'show');     //active
        Route::post('/create', 'create');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{id}', 'delete');
        Route::get('/detail/{id}', 'showDetail');
    });

    //BROKER
    Route::controller(BrokerController::class)->prefix('broker')->group(function () {
        Route::get('/{id}', 'show');
        Route::post('/create', 'create');
        Route::put('/update/{id}', 'update');    //confirm
        Route::delete('/delete/{id}', 'delete');
        Route::get('/detail/{id}', 'showDetail');
        //BROKER-PERCENT
        Route::prefix('broker-percent')->group(function () {
            Route::get('/{id}', 'show');
            Route::post('/create', 'create');
            Route::put('/update/{id}', 'update');
            Route::delete('/delete/{id}', 'delete');
        });
    });

    //WORK-PARTITION
    Route::controller(WorkPartitionController::class)->group(function () {
        Route::prefix('work-partition')->group(function () {
            Route::get('/{id}', 'show');
            Route::post('/create', 'create');
            Route::put('/update/{id}', 'update');
            Route::delete('/delete/{id}', 'delete');
            Route::get('/detail/{id}', 'showDetail');
        });
        Route::prefix('swap-work-partition')->group(function () {
            Route::get('/{id}', 'showSwap');
            Route::post('/create', 'createSwap');
            Route::put('/update/{id}', 'updateSwap');
            Route::delete('/delete/{id}', 'deleteSwap');
            Route::get('/detail/{id}', 'showDetailSwap');
        });
    });

    //ATTENDANCE
    Route::controller(AttendanceController::class)->prefix('attendance')->group(function () {
        Route::get('/', 'show');
        Route::post('/{id}', 'rollUp');
        Route::put('/daily-class/{date}', 'showByDate');
    });

    //HOLIDAY
    Route::controller(HolidayController::class)->prefix('holiday')->group(function () {
        Route::get('/{id}', 'show');
        Route::post('/create', 'create');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{id}', 'delete');
    });

    //TUITION
    Route::controller(TuitionController::class)->prefix('tuition')->group(function () {
        Route::get('/class/{id}', 'showClass');
        Route::post('/student-class/{id}', 'showStudent');
        Route::put('/not-payment/{id}', 'showNotPayment');
        Route::delete('/payment-MoMo', 'paymentMoMo');
        Route::delete('/send-SMS', 'sendSMS');
    });
});

//ACCOUNTANT
Route::middleware(['auth:sanctum', 'accountant'])->prefix('accountant')->group(function () {
    //AUTHENTICATION
    Route::controller(AuthController::class)->group(function () {
        Route::post('/log-out/{id}', 'logOut');
        Route::post('/change-password', 'changePassword');
    });

    //DASHBOARD
    Route::controller(DashBoardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard');
    });

    //SALARY
    Route::controller(SalaryController::class)->prefix('salary')->group(function () {
        Route::get('/payment/{id}', 'showSalary');
        Route::put('/not-payment', 'showNotPayment');
        Route::delete('/payment-MoMo', 'paymentMoMo');
        Route::delete('/send-SMS', 'sendSMS');
        //SALARY-PERCENT
        Route::prefix('salary-percent')->group(function () {
            Route::get('/{id}', 'show');
            Route::post('/create', 'create');
            Route::put('/update/{id}', 'update');
            Route::delete('/delete/{id}', 'delete');
        });
    });

    //FINANCE
    Route::controller(FinanceController::class)->prefix('finance')->group(function () {
        Route::post('/{month}', 'showByMonth');
        Route::prefix('expenses')->group(function () {
            Route::get('/', 'show');
            Route::post('/create', 'create');
            Route::put('/update/{id}', 'update');
            Route::delete('/delete/{id}', 'delete');
        });
    });
});
