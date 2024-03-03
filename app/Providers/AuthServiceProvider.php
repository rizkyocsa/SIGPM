<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function(User $user){
            return $user->roles_id == 1;
        });

        Gate::define('isDekan', function(User $user){
            return $user->roles_id == 2;
        });

        Gate::define('isProdi', function(User $user){
            return $user->roles_id == 3;
        });

        Gate::define('isAlumni', function(User $user){
            return $user->roles_id == 4;
        });

        Gate::define('isMahasiswa', function(User $user){
            return $user->roles_id == 5;
        });

    }
}
