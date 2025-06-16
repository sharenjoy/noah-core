<?php

namespace Sharenjoy\NoahCore;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NoahCoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('noah-core')
            ->hasRoute('web')
            ->hasConfigFile([
                'noah-core',
            ])
            ->hasViews()
            ->hasTranslations()
            ->discoversMigrations()
            ->hasAssets()
            ->hasCommands([]);
    }

    public function packageBooted()
    {
        \Illuminate\Database\Eloquent\Model::unguard();
    }
}
