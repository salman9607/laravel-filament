<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getCards(): array
    {
        return [
            Card::make('Payments This Months',
                Payment::where('created_at', '>', now()->subDays(30))->count()),
            Card::make('Income This Months', '$'.
                Payment::where('created_at', '>', now()->subDays(30))->sum('total')),
        ];
    }
}
