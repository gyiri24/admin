<?php

namespace App\Http\Services;

use App\Models\Employee;

class EmployeeService
{
    public function create(array $data)
    {
        $employee = Employee::create([
            'name' => $data['name']
        ]);

        return $employee->id;
    }

    public function update(Employee $employee, array $data)
    {
        $employee->update([
            'name' => $data['name']
        ]);
    }
}