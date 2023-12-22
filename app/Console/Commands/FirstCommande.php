<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FirstCommande extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:first-commande {name} ';

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
        exec('rm ' . storage_path('/logs/test_log.log')) ;
        return $this->info('the file was deleted successfully');
    }
}
