<?php

use Illuminate\Database\Seeder;
use App\Models\Organization;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * To generate 20 tuples of Organization to the database (table: organizations)
         * Depends on rules written in factories/OrganizationFactory.php
         * */
        factory(Organization::class, 20)->create();
    }
}
