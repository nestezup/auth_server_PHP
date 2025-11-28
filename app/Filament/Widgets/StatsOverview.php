<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())
                ->description('All registered users')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success'),
            
            Stat::make('New Users (Today)', User::whereDate('created_at', today())->count())
                ->description('Registered today')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('info'),
            
            Stat::make('New Users (This Week)', User::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count())
                ->description('Registered this week')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('warning'),
        ];
    }
}
