<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeResource;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\UserResource;
use App\Http\Services\EmployeeService;
use Illuminate\Http\Request;
use  App\Models\Role;
use  App\Models\User;
use  App\Models\Service;

class EmployeeController extends Controller
{
    public $employeeService;

    function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emplyeeRole = Role::where('slug', '=', Role::EMPLOYEE)->first();
        $employees = User::where('role_id', '=', $emplyeeRole['id'])->get();


        return UserResource::collection($employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**

     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('name', 'firstName', 'lastName', 'newsletter', 'amount', 'email', 'roleId');

        User::create([
            'name' => $data['name'],
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],
            'newsletter' => $data['newsletter'],
            'amount' => $data['amount'],
            'email' => $data['email'],
            'role_id' => $data['roleId'],
        ]);

        return response()->json('Succes', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return UserResource::make($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = User::find($id);

        return view('employees.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->only('name', 'firstName', 'lastName', 'newsletter', 'amount', 'email', 'roleId');

        $user->update([
            'name' => $data['name'],
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],
            'newsletter' => $data['newsletter'],
            'amount' => $data['amount'],
            'email' => $data['email'],
            'role_id' => $data['roleId'],
        ]);

        return response()->json('Succes', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json('No content', 204);
    }

    public function getEmployeeServices(Request $request, User $user)
    {
        return ServiceResource::collection(Service::where('user_id', '=', $user->id)->get());
    }

    public function getEmployeeWorkingHourskByTimeUnit(Request $request)
    {
        $filter = $request->only('type','date');
        $workingHours = 0;
        $dateUnix = strtotime($filter['date']);

        switch ($filter['type']) {
            case 'yearly' :
                $year = date("Y", $dateUnix);
                $workingHours = $this->employeeService->getEmployeeWorkingHoursByDate($year);
                break;
            case 'monthly' :
                $month = date("Y-m", $dateUnix);
                $workingHours = $this->employeeService->getEmployeeWorkingHoursByDate($month);
                break;
            case 'daily' :
                $day = date("Y-m-d", $dateUnix);
                $workingHours =$this->employeeService->getEmployeeWorkingHoursByDate($day);
                break;
        }

        return $workingHours;
    }
}
