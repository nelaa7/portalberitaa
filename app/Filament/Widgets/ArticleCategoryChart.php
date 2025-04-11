<?php

namespace App\Filament\Widgets;

use App\Models\ArticleNews;
use Filament\Widgets\ChartWidget;

class ArticleCategoryChart extends ChartWidget
{
    protected static ?string $heading = 'Article per Category';
    protected static ?int $sort = 1;

    protected function getData(): array
    {
        $data = ArticleNews::selectRaw('category_id, COUNT(*) as total')
            ->groupBy('category_id')
            ->with('category') 
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Total Article',
                    'data' => $data->pluck('total')->toArray(),
                ],
            ],
            'labels' => $data->pluck('category.name')->toArray(), 
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
