<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static string $view = 'filament.pages.dashboard';

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Dashboard';
    protected static ?string $title = 'Dashboard';
    protected static ?string $slug = 'dashboard'; // penting: ganti slug ke 'dashboard'
    protected static ?int $navigationSort = -1;   // biar muncul paling atas (opsional)
}
