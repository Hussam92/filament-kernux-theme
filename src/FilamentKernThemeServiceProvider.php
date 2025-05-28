<?php

namespace Kern\FilamentKernTheme;

use Illuminate\Support\ServiceProvider;
use Kern\FilamentKernTheme\Console\FilamentKernThemeInstall;

class FilamentKernThemeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->commands([
            FilamentKernThemeInstall::class,
        ]);

        $this->mergeConfigFrom(__DIR__ . '/../config/filament-kernux-theme.php', 'filament-kernux-theme');

        $this->publishes([
            __DIR__ . '/../config/filament-kernux-theme.php' => config_path('filament-kernux-theme.php'),
        ], 'filament-kernux-theme-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/filament-kernux-theme'),
        ], 'filament-kernux-theme-views');
    }

    public function boot(): void
    {
        //
    }
}
