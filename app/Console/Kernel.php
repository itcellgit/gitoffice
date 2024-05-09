<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
       // $schedule->command('inspire')->everyMinute();

        //for running scheduled job of adding the leave entitlements yearly once for (teaching vacational and teaching non vacational)

        $schedule->call('\App\Http\Controllers\ScheduledJobs@yearly_leave_entitlements')->yearlyOn(12,28,'00:00')->timezone('Asia/Kolkata');
        $schedule->call('\App\Http\Controllers\ScheduledJobs@inactivate_previous_year')->yearlyOn(01,01,'00:00')->timezone('Asia/Kolkata');
        $schedule->call('\App\Http\Controllers\ScheduledJobs@monthly_leave_entitlements')->monthlyOn(28,'00:00')->timezone('Asia/Kolkata');
        $schedule->call('\App\Http\Controllers\ScheduledJobs@daily_Non_Vacational_EL')->daily()->timezone('Asia/Kolkata');
        $schedule->call('\App\Http\Controllers\ScheduledJobs@halfyearlyEL')->yearlyOn(06,28,'00:00')->timezone('Asia/Kolkata');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}