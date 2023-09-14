<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/authenticate', function (Request $request) {
    // Проверка учетных данных пользователя
    $credentials = $request->only('email', 'password');

    // Аутентификация пользователя
    if (Auth::attempt($credentials)) {
        // Учетные данные верны, генерируем JWT-токен
        $user = Auth::user();
        $token = JWTAuth::fromUser($user);

        // Возвращаем JWT-токен в ответе
        return response()->json(['token' => $token]);
    }

    // Неверные учетные данные или ошибка аутентификации
    return response()->json(['error' => 'Unauthorized'], 401);
});


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me'])->middleware(['jwt.auth']);
    Route::post('get-roles', [AuthController::class, 'getRoles'])->middleware(['jwt.auth']);
    Route::post('get-university-id', [AuthController::class, 'getUniversityId'])->middleware(['jwt.auth']);

    // Create Role
    Route::post('/roles', [RoleController::class, 'createRole'])->middleware(['jwt.auth']);;

    // Get Roles
    Route::get('/roles', [RoleController::class, 'index'])->middleware(['jwt.auth']);;

    // Find Role by Name
    Route::get('/roles/{name}', [RoleController::class, 'findRoleByName'])->middleware(['jwt.auth']);;

    // Assign Role to User
    Route::post('/users/{user}/roles/{role}', [UserController::class, 'assignRoleToUser'])->middleware(['jwt.auth']);;

    // Remove Role from User
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRoleFromUser'])->middleware(['jwt.auth']);;

    // Create Permission
    Route::post('/permissions', [PermissionController::class, 'createPermission'])->middleware(['jwt.auth']);;

    // Get Permissions
    Route::get('/permissions', [PermissionController::class, 'index'])->middleware(['jwt.auth']);;

    // Find Permission by Name
    Route::get('/permissions/{name}', [PermissionController::class, 'findPermissionByName'])->middleware(['jwt.auth']);;

    // Give Permission to User
    Route::post('/users/{user}/permissions/{permission}', [UserController::class, 'givePermissionToUser'])->middleware(['jwt.auth']);;

    // Remove Permission from User
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'removePermissionFromUser'])->middleware(['jwt.auth']);;

    // Check if User has a Role
    Route::get('/users/{user}/roles/{role}', [UserController::class, 'userHasRole'])->middleware(['jwt.auth']);;

    // Check if User has a Permission
    Route::get('/users/{user}/permissions/{permission}', [UserController::class, 'userHasPermission'])->middleware(['jwt.auth']);;

    //Get Users
    Route::get('/users', [UserController::class, 'index'])->middleware(['jwt.auth']);;

    //Get Users By Name
    Route::get('/users', [UserController::class, 'getUsersByName'])->middleware(['jwt.auth']);;
});
