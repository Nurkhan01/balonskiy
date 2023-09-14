<?php

namespace App\Http\Middleware\Roles;

use App\Services\Api\HttpRequestService;
use App\Services\Api\RoleService;
use Closure;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AdminRole
{
    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }
    /**
     * Проверяет роль пользователя
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $service = new HttpRequestService(); // Assuming this is the correct service

        if ($this->roleService->checkRole($request, 'admin')) {
            return $next($request);
        } else {
            abort('403', 'You are not allowed to perform this action');
        }
    }
}
