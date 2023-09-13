<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function assignRoleToUser($user, $role)
    {
        $user->assignRole($role);
    }

    public function removeRoleFromUser($user, $role)
    {
        $user->removeRole($role);
    }

    public function givePermissionToUser($user, $permission)
    {
        $user->givePermissionTo($permission);
    }

    public function removePermissionFromUser($user, $permission)
    {
        $user->revokePermissionTo($permission);
    }

    public function userHasRole($user, $roleName)
    {
        return $user->hasRole($roleName);
    }

    public function userHasPermission($user, $permissionName)
    {
        return $user->hasPermissionTo($permissionName);
    }

    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function getUsersByName(Request $request)
    {
        $name = $request->input('name');

        $users = User::where('name', 'LIKE', "%$name%")->get();

        return response()->json($users);
    }
}
