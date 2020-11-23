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
Route::get('about-us', App\Http\Main\About::class)->name('about');
Route::get('about', App\Http\Main\About::class)->name('about');
Route::get('pricing', App\Http\Main\Pricing::class)->name('pricing');
Route::get('portfolio', App\Http\Main\Portfolio::class)->name('portfolio');
Route::get('contact', App\Http\Main\Contact::class)->name('contact');
Route::get('git-pull-it', function(){
    return shell_exec('git pull origin new-frontend-main');
    
});
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




//Projects
Route::get('/projects/create', App\Http\Admin\Projects\Create::class)->name('projects.show');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    Route::get('/dashboard', App\Http\Admin\Dashboard::class)->name('dashboard');
    Route::get('/chat', App\Http\Admin\LiveChat::class)->name('live-chat');
    Route::get('/users', App\Http\Admin\Users::class)->name('users');


    //Settings
    Route::get('/settings', App\Http\Admin\Settings\Index::class)->name('settings');
    Route::get('/settings/about', App\Http\Admin\Settings\About::class)->name('settings.about');
    Route::get('/settings/pricing', App\Http\Admin\Settings\Pricing::class)->name('settings.pricing');
    Route::get('/settings/pricing/{pricing}/edit', App\Http\Admin\Settings\EditPricing::class)->name('settings.pricing.edit-pricing');
    Route::get('/settings/services', App\Http\Admin\Settings\Services::class)->name('settings.services');
    Route::get('/settings/services/{service}/edit', App\Http\Admin\Settings\EditServices::class)->name('settings.services.edit-services');
    Route::get('/settings/core-technologies', App\Http\Admin\Settings\Pricing::class)->name('settings.core-technologies');

    //Settings- FAQ
    Route::get('/settings/faqs', App\Http\Admin\Settings\Faq::class)->name('settings.faqs');
    Route::get('/settings/faqs/{faq}/edit', App\Http\Admin\Settings\EditFaq::class)->name('settings.faqs.edit-faq');

    Route::get('/settings/testimonials', App\Http\Admin\Settings\Testimonials::class)->name('settings.testimonials');
    Route::get('/settings/testimonials/{testimonial}/edit', App\Http\Admin\Settings\EditTestimonial::class)->name('settings.testimonials.edit-testimonial');

    Route::get('/settings/portfolios', App\Http\Admin\Settings\Portfolio::class)->name('settings.portfolios');
    Route::get('/settings/portfolios/{portfolio}/edit', App\Http\Admin\Settings\EditPortfolio::class)->name('settings.portfolios.edit-portfolio');


    //Projects
    Route::get('/projects', App\Http\Admin\Projects\Index::class)->name('projects');
    Route::get('/projects/{project}', App\Http\Admin\Projects\Show::class)->name('projects.show');
    Route::get('/projects/{project}/edit', App\Http\Admin\Projects\Edit::class)->name('projects.edit');

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
