<?php

namespace App\Providers\Filament;

use App\Filament\Widgets\SpaStatsOverviewWidget;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\View\PanelsRenderHook;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('dashboard')
            ->login()
            ->brandName('The Menorah Spa & Wellness')
            ->brandLogo(asset('img/logo-brand.png'))
            ->brandLogoHeight('2.5rem')
            ->colors([
                'primary' => [
                    50 => '#fdf5f2',
                    100 => '#fbe3dc',
                    200 => '#f8c4b8',
                    300 => '#f38d76',
                    400 => '#f09078',
                    500 => '#D96B58',
                    600 => '#C55543',
                    700 => '#a84536',
                    800 => '#8a3a2e',
                    900 => '#71332a',
                    950 => '#3d1711',
                ],
                'lavender' => [
                    50 => '#f7f4fb',
                    100 => '#ece5f6',
                    200 => '#dccfee',
                    300 => '#c4aedf',
                    400 => '#B497D6',
                    500 => '#9c7cc4',
                    600 => '#8E79B8',
                    700 => '#7B6385',
                    800 => '#634f6e',
                    900 => '#52435c',
                    950 => '#33293c',
                ],
                'gray' => Color::Stone,
            ])
            ->font('Poppins')
            ->navigationGroups([
                'Layanan & Harga',
                'Pengaturan Aplikasi',
            ])
            ->renderHook(
                PanelsRenderHook::HEAD_END,
                fn (): string => Blade::render('
                    <style>
                        .fi-modal-close-overlay {
                            backdrop-filter: blur(8px) !important;
                            -webkit-backdrop-filter: blur(8px) !important;
                            background-color: rgba(15, 23, 42, 0.45) !important;
                            transition: backdrop-filter 0.3s ease, background-color 0.3s ease;
                        }
                        .fi-logo img {
                            filter: drop-shadow(0 2px 8px rgba(217, 107, 88, 0.25));
                        }
                        .fi-simple-layout .fi-logo {
                            height: 7rem !important;
                        }
                    </style>
                ')
            )
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                SpaStatsOverviewWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
