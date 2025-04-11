<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\ArticleNews;

class ArticleStatWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Today', ArticleNews::whereDate('created_at', today())->count()),
            Stat::make('This Week', ArticleNews::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count()),
            Stat::make('This Month', ArticleNews::whereMonth('created_at', now()->month)->count()),
        ];
    }
}
