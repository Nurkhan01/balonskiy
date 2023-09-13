<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function createPermission($name)
    {
        $permission = Permission::create(['name' => $name]);
        return $permission;
    }

    public function index()
    {
        $permissions = Permission::all();

        return response()->json($permissions);
    }

    public function findPermissionByName($name)
    {
        $permission = Permission::where('name', $name)->first();
        return $permission;
    }
}
