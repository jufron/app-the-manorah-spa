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
            ->brandName('The Manorah Spa & Wellness')
            ->brandLogo(asset('img/logo.png'))
            ->brandLogoHeight('3.5rem')
            ->colors([
                'primary' => [
                    50 => '#fbf8f0',
                    100 => '#f5eccd',
                    200 => '#ead79c',
                    300 => '#ddbf6b',
                    400 => '#d4ab48',
                    500 => '#c69f59',
                    600 => '#b88a3e',
                    700 => '#93682d',
                    800 => '#775228',
                    900 => '#624324',
                    950 => '#382411',
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
                            filter: drop-shadow(0 2px 8px rgba(184, 138, 62, 0.2));
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
