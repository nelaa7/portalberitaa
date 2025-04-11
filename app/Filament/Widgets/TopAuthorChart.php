<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Author;

class TopAuthorChart extends ChartWidget
{
    protected static ?string $heading = 'Top Author';

    protected function getData(): array
    {
        $authors = Author::withCount('news')
            ->orderByDesc('news_count')
            ->limit(5)
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Article',
                    'data' => $authors->pluck('news_count')->toArray(),
                ],
            ],
            'labels' => $authors->pluck('name')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
