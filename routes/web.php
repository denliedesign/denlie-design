<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseController;

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

Route::get('licensed-design', function () {return view('licensed-design');});
Route::get('custom-design', function () {return view('custom-design');});
Route::get('licensed-refresh', function () {return view('licensed-refresh');});
Route::get('custom-refresh', function () {return view('custom-refresh');});
Route::get('online-sales', function () {return view('online-sales');});
//Route::get('branding', function () {return view('branding');});
Route::get('custom-solutions', function () {return view('custom-solutions');});
Route::get('sitemaster-cms', function () {return view('sitemaster-cms');});
Route::get('animation', function () {return view('animation');});
Route::get('password-page', function () {return view('password-page');});
Route::get('additional-page', function () {return view('additional-page');});
Route::get('additional-form', function () {return view('additional-form');});
Route::get('promo-feed', function () {return view('promo-feed');});
Route::get('blog', function () {return view('blog');});
Route::get('newsletter', function () {return view('newsletter');});
Route::get('recital-hub', function () {return view('recital-hub');});
Route::get('engageplus', function () {return view('engageplus');});

Route::get('hosting-and-maintenance', function () {return view('hosting-and-maintenance');});
Route::get('seo', function () {return view('seo');});
Route::get('blog-writing', function () {return view('blog-writing');});
Route::get('email-marketing-suite', function () {return view('email-marketing-suite');});
Route::get('email-marketing-optimization', function () {return view('email-marketing-optimization');});
Route::get('chat', function () {return view('chat');});
Route::get('additional-professional-email', function () {return view('additional-professional-email');});
Route::get('ppc', function () {return view('ppc');});
Route::get('social-media', function () {return view('social-media');});

//Route::get('/success', [PurchaseController::class, 'index'])->middleware('auth');
Route::get('/dashboard', [PurchaseController::class, 'index'])->middleware('auth');

Route::get('start-your-journey', function () {
    $user = Auth::user(); // Retrieve the authenticated user
    return view('start-your-journey', ['user' => $user]);
})->middleware(['auth', 'verified'])->name('start-your-journey');

Route::get('subscriptions', function () {
    $user = Auth::user(); // Retrieve the authenticated user
    return view('subscriptions', ['user' => $user]);
})->middleware(['auth', 'verified'])->name('subscriptions');

//Route::get('/dashboard', function () {
//    $user = Auth::user(); // Retrieve the authenticated user
//    return view('/dashboard', ['user' => $user]);
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/create-checkout-session', 'App\Http\Controllers\PurchaseController@createCheckoutSession');
Route::post('/create-plan-session', 'App\Http\Controllers\PlanController@createPlanSession');

Route::get('/cart', 'App\Http\Controllers\CartController@showCart')->name('cart.show');
Route::post('/cart/add', [CartController::class, 'addItem'])->name('cart.add');



require __DIR__.'/auth.php';
