<?php

namespace App\Http\Controllers;

use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return RoleResource::collection(Role::all());
    }

    public function show(Role $role)
    {
        return RoleResource::make($role);
    }

    public function store(Request $request)
    {
        $data = $request->only('name');

        Role::create([
            'name' => $data['name']
        ]);

        return response()->json('Succes', 200);
    }

    public function update(Request $request, Role $role)
    {
        $data = $request->only('name');

        $role->update([
            'name' => $data['name']
        ]);

        return response()->json('Succes', 200);
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return response()->json('No content', 204);
    }
}
