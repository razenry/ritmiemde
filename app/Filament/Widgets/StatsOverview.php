<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Categories', \App\Models\Kategori::count())
                ->description('Total categories available.')
                ->icon('heroicon-o-tag')
                ->color('warning'),
            Stat::make('Total Users', \App\Models\User::count())
                ->description('Total users registered.')
                ->icon('heroicon-o-user-group')
                ->color('primary'),
            Stat::make('Total Books', \App\Models\Buku::count())
                ->description('Total books available.')
                ->icon('heroicon-o-book-open')
                ->color('success'),
        ];
    }
}
