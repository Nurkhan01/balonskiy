<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $user = Auth::user();
        $role = 'admin'; // Предполагается, что у пользователя есть поле "role"

        // Генерируем JWT-токен с информацией о роли
        $token = JWTAuth::fromUser($user, ['role' => $role]);

        // Возвращаем JWT-токен в ответе
//        return response()->json(['token' => $token]);

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }


    public function getRoles()
    {
        // Получение аутентифицированного пользователя
        // $user = Auth::user();
        $user = JWTAuth::parseToken()->authenticate(); // Раскодируем токен и получаем пользователя

        $role = $user->role;

        // Возвращаем данные пользователя
        return response()->json(['role' => $role]);
    }

    public function getUniversityId()
    {
        // Получение аутентифицированного пользователя
        // $user = Auth::user();
        $user = JWTAuth::parseToken()->authenticate(); // Раскодируем токен и получаем пользователя

        $university_id = $user->university_id;

        // Возвращаем данные пользователя
        return response()->json(['university_id' => $university_id]);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
