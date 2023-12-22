<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RemoveLogFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:remove-log-file';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
            exec('rm ' .storage_path('logs/laravel.log'));
    }
}
