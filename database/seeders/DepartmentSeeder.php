<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert(array(
            [
               'deptName' => 'School Of Business',       
            ],

            [
                'deptName' => 'Institute of Agric & Development Studies',       
            ],

            [
                'deptName' => 'Faculty of Informatics',       
            ],

            [
                'deptName' => 'Business & Economics Department',       
            ],

            [
                'deptName' => 'Social Science & Humanities',    
               
            ],

            [
                'deptName' => 'Faculty Of Engneering',       
            ],

            [
                'deptName' => 'General Education Dept',       
            ],

           ));   
    
    }
}
