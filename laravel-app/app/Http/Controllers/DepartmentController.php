<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class DepartmentController extends Controller
{
    public function show(int $id) {
        if (Gate::denies('show-department')) {
            abort(403);
        }

        $employees = DB::table('employees')
            ->leftJoin('departments', 'employees.department_id', '=', 'departments.id')
            ->where('departments.id', '=', $id)
            ->get();
        return view('departments.show', ['employees' => $employees]);
    }
}
