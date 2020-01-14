<?php

use Illuminate\Database\Seeder;

class TodosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Todo::class, 5)->create();
    }
}
