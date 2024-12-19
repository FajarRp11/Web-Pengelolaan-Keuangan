<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Transaction;

class StatsOverview extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {
        $startDate = ! is_null($this->filters['startDate'] ?? null) ?
            Carbon::parse($this->filters['startDate']) :
            null;

        $endDate = ! is_null($this->filters['endDate'] ?? null) ?
            Carbon::parse($this->filters['endDate']) :
            now();

        $pemasukan = Transaction::incomes()->get()->whereBetween('transaction_date', [$startDate, $endDate])->sum('amount');
        $pengeluaran = Transaction::expenses()->get()->whereBetween('transaction_date', [$startDate, $endDate])->sum('amount');
        $total = $pemasukan - $pengeluaran;

        return [
            Stat::make('Total pemasukan', $pemasukan),
            Stat::make('Total pengeluaran', $pengeluaran),
            Stat::make('Total saldo', $total),
        ];
    }
    
}
