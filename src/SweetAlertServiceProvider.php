<?php

namespace Ignatiusn\SweetAlert;

use Ignatiusn\SweetAlert\Commands\SweetAlertCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasMigration('create_sweet-alert_table')
            ->hasCommand(SweetAlertCommand::class);
    }
}
