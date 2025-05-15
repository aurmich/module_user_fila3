<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\User\Models\AuthenticationLog;

class RecentLoginsWidget extends BaseWidget
{
    protected static ?string $heading = 'Recent Logins'; // Rendi static la proprietà

    protected int|string|array $columnSpan = 'full';

    /**
     * Define the query to fetch recent logins.
     */
    protected function getTableQuery(): Builder|Relation|null
    {
        return AuthenticationLog::query()
            ->where('login_successful', true)
            ->orderBy('login_at', 'desc')
            ->limit(10); // Mostra gli ultimi 10 logins
    }

    /**
     * Define the columns to display in the table.
     */
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 019e694 (.)
=======
>>>>>>> Stashed changes
    public function getTableColumns(): array
    {
        return [
            \Filament\Tables\Columns\TextColumn::make('user'),
            \Filament\Tables\Columns\TextColumn::make('login_at'),
            \Filament\Tables\Columns\TextColumn::make('ip_address'),
            \Filament\Tables\Columns\TextColumn::make('user_agent'),
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 88efd6b (.)
    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('authenticatable.name')
                ->label('User')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('login_at')
                ->label('Login At')
                ->dateTime()
                ->sortable(),
            Tables\Columns\TextColumn::make('ip_address')
                ->label('IP Address'),
            Tables\Columns\TextColumn::make('user_agent')
                ->label('User Agent')
                ->limit(30), // Limita il testo a 30 caratteri
<<<<<<< HEAD
>>>>>>> 73101fd (.)
=======
    public function getTableColumns(): array
    {
        return [
            \Filament\Tables\Columns\TextColumn::make('user'),
            \Filament\Tables\Columns\TextColumn::make('login_at'),
            \Filament\Tables\Columns\TextColumn::make('ip_address'),
            \Filament\Tables\Columns\TextColumn::make('user_agent'),
>>>>>>> Stashed changes
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
=======
>>>>>>> Stashed changes
        ];
    }

    /**
     * Optionally configure additional table settings.
     */
    public function getTableActions(): array
    {
        return [
        ];
    }
}
