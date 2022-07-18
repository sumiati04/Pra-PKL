<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StaffBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff_branch = [
            ['staffNo' => 'SL21', 'sName' => 'John White', 'position' => 'Manager', 'salary' => 30000, 'branchNo' => 'B005', 'bAddres' => '22 Deer Rd,London'],
            ['staffNo' => 'SG37', 'sName' => 'Ann Beech', 'position' => 'Assistant', 'salary' => 12000, 'branchNo' => 'B003','bAddres' => '163 Main St,Glasgow'],
            ['staffNo' => 'SG14', 'sName' => 'David Ford', 'position' => 'Supervisor', 'salary' => 18000, 'branchNo' => 'B003', 'bAddres' => '163 Main St,Glasgow'],
            ['staffNo' => 'SA9', 'sName' => 'Mary Howe', 'position' => 'Assistant', 'salary' => 9000, 'branchNo' => 'B007', 'bAddres' => '16 Argyll St,Aberdeen'],
            ['staffNo' => 'SG5', 'sName' => 'Susan Brand', 'position' => 'Manager', 'salary' => 24000, 'branchNo' => 'B003','bAddres' => '163 Main St,Glasgow'],
            ['staffNo' => 'SL41', 'sName' => 'Julie Lee', 'position' => 'Assistant', 'salary' => 9000, 'branchNo' => 'B005', 'bAddres' => '22 Deer Rd,London'],
        
        ];

        DB::table('staff_branch')->insert($staff_branch);
    }
}
