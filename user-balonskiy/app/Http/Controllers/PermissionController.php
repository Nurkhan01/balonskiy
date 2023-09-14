<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Создает разрешения для ролей
     * @param $name
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function createPermission($name)
    {
        $permission = Permission::create(['name' => $name]);
        return $permission;
    }

    /**
     * Отображает все разрешения
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $permissions = Permission::all();

        return response()->json($permissions);
    }

    /**
     * Ищет разрешения по указанному имени
     * @param $name
     * @return mixed
     */
    public function findPermissionByName($name)
    {
        $permission = Permission::where('name', $name)->first();
        return $permission;
    }
}
