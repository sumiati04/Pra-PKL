<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Staff;

class StaffController extends Controller
{
    //
    public function index()
    {
        $_staff = Staff::all();
        return view('staff.index', compact('_staff'));
    }
}
