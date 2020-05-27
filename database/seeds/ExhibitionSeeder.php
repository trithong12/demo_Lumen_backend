<?php

use Illuminate\Database\Seeder;
use App\Models\Exhibition;

class ExhibitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * To generate 10 tuples of Exhibition to the database (table: exhibitions)
         * Depends on rules written in factories/ExhibitionFactory.php
         * */
        factory(Exhibition::class, 10)->create();
    }
}
