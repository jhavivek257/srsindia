<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\TypeFormController;
use App\Http\Controllers\Setting;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\LeadershipController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CsrController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\JurneyController;
use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\SrslifeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GroupcompanyController;
use App\Http\Controllers\SuccessstoriesController;
use App\Http\Controllers\Jobportalcontroller;

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

/** for side bar menu active */
function set_active( $route ) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

// all frontend page route
Route::get('/', [WebController::class, 'index']);
Route::get('/about-us', [AboutController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index']);
Route::get('/vision-mission', [VisionController::class, 'index']);
Route::get('/leadership', [LeadershipController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/csr', [CsrController::class, 'index']);
Route::get('/director-message', [DirectorController::class, 'index']);
Route::get('/network', [NetworkController::class, 'index']);
Route::get('/jurney', [JurneyController::class, 'index']);
Route::get('/achievements', [AchievementsController::class, 'index']);
Route::get('/srs-life', [SrslifeController::class, 'index']);
Route::get('/distribution-network-placement', [ServiceController::class, 'index']);
Route::get('/modern-trade-placement', [ServiceController::class, 'moderntrade']);
Route::get('/online-marketing', [ServiceController::class, 'onlinemarketing']);
Route::get('/cfa-operations', [ServiceController::class, 'cfaoperation']);
Route::get('/brand-consultancy', [ServiceController::class, 'businessConsultancy']);
Route::get('/brand-development', [ServiceController::class, 'brandDevelopment']);
Route::get('/our-brands', [GroupcompanyController::class, 'index']);
Route::get('/hamdard', [SuccessstoriesController::class, 'index']);


Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// ----------------------------login ------------------------------//
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('change/password', 'changePassword')->name('change/password');
});

// ----------------------------- register -------------------------//
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register','storeUser')->name('register');    
});

// -------------------------- main dashboard ----------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->middleware('auth')->name('home');
    Route::get('user/profile/page', 'userProfile')->middleware('auth')->name('user/profile/page');
});

// ----------------------------- user controller -------------------------//
Route::controller(UserManagementController::class)->group(function () {
    Route::get('list/users', 'index')->middleware('auth')->name('list/users');
    Route::post('change/password', 'changePassword')->name('change/password');
    Route::get('view/user/edit/{id}', 'userView')->middleware('auth');
    Route::post('user/update', 'userUpdate')->name('user/update');
    Route::post('user/delete', 'userDelete')->name('user/delete');
});

// ------------------------ setting -------------------------------//
Route::controller(Setting::class)->group(function () {
    Route::get('setting/page', 'index')->middleware('auth')->name('setting/page');
});

// ------------------------ student -------------------------------//
Route::controller(StudentController::class)->group(function () {
    Route::get('student/list', 'student')->middleware('auth')->name('student/list'); // list student
    Route::get('student/grid', 'studentGrid')->middleware('auth')->name('student/grid'); // grid student
    Route::get('student/add/page', 'studentAdd')->middleware('auth')->name('student/add/page'); // page student
    Route::post('student/add/save', 'studentSave')->name('student/add/save'); // save record student
    Route::get('student/edit/{id}', 'studentEdit'); // view for edit
    Route::post('student/update', 'studentUpdate')->name('student/update'); // update record student
    Route::post('student/delete', 'studentDelete')->name('student/delete'); // delete record student
    Route::get('student/profile/{id}', 'studentProfile')->middleware('auth'); // profile student
});

// ------------------------ Client -------------------------------//
Route::controller(ClientController::class)->group(function () {
    Route::get('client/list', 'client')->middleware('auth')->name('client/list'); // list student
    Route::get('client/add/page', 'clientAdd')->middleware('auth')->name('client/add/page'); // page student
    Route::post('client/add/save', 'clientSave')->name('client/add/save'); // save record student
    Route::post('client/delete', 'clientDelete')->name('client/delete'); // delete record student
});


// ------------------------ career -------------------------------//
Route::controller(CareerController::class)->group(function () {
    Route::get('career/list', 'index')->middleware('auth')->name('career/list'); // list student
    Route::get('career/add/page', 'create')->middleware('auth')->name('career/add/page'); // page student
    Route::post('career/add/save', 'store')->name('career/add/save'); // save record student
    Route::post('career/delete', 'destroy')->name('career/delete'); // delete record student
});


// ------------------------ JOb frontend -------------------------------//
Route::controller(Jobportalcontroller::class)->group(function () {
    Route::get('/jobs', 'index')->name('job/list');
    Route::get('/srs/jobs/details/{id}', 'jobsdetails')->name('job/details');
});

