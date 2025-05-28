<?php

namespace Kern\FilamentKernTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;

class FilamentKernThemePlugin implements Plugin
{
    public static function make(): static
    {
        return new static;
    }

    public function getId(): string
    {
        return 'filament-kernux-theme';
    }

    public function register(Panel $panel): void
    {
        FilamentColor::register([
            'gray' => [
                50 => '#eceff4',
                100 => '#e5e9f0',
                200 => '#d8dee9',
                300 => '#a7b1c5',
                400 => '#8c9ab3',
                500 => '#71829b',
                600 => '#4c566a',
                700 => '#434c5e',
                800 => '#3b4252',
                900 => '#2e3440',
                950 => '#232831',
            ],
            'blue' => [
                50 => '237, 241, 250',
                100 => '219, 234, 254',
                200 => '181, 198, 234',
                300 => '146, 171, 223',
                400 => '114, 144, 211',
                500 => '81, 116, 197',
                600 => '51, 88, 182',
                700 => '26, 61, 165',
                800 => '5, 29, 145',
                900 => '5, 0, 107',
                950 => '5, 0, 76',
            ],
            'yellow' => [
                50 => '255, 244, 111',
                100 => '254, 249, 195',
                200 => '234, 194, 0',
                300 => '204, 167, 0',
                400 => '174, 142, 0',
                500 => '144, 116, 0',
                600 => '114, 37, 0',
                700 => '87, 69, 0',
                800 => '60, 46, 0',
                900 => '35, 26, 0',
                950 => '23, 16, 0',
            ],
            'red' => [
                50 => '254, 236, 232',
                100 => '254, 226, 226',
                200 => '251, 180, 168',
                300 => '244, 143, 129',
                400 => '232, 106, 91',
                500 => '214, 66, 52',
                600 => '189, 15, 9',
                700 => '148, 0, 0',
                800 => '104, 0, 0',
                900 => '64, 0, 0',
                950 => '45, 0, 0',
            ],
            'green' => [
                50 => '234, 244, 235',
                100 => '220, 252, 231',
                200 => '161, 209, 168',
                300 => '117, 186, 129',
                400 => '74, 162, 90',
                500 => '25, 137, 60',
                600 => '0, 109, 35',
                700 => '0, 83, 19',
                800 => '0, 57, 7',
                900 => '0, 33, 2',
                950 => '0, 21, 1',
            ],
        ]);

        $panel
            ->colors([
                'primary' => Color::hex('#004B76'),
                'secondary' => Color::hex('#0077B3'),
                'info' => Color::hex('#0091C8'),
                'success' => Color::hex('#008A00'),
                'warning' => Color::hex('#FFA500'),
                'danger' => Color::hex('#E30066'),
            ])
            ->viteTheme('vendor/hussam92/filament-kernux-theme/resources/css/theme.css');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
