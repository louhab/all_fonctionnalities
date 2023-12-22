<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommande extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-commande {--option} {argument}';

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
        $option = $this->option('option') ;
        $argument = $this->argument('argument');

        return $this->info('the camande was successfully executed') ;
        return $this->error('the camande was not executed') ;


    }
}
