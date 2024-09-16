<?php

namespace Keepcloud\Pagarme;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Keepcloud\Pagarme\Commands\PagarmeCommand;

class PagarmeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('pagarme')
            ->hasConfigFile()
            ->hasCommand(PagarmeCommand::class);
    }
}
