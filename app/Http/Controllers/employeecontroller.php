<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employeemngt;

class employeecontroller extends Controller
{
    public function index()
    {   
        $employee = employeemngt::all();
        return view ('employee.index', compact(employee));
    }

    public function create()
    {
        return view ('employee.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'add' => 'required',
            'dob' => 'required|date',
            'contact' => 'required|string|max 11',

        ]);
    }

    public function edit( int $id)
    {
        //
    }

    public function update(Request $request, int $id) {
        //
    }

    public function destroy(int $id){
      //
    }
}
