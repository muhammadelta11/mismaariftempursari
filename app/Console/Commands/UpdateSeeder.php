<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateSeeder extends Command
{
    protected $signature = 'db:seed-update';

    protected $description = 'Update the AnggotasTableSeeder file with the latest data from the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateAnggotasSeeder']);
        $this->call('db:seed', ['--class' => 'Database\\Seeders\\Update\\UpdateUsersSeeder']);
    }
}
