<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Carbon;
use Modules\User\Models\AuthenticationLog;
use Webmozart\Assert\Assert;

class UsersChartWidget extends ChartWidget implements HasForms
{
    use InteractsWithActions;
    use InteractsWithForms;
    use InteractsWithPageFilters;

    public string $chart_id = '';

<<<<<<< HEAD
    protected static null|string $pollingInterval = null;

    protected static null|int $sort = 2;
=======
    protected static ?string $pollingInterval = null;

    protected static ?int $sort = 2;
>>>>>>> 079c9da7 (.)

    public function getHeading(): Htmlable|string|null
    {
        return 'Authentication Log';
    }

    /**
     * Define the action to be tested.
     */
    public function testAction(): Action
    {
        return Action::make('test')
            ->requiresConfirmation()
            ->action(function (array $arguments) {
                dd('Test action called', $arguments);
            });
    }

    protected function getType(): string
    {
        return 'line';
    }

    /**
     * Retrieve the chart data based on the given filters.
     */
    protected function getData(): array
    {
        $this->mountAction('test', ['id' => 5]);
        $this->testAction();

        try {
            Assert::nullOrString($startDate = $this->filters['startDate'] ?? null);
            Assert::nullOrString($endDate = $this->filters['endDate'] ?? null);
            if ($endDate === null) {
                $endDate = Carbon::now()->format('Y-m-d H:i:s');
            }
            if ($startDate === null) {
                $startDate = Carbon::now()->subMonth()->format('Y-m-d H:i:s');
            }
            Assert::notNull($startDate = Carbon::createFromFormat('Y-m-d H:i:s', $startDate));
            Assert::notNull($endDate = Carbon::createFromFormat('Y-m-d H:i:s', $endDate));
            if ($startDate->diffInDays($endDate, true) > 365) {
                $startDate = $endDate->copy()->subDays(365);
            }
        } catch (\Exception $e) {
            return [];
        }

        $data = Trend::model(AuthenticationLog::class)
            ->dateColumn('login_at')
<<<<<<< HEAD
            ->between(
                start: $startDate,
                end: $endDate,
            )
=======
            ->between(start: $startDate, end: $endDate)
>>>>>>> 079c9da7 (.)
            ->perDay()
            // ->perMonth()
            ->count();
        /*
<<<<<<< HEAD
         * // Update callbacks to match expected signature
         * $chartData = $data->map(function ($value) {
         * Assert::isInstanceOf($value, TrendValue::class);
         *
         * return $value->aggregate;
         * })->toArray();
         * $chartLabels = $data->map(function ($value) {
         * Assert::isInstanceOf($value, TrendValue::class);
         *
         * return $value->date->format('Y-m-d');
         * })->toArray();
         */
=======
        // Update callbacks to match expected signature
        $chartData = $data->map(function ($value) {
            Assert::isInstanceOf($value, TrendValue::class);

            return $value->aggregate;
        })->toArray();
        $chartLabels = $data->map(function ($value) {
            Assert::isInstanceOf($value, TrendValue::class);

            return $value->date->format('Y-m-d');
        })->toArray();
        */
>>>>>>> 079c9da7 (.)

        $chartData = $data->pluck('aggregate')->toArray();
        $chartLabels = $data->pluck('date')->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Number of logins executed',
                    'data' => $chartData,
                ],
            ],
            'labels' => $chartLabels,
        ];
    }
}
