<?php

namespace App\Http\Controllers;

use App\Models\StaffBranch;
use App\Models\Staff;
use App\Models\Branch;

use Illuminate\Http\Request;

class StaffBranchController extends Controller
{
    //
    public function index()
    {
        $staff_branch = StaffBranch::all();
        $_staff = Staff::all();
        $_branch = Branch::all();
        return view('staffbranch.index', compact('staff_branch', '_staff', '_branch'));
    }
}
