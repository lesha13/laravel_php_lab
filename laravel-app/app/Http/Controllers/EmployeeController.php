<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $employees = Employee::all();
        return view('employee.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): View
    {
        print_r($request->all(['name', 'position', 'salary', 'experience', 'department_id']));
        $employee = Employee::create(
            $request->all(['name', 'position', 'salary', 'experience', 'department_id'])
        );
        return view(
            'employee.store',
            ['employee' => $employee]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $employee = Employee::find($id);
        if (!isset($employee))
        {
            return abort(404);
        }
        return view('employee.show', ['employee' => $employee]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $employee = Employee::find($id);
        if (!isset($employee))
        {
            return abort(404);
        }
        return view(
            'employee.edit',
            ['employee' => $employee]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): View
    {
        $employee = Employee::find($id);
        if (!isset($employee))
        {
            return abort(404);
        }
        $employee->name = $request->input('name');
        $employee->position = $request->input('position');
        $employee->salary = $request->input('salary');
        $employee->experience = $request->input('experience');
        $employee->department_id = $request->input('department_id');
        $employee->save();
        return view(
            'employee.update',
            [
                'employee' => $employee
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): View
    {
        $employee = Employee::find($id);
        if (!isset($employee))
        {
            return abort(404);
        }
        $employee->delete();
        return view(
            'employee.destroy',
            ['employee' => $employee]
        );
    }
}
