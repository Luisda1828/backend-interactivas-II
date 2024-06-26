<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\UpdateExpiredEvents;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule): void
    {
        // Define la tarea programada para ejecutar el comando
        $schedule->command('events:update-expired')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands(): void
    {
        // Carga los comandos de la carpeta 'Commands'
        $this->load(__DIR__.'/Commands');

        // Registra el comando UpdateExpiredEvents
        $this->commands([
            UpdateExpiredEvents::class,
        ]);
    }
}
