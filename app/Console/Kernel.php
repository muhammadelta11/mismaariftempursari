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
       
        $schedule->call(function () {
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateAnggotasSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateUsersSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateMenuFrontendSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateMenuSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateModelHasRolesSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdatePengurusPeriodeSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdatePPermissionsSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdatePRoleHasMenuSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateSessionsSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateArtikelSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateContactListSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateContactMessagesSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateFaqSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateGaleriSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateGformSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateHariBesarSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateHomePengurusSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateHobiSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdatePengurusJabatan']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateInstagramSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateKataAlumni']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateKatakataSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateKategori']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateKategoriItem']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateKontakJenisSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateKontakSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateLogsSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateModelHasRolesSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdatePendaftaranSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdatePendidikanJenisSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdatePendSensusSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdatePengalamanLain']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdatePengalamanOrganisasi']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdatePengurusAnggota']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdatePPendidikanSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateRoleHasPermission']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateRoleSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateSessionsSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateSocialAccounts']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateSocialMedia']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateSpkAhpAlternatifKriteriaTableSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateSpkAhpAlternatifTableSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateSpkAhpKriteriaJenisPerbandinganTableSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateSpkAhpKriteriaJenisTableSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateSpkAhpKriteriaPerbandinganTableSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateSpkAhpKriteriaTableSeeder']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateTagArtikel']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateTagItem']);
            \Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateVisitorsTableSeeder']);
             
            // \Log::info('AnggotasTableSeeder dijalankan pada ' . now());
        })->everyMinute();
        // })->daily();
            
        
        
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
