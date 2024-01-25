<?php

namespace Ignatiusn\SweetAlert;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ignatiusn\SweetAlert\Commands\SweetAlertCommand;

class SweetAlertServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('sweet-alert')
            ->hasConfigFile()
            ->hasViews()
            // ->hasMigration('create_sweet-alert_table')
            // ->hasCommand(SweetAlertCommand::class);
            ->hasInstallCommand(function(SweetAlertCommand $command) {
                $command
                    ->startWith(function(SweetAlertCommand $command) {
                        $command->info('Hello, and welcome to my sweet alert PHP package!');
                    })
                    ->publishConfigFile()
                    ->publishAssets()
                    // ->publishMigrations()
                    // ->askToRunMigrations()
                    // ->copyAndRegisterServiceProviderInApp()
                    ->askToStarRepoOnGitHub('ignatius-n/sweet-alert')
                    ->endWith(function(SweetAlertCommand $command) {
                        $command->info('Have a great day!');
                    });
            });
    }





    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Ignatiusn\SweetAlert\Services\SessionStore',
            'Ignatiusn\SweetAlert\Services\LaravelSessionStore'
        );

        $this->app->bind('ignatiusn.sweet-alert', function () {
            return $this->app->make('Ignatiusn\SweetAlert\Services\SweetAlertNotifier');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'Ignatiusn\SweetAlert\Services\SessionStore',
            'ignatiusn.sweet-alert',
        ];
    }
}
