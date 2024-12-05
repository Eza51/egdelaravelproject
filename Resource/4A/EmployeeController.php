<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $employees = \App\Models\Employee::all();
        return view('employees.index', compact('employees'));
    }
    public function create() {
        return view('employees.create');
    }
    
    public function store(Request $request) {
        \App\Models\Employee::create($request->all());
        return redirect('/employees');
    }
    
    
}
