<?php

namespace Teguh02\IndonesiaTerritoryForms;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Teguh02\IndonesiaTerritoryForms\Commands\IndonesiaTerritoryFormsCommand;
use Teguh02\IndonesiaTerritoryForms\Testing\TestsIndonesiaTerritoryForms;

class IndonesiaTerritoryFormsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'indonesia-territory-forms';

    public static string $viewNamespace = 'indonesia-territory-forms';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasCommands($this->getCommands())
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('teguh02/indonesia-territory-forms');
            });

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../database/migrations'))) {
            $package->hasMigrations($this->getMigrations());
        }

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
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        FilamentAsset::registerScriptData(
            $this->getScriptData(),
            $this->getAssetPackageName()
        );

        // Icon Registration
        FilamentIcon::register($this->getIcons());

        // Handle Stubs
        if (app()->runningInConsole()) {
            foreach (app(Filesystem::class)->files(__DIR__ . '/../stubs/') as $file) {
                $this->publishes([
                    $file->getRealPath() => base_path("stubs/indonesia-territory-forms/{$file->getFilename()}"),
                ], 'indonesia-territory-forms-stubs');
            }
        }

        // Testing
        Testable::mixin(new TestsIndonesiaTerritoryForms);
    }

    protected function getAssetPackageName(): ?string
    {
        return 'teguh02/indonesia-territory-forms';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            // AlpineComponent::make('indonesia-territory-forms', __DIR__ . '/../resources/dist/components/indonesia-territory-forms.js'),
            Css::make('indonesia-territory-forms-styles', __DIR__ . '/../resources/dist/indonesia-territory-forms.css'),
            Js::make('indonesia-territory-forms-scripts', __DIR__ . '/../resources/dist/indonesia-territory-forms.js'),
        ];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [
            IndonesiaTerritoryFormsCommand::class,
        ];
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
        return [
            'create_indonesia-territory-forms_table',
        ];
    }
}
