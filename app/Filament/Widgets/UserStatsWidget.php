<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalUsers = \App\Models\User::count();
        $verifiedUsers = \App\Models\User::whereNotNull('email_verified_at')->count();
        $newUsersLastMonth = \App\Models\User::where('created_at', '>=', now()->subDays(30))->count();

        return [
            Stat::make('Total Users', $totalUsers)
                ->description('All registered accounts')
                ->descriptionIcon('heroicon-m-users')
                ->color('primary'),
            Stat::make('Verified Users', $verifiedUsers)
                ->description('Accounts with verified email')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success'),
            Stat::make('New Users (30 Days)', $newUsersLastMonth)
                ->description('Signups in the last 30 days')
                ->descriptionIcon('heroicon-m-user-plus')
                ->color('info'),
        ];
    }
}
