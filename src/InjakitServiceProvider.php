<?php

namespace Injakit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InjakitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('injakit')
            ->hasConfigFile()
            ->hasViews();
    }
}
