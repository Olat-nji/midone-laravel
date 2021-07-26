<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrentTeamController;
use App\Http\Controllers\Livewire\ApiTokenController;
use App\Http\Controllers\Livewire\TeamController;
use App\Http\Controllers\Livewire\UserProfileController;
use App\Helpers\MainHelper;
use Laravel\Fortify\Fortify;

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

Route::get('/', App\Http\Main\Index::class)->name('index');
Route::get('/cart', App\Http\Main\Cart::class)->name('index');


Fortify::loginView(function () {
    return view('auth.login');
});

Fortify::registerView(function () {
    return view('auth.register');
});
Fortify::requestPasswordResetLinkView(function () {
    return view('auth.forgot-password');
});
Fortify::resetPasswordView(function ($request) {
    return view('auth.reset-password', ['request' => $request]);
});
// Fortify::verifyEmailView(function () {
//     return view('auth.verify-email');
// });


Route::get('/checkout', App\Http\Main\Checkout::class)->name('checkout');
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
Route::get('/profile', App\Http\Main\Profile::class)->name('profile');
Route::get('/profile/edit', App\Http\Main\ProfileEdit::class)->name('profile');


});
Route::group(['middleware' => ['auth:sanctum', 'verified','admin']], function () {



    Route::get('/dashboard', App\Http\Admin\Dashboard::class)->name('dashboard');
    Route::get('/users', App\Http\Admin\Users::class)->name('users');

    //Projects
    Route::get('/orders', App\Http\Admin\Orders\Index::class)->name('orders');
    Route::get('/orders/{order}', App\Http\Admin\Orders\View::class)->name('orders');
    // Route::get('/projects/{project}/edit', App\Http\Admin\Projects\Edit::class)->name('projects.edit');
    Route::get('/products', App\Http\Admin\Products\Index::class)->name('products');
    Route::get('/products/{product}', App\Http\Admin\Products\Edit::class)->name('products');

    // User & Profile...
    Route::get('/user/profile', [UserProfileController::class, 'show'])
        ->name('profile.show');


    // API...
    if (MainHelper::hasApiFeatures()) {
        Route::get('/user/api-tokens', [ApiTokenController::class, 'index'])->name('api-tokens.index');
    }

    // Teams...
    if (MainHelper::hasTeamFeatures()) {
        Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
        Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');
        Route::put('/current-team', [CurrentTeamController::class, 'update'])->name('current-team.update');
    }
});
