<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateUserCommande extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {name} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $name = $this->argument('name');
            $email = $this->argument('email');
            $password = Hash::make($this->argument('password')) ;
            User::create([
                'name'=>$name,
                'email'=>$email,
                'password'=>Hash::make($password),

            ]);
            return $this->info('the User created successfully');
        }
        catch(\Exception $e) {
            $this->error('something happen');
            return $this->info($e->getMessage());
        }
    }
}
