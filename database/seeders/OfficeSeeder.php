<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('offices')->insert(array(
            [
               'officeName' => 'Finance office',       
            ],

            [
                'officeName' => 'HRM office',       
            ],

            [
                'officeName' => 'Archive office',       
            ],

            [
                'officeName' => 'Store and Purchase office',       
            ],

            [
                'officeName' => 'Administrative vice president office',    
               
            ],

            [
                'officeName' => 'Academic dean office',       
            ],

            [
                'officeName' => 'Executive vice president office',       
            ],

           ));   
    }
}
