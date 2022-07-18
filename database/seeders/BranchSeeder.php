<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_branch = [
            ['branchNo' => 'B005', 'bAddres' => '22 Deer Rd,London'],
            ['branchNo' => 'B007', 'bAddres' => '16 Argyll St,Aberdeen'],
            ['branchNo' => 'B003','bAddres' => '163 Main St,Glasgow'],
        
        ];

        DB::table('_branch')->insert($_branch);
    }
}
