<?php

namespace App\Console\Commands;

use Faker\Factory;
use Illuminate\Console\Command;

class FakerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'faker:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Faker data for DB';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        dd(get_class_methods($faker));
    }
}
