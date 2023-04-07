<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyCategoryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertySpecificationController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\TestimonialController;
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

// Route::get('/test', function () {
//     return view('test');
// });

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::post('/verify_otp_code', [AdminController::class, 'verify_otp_code'])->name('verify_otp_code');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/edit/profile', [AdminController::class, 'profile'])->name('profile');
    Route::patch('/update/profile', [AdminController::class, 'profile_update'])->name('profile.update');
    Route::patch('/update/profile/image', [AdminController::class, 'profile_image_update'])->name('profile_image_update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['prefix' => 'admin', 'middleware'=> ['admin', 'auth'],], function() {
    Route::post('/register/agent', [AdminController::class, 'register_agent'])->name('register_agent');
    
    Route::get('/dashboard', [AdminController::class, 'admin_index'])->name('admin.dashboard');
    Route::get('/all/users', [AdminController::class, 'all_users'])->name('admin.all_users');
    Route::delete('/delete/user/{id}', [AdminController::class, 'user_destroy'])->name('admin.user_destroy');
    Route::post('/approve/pending', [AdminController::class, 'approve_pending'])->name('approve_pending');

    //property management
    Route::resource('property_category', PropertyCategoryController::class);
    Route::resource('property_type', PropertyTypeController::class);
    Route::resource('property_specification', PropertySpecificationController::class);
    Route::resource('property', PropertyController::class);

    //news management
    Route::resource('news_category', NewsCategoryController::class);
    Route::resource('news', NewsController::class);

    // testimonial 
    Route::resource('testimonial', TestimonialController::class);
});

Route::group(['prefix' => 'agent', 'middleware'=> ['agent', 'auth'],], function() {
    Route::get('/dashboard', [AdminController::class, 'agent_index'])->name('agent.dashboard');
});

Route::group(['prefix' => 'tenant', 'middleware'=> ['tenant', 'auth'],], function() {
    Route::get('/dashboard', [AdminController::class, 'tenant_index'])->name('tenant.dashboard');
});

Route::group(['prefix' => 'landlord', 'middleware'=> ['landlord', 'auth'],], function() {
    Route::get('/dashboard', [AdminController::class, 'landlord_index'])->name('landlord.dashboard');
});

Route::group(['prefix' => 'contractor', 'middleware'=> ['contractor', 'auth'],], function() {
    Route::get('/dashboard', [AdminController::class, 'contractor_index'])->name('contractor.dashboard');
});

Route::group(['prefix' => 'service_provider', 'middleware'=> ['service_provider', 'auth'],], function() {
    Route::get('/dashboard', [AdminController::class, 'service_provider_index'])->name('service_provider.dashboard');
});

require __DIR__.'/auth.php';
