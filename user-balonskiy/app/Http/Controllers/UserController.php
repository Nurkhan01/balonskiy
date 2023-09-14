<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Назначает роль указанному пользователю
     * @param $user
     * @param $role
     * @return void
     */
    public function assignRoleToUser($user, $role)
    {
        $user->assignRole($role);
    }

    /**
     * Удаляет роль указанному пользователю
     * @param $user
     * @param $role
     * @return void
     */
    public function removeRoleFromUser($user, $role)
    {
        $user->removeRole($role);
    }

    /**
     * Дает разрешение указанному пользователю
     * @param $user
     * @param $permission
     * @return void
     */
    public function givePermissionToUser($user, $permission)
    {
        $user->givePermissionTo($permission);
    }

    /**
     * Удаляет разрешение у указанного пользователя
     * @param $user
     * @param $permission
     * @return void
     */
    public function removePermissionFromUser($user, $permission)
    {
        $user->revokePermissionTo($permission);
    }

    /**
     * Проверяет пользователя на наличие роли
     * @param $user
     * @param $roleName
     * @return mixed
     */
    public function userHasRole($user, $roleName)
    {
        return $user->hasRole($roleName);
    }

    /**
     * Проверяет пользователя на наличие разрешений
     * @param $user
     * @param $permissionName
     * @return mixed
     */
    public function userHasPermission($user, $permissionName)
    {
        return $user->hasPermissionTo($permissionName);
    }

    /**
     * Отображает список всех пользователей
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    /**
     * Отображает пользователей по указанному имени переданный в теле запроса
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUsersByName(Request $request)
    {
        $name = $request->input('name');

        $users = User::where('name', 'LIKE', "%$name%")->get();

        return response()->json($users);
    }
}
