<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Carbon;
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

class UserTypeRegistrationsChartWidget extends XotBaseChartWidget
{
<<<<<<< HEAD
    protected static null|string $heading = null;
    protected static null|int $sort = 1;
=======
    protected static ?string $heading = null;
    protected static ?int $sort = 1;
>>>>>>> 079c9da7 (.)
    protected static bool $isLazy = true;

    public string $model;

<<<<<<< HEAD
    #[\Override]
    public function getHeading(): null|string
=======
    public function getHeading(): ?string
>>>>>>> 079c9da7 (.)
    {
        return static::transClass($this->model, 'widgets.user_type_registrations_chart.heading');
    }

<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 079c9da7 (.)
    protected function getData(): array
    {
        // Debug: Verifica se i filtri sono disponibili
        $filters = $this->getFilters();

        // Accesso sicuro ai filtri della pagina con fallback appropriati
        $startDate = null;
        $endDate = null;

        // Verifica se i filtri sono disponibili e validi
<<<<<<< HEAD
        if (is_array($filters) && !empty($filters)) {
            /** @phpstan-ignore-next-line */
            $startDate = !empty($filters['startDate']) ? Carbon::parse($filters['startDate']) : null;
            /** @phpstan-ignore-next-line */
            $endDate = !empty($filters['endDate']) ? Carbon::parse($filters['endDate']) : null;
=======
        if (is_array($filters) && ! empty($filters)) {
            /** @phpstan-ignore-next-line */
            $startDate = ! empty($filters['startDate']) ? Carbon::parse($filters['startDate']) : null;
            /** @phpstan-ignore-next-line */
            $endDate = ! empty($filters['endDate']) ? Carbon::parse($filters['endDate']) : null;
>>>>>>> 079c9da7 (.)
        }

        // Fallback ai valori di default se i filtri non sono disponibili
        if (null === $startDate) {
            $startDate = now()->subDays(30);
        }
        if (null === $endDate) {
            $endDate = now();
        }

        try {
            $data = Trend::model($this->model)
                ->between(
                    start: $startDate,
                    end: $endDate,
                )
                ->perDay()
                ->count();

            return [
                'datasets' => [
                    [
                        'label' => static::transClass($this->model, 'widgets.user_type_registrations_chart.label'),
<<<<<<< HEAD
                        'data' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                            ? $value->aggregate
                            : 0),
=======
                        'data' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? $value->aggregate : 0),
>>>>>>> 079c9da7 (.)
                        'backgroundColor' => 'rgba(59, 130, 246, 0.5)',
                        'borderColor' => 'rgb(59, 130, 246)',
                        'borderWidth' => 2,
                        'tension' => 0.4,
                    ],
                ],
<<<<<<< HEAD
                'labels' => $data->map(fn(mixed $value) => ($value instanceof TrendValue)
                    ? \Carbon\Carbon::parse($value->date)->format('d/m')
                    : ''),
=======
                'labels' => $data->map(fn (mixed $value) => $value instanceof TrendValue ? \Carbon\Carbon::parse($value->date)->format('d/m') : ''),
>>>>>>> 079c9da7 (.)
            ];
        } catch (\Exception $e) {
            // Fallback appropriato senza logging inutile
            return [
                'datasets' => [
                    [
                        'label' => static::transClass($this->model, 'widgets.user_type_registrations_chart.label'),
                        'data' => [],
                        'backgroundColor' => 'rgba(59, 130, 246, 0.5)',
                        'borderColor' => 'rgb(59, 130, 246)',
                        'borderWidth' => 2,
                        'tension' => 0.4,
                    ],
                ],
                'labels' => [],
            ];
        }
    }

<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 079c9da7 (.)
    protected function getType(): string
    {
        return 'line';
    }
}
