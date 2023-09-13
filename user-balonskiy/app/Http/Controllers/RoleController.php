<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    public function createRole($name)
    {
        $role = Role::create(['name' => $name]);
        return $role;
    }

    public function index()
    {
        $roles = Role::all();
        return response()->json($roles);
    }

    public function findRoleByName($name)
    {
        $role = Role::where('name', $name)->first();
        return $role;
    }
}
