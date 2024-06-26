<?php

namespace PackiMaster\AutoComplete;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AutoCompleteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('autocomplete')
            ->hasConfigFile()
            ->hasViews('autocomplete')
            ->hasInstallCommand(function (InstallCommand $installCommand) {
                $installCommand
                    ->startWith(function (InstallCommand $command) {
                        $command->info('Hello, and welcome to my great new package!');
                        $command->newLine(1);
                    })
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->endWith(function (InstallCommand $installCommand) {
                        $installCommand->newLine(1);
                        $installCommand->info('========================================================================================================');
                        $installCommand->info("Get ready to breathe easy! Our package has just saved you from a day's worth of headaches and hassle.");
                        $installCommand->info('========================================================================================================');

                    });
            });
    }
}
