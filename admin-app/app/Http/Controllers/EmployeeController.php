<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeCreateUpdateRequest;
use App\Http\Services\EmployeeService;
use App\Models\Employee;


class EmployeeController extends Controller
{
    public $employeeService;

    function __construct(EmployeeService $employeeService){
        $this->employeeService = $employeeService;
    }


    public function index()
    {
        $employees = Employee::all();


        return view('index', ['employees' => $employees]);
    }

    public function create(EmployeeCreateUpdateRequest $request)
    {
        $data = $request->only('name');

        return response()->json([
            'id' => $this->employeeService->create($data)
        ]);
    }

    public function update(Employee $employee, EmployeeCreateUpdateRequest $request)
    {
        $data = $request->only('name');

        return response()->json([
            'id' => $this->employeeService->update($employee, $data)
        ]);
    }

    public function delete(Employee $employee)
    {
        $employee->delete();

        return response('no content', 201);
    }
}
