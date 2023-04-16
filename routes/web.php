<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyCategoryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertySpecificationController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\SubscribeController;
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


Route::get('/',[HomeController::class, 'index'])->name('home');
Route::post('/search',[HomeController::class, 'searchProperty'])->name('searchProperty');
Route::post('/subscribe',[HomeController::class, 'subscribe'])->name('subscribe');

Route::post('/verify_otp_code', [AdminController::class, 'verify_otp_code'])->name('verify_otp_code');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/edit/profile', [AdminController::class, 'profile'])->name('profile');
    Route::patch('/update/profile', [AdminController::class, 'profile_update'])->name('profile_update');
    Route::patch('/update/profile/image', [AdminController::class, 'profile_image_update'])->name('profile_image_update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/role/shift/{id}', [AdminController::class, 'role_shift'])->name('role_shift');

    // ckeditor image show 
    Route::post('ckeditor/image/uplaod', [AdminController::class, 'ckeditor_image_uplaod'])->name('ckeditor_image.upload');
    

});


Route::group(['prefix' => 'admin', 'middleware'=> ['admin', 'auth']], function() {
    Route::post('/register/agent', [AdminController::class, 'register_agent'])->name('register_agent');
    
    Route::get('/dashboard', [AdminController::class, 'admin_index'])->name('admin.dashboard');
    Route::get('/all/users', [AdminController::class, 'all_users'])->name('admin.all_users');
    Route::delete('/delete/user/{id}', [AdminController::class, 'user_destroy'])->name('admin.user_destroy');
    Route::post('/approve/pending', [AdminController::class, 'approve_pending'])->name('approve_pending');
    Route::post('property/approve/pending', [AdminController::class, 'property_status_change'])->name('property_status_change');

    //property management
    Route::resource('property_category', PropertyCategoryController::class);
    Route::resource('property', PropertyController::class);
    Route::get('property/show/{slug}', [PropertyController::class, 'property_show'])->name('property_show');
    Route::resource('property_type', PropertyTypeController::class);
    Route::resource('property_specification', PropertySpecificationController::class);
    Route::post('/remove/multiple/image', [PropertyController::class, 'remove_multiple_image'])->name('remove_multiple_image');

    //news management
    Route::resource('news_category', NewsCategoryController::class);
    Route::resource('news', NewsController::class);
    Route::get('news/show/{slug}', [NewsController::class, 'news_show'])->name('news_show');

    // testimonial 
    Route::resource('testimonial', TestimonialController::class);

    // Banner 
    Route::resource('banner', BannerController::class);

    // Contact 
    Route::resource('contact', ContactController::class);

    // Settings 
    Route::resource('setting', SettingController::class);
    
    // Subscribe 
    Route::resource('subscribe', SubscribeController::class);

    Route::get('/membership', [MembershipController::class, 'index'])->name('subscription.index');
    
    Route::get('/weekly/membership', [MembershipController::class, 'weeklySubscription'])->name('weeklySubscription');
    Route::get('/monthly/membership', [MembershipController::class, 'monthlySubscription'])->name('monthlySubscription');
    Route::get('/yearly/membership', [MembershipController::class, 'yearlySubscription'])->name('yearlySubscription');

    Route::get('/cancel/membership', [MembershipController::class, 'cancelMembership'])->name('cancel.membership');

 

});

Route::group(['prefix' => 'agent', 'middleware'=> ['agent', 'auth'],], function() {
    Route::get('/dashboard', [AgentController::class, 'agent_index'])->name('agent.dashboard');
    Route::get('/property', [AgentController::class, 'property_index'])->name('agent_property.index');
    Route::get('/property/show/{id}', [PropertyController::class, 'show'])->name('property.show');
    Route::post('/request/owned', [AgentController::class, 'request_owned'])->name('request_owned');
});

Route::group(['prefix' => 'tenant', 'middleware'=> ['tenant', 'auth'],], function() {
    Route::get('/dashboard', [AdminController::class, 'tenant_index'])->name('tenant.dashboard');
});

Route::group(['prefix' => 'landlord',"as"=>'landlord.', 'middleware'=> ['landlord', 'auth'],], function() {
    Route::get('/dashboard', [LandlordController::class, 'landlord_index'])->name('dashboard');
    Route::resource('property', PropertyController::class);
    Route::get('property/show/{slug}', [PropertyController::class, 'property_show'])->name('property_show');
    Route::resource('property_specification', PropertySpecificationController::class);
    Route::post('/choose/block', [LandlordController::class, 'choose_block'])->name('choose_block');
});

Route::group(['prefix' => 'contractor', 'middleware'=> ['contractor', 'auth'],], function() {
    Route::get('/dashboard', [AdminController::class, 'contractor_index'])->name('contractor.dashboard');
});

Route::group(['prefix' => 'service_provider', 'middleware'=> ['service_provider', 'auth'],], function() {
    Route::get('/dashboard', [AdminController::class, 'service_provider_index'])->name('service_provider.dashboard');
});


// Route::group(['prefix' => 'auth', 'middleware'=> ['admin','landlord', 'auth'],], function() {
//     Route::resource('property', PropertyController::class);
// });


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END



require __DIR__.'/auth.php';
