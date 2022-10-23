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

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(EmployeeCreateUpdateRequest $request)
    {
        $data = $request->only('name');

        return response()->json([
            'id' => $this->employeeService->create($data)
        ]);
    }

    public function show(Employee $employee)
    {
      return $employee;
    }

    function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(EmployeeCreateUpdateRequest $request, Employee $employee)
    {
        $data = $request->only('name');

        $this->employeeService->update($employee, $data);

        return redirect()->route('employees.index');
    }

    public function destroy (Employee $employee)
    {
        $employee->delete();

        return response('no content', 201);
    }
}
