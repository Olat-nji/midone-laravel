<?php

namespace App\Providers;

use App\Helpers\Features;
use App\Http\Api\ApiTokenManager;

use App\Http\Profile\DeleteUserForm;
use App\Http\Profile\LogoutOtherBrowserSessionsForm;
use App\Http\Profile\TwoFactorAuthenticationForm;
use App\Http\Profile\UpdatePasswordForm;
use App\Http\Profile\UpdateProfileInformationForm;
use App\Http\Team\CreateTeamForm as TeamCreateTeamForm;
use App\Http\Team\DeleteTeamForm;
use App\Http\Team\TeamMemberManager;
use App\Http\Team\UpdateTeamNameForm;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;

class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Livewire::component('navigation-dropdown', NavigationDropdown::class);
        Livewire::component('profile.update-profile-information-form', UpdateProfileInformationForm::class);
        Livewire::component('profile.update-password-form', UpdatePasswordForm::class);
        Livewire::component('profile.two-factor-authentication-form', TwoFactorAuthenticationForm::class);
        Livewire::component('profile.logout-other-browser-sessions-form', LogoutOtherBrowserSessionsForm::class);
        Livewire::component('profile.delete-user-form', DeleteUserForm::class);

        if (Features::hasApiFeatures()) {
            Livewire::component('api.api-token-manager', ApiTokenManager::class);
        }

        if (Features::hasTeamFeatures()) {
            Livewire::component('teams.create-team-form', TeamCreateTeamForm::class);
            Livewire::component('teams.update-team-name-form', UpdateTeamNameForm::class);
            Livewire::component('teams.team-member-manager', TeamMemberManager::class);
            Livewire::component('teams.delete-team-form', DeleteTeamForm::class);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadViewsFrom(resource_path('views'), 'mycomponents');
        
        $this->configureComponents();
    }

    /**
     * Configure the Jetstream Blade components.
     *
     * @return void
     */

    protected function configureComponents()
    {
        
        $this->registerComponent('layout','guest');
        $this->registerComponent('layout','app');
        //      $this->registerComponent('component','authentication-card-logo');
        
        //    $this->registerComponent('component','action-message');
        //     $this->registerComponent('component','action-section');
        //     $this->registerComponent('component','application-logo');
        //     $this->registerComponent('component','application-mark');
        //     $this->registerComponent('component','authentication-card');
        //     $this->registerComponent('component','authentication-card-logo');
        //     $this->registerComponent('component','button');
        //     $this->registerComponent('component','confirmation-modal');
        //     $this->registerComponent('component','confirms-password');
        //     $this->registerComponent('component','danger-button');
        //     $this->registerComponent('component','dialog-modal');
        //     $this->registerComponent('component','dropdown');
        //     $this->registerComponent('component','dropdown-link');
        //     $this->registerComponent('component','form-section');
        //     $this->registerComponent('component','input');
        //     $this->registerComponent('component','input-error');
        //     $this->registerComponent('component','label');
        //     $this->registerComponent('component','modal');
        //     $this->registerComponent('component','nav-link');
        //     $this->registerComponent('component','responsive-nav-link');
        //     $this->registerComponent('component','responsive-switchable-team');
        //     $this->registerComponent('component','secondary-button');
        //     $this->registerComponent('component','section-border');
        //     $this->registerComponent('component','section-title');
        //     $this->registerComponent('component','switchable-team');
        //     $this->registerComponent('component','validation-errors');
        //     $this->registerComponent('component','welcome');
        
        //     // Blade::component('profile.delete-user-form', App\View\Components\Profile\DeleteUserForm::class);
        //     // Blade::component('profile.logout-other-browser-sessions-form', App\View\Components\Profile\LogoutOtherBrowserSessionsForm::class);
        //     // Blade::component('profile.two-factor-authentication-form',App\View\Components\Profile\TwoFactorAuthenticationForm::class);
        //     // Blade::component('profile.update-password-form',App\View\Components\Profile\UpdatePasswordForm::class);
        //     // Blade::component('profile.update-profile-information-form',App\View\Components\Profile\UpdateProfileInformationForm::class);
    }

    /**
     * Register the given component.
     *
     * @param  string  $component
     * @return void
     */
    protected function registerComponent(string $type,string $component)
    {
        if($type=='layout'){
            Blade::component('layouts.'.$component, $component.'-layout');
        }else{
            // Blade::component($component, $component);
            Blade::component('mycomponents::'.$component, $component);
        }
    }
}
