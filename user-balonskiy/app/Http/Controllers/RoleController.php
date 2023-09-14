<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    /**
     * Создает запись в таблице по ролям
     * @param $name
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function createRole($name)
    {
        $role = Role::create(['name' => $name]);
        return $role;
    }

    /**
     * Отображает список ролей из таблицы в базе данных
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $roles = Role::all();
        return response()->json($roles);
    }

    /**
     * Ищет роли по указанному имени
     * @param $name
     * @return mixed
     */
    public function findRoleByName($name)
    {
        $role = Role::where('name', $name)->first();
        return $role;
    }
}
