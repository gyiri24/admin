<?php

namespace App\Http\Services;

use App\Models\Employee;

class EmployeeService
{
    public function create(array $data)
    {
        Employee::create([
            'name' => $data['name']
        ]);
    }

    public function update(Employee $employee, array $data)
    {
        $employee->update([
            'name' => $data['name']
        ]);
    }
}