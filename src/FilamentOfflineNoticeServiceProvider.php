<?php

namespace CharlieEtienne\FilamentOfflineNotice;

use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use CharlieEtienne\FilamentOfflineNotice\Testing\TestsFilamentOfflineNotice;

class FilamentOfflineNoticeServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-offline-notice';

    public static string $viewNamespace = 'filament-offline-notice';

    public function configurePackage(Package $package): void
    {
        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void {}

    public function packageBooted(): void
    {
        // Testing
        Testable::mixin(new TestsFilamentOfflineNotice);
    }

    protected function getAssetPackageName(): ?string
    {
        return 'charlieetienne/filament-offline-notice';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            Css::make('filament-offline-notice-styles', __DIR__ . '/../resources/dist/filament-offline-notice.css'),
        ];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [];
    }
}
