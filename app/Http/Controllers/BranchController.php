<?php

namespace App\Http\Controllers;

use App\Models\Branch;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    //
    public function index()
    {
        $_branch = Branch::all();
        return view('branch.index', compact('_branch'));
    }
}
