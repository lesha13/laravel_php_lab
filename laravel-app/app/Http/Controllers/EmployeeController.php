<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//    public function __construct(){
//        $this->authorizeResource(Employee::class);
//    }

    public function index(): View
    {
        $employees = Employee::all();
        $departments = Department::all();
        return view('employee.index', ['employees' => $employees, 'departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $this->authorize('create', Employee::class);

        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): View
    {
        $this->authorize('create', Employee::class);

        $validated = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'salary' => 'required|numeric|min:0',
            'experience' => 'required|numeric|min:0',
        ]);

        if ($validated) {
            $employee = Employee::create(
                $request->all(['name', 'position', 'salary', 'experience', 'department_id'])
            );
        }
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

        $this->authorize('update', $employee);

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

        $this->authorize('update', $employee);

        $validated = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'salary' => 'required|numeric|min:0',
            'experience' => 'required|numeric|min:0',
        ]);
        if ($validated) {
            $employee->name = $request->input('name');
            $employee->position = $request->input('position');
            $employee->salary = $request->input('salary');
            $employee->experience = $request->input('experience');
            $employee->department_id = $request->input('department_id');
            $employee->save();
        }
        return view('employee.update', ['employee' => $employee]);
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

        $this->authorize('delete', $employee);

        $employee->delete();
        return view('employee.destroy', ['employee' => $employee]);
    }
}
