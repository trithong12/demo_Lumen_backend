<?php

use Illuminate\Database\Seeder;
use App\Models\Site;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * To generate 50 tuples of Site to the database (table: sites)
         * Depends on rules written in factories/SiteFactory.php
         * */
        factory(Site::class, 50)->create();
    }
}
