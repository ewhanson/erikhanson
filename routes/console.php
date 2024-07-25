<?php

use App\Console\Commands\CheckAqhi;
use Illuminate\Support\Facades\Schedule;

Schedule::command(CheckAqhi::class)
    ->everyTenMinutes()
    ->timezone('America/Vancouver')
    ->between('06:00', '23:00');
