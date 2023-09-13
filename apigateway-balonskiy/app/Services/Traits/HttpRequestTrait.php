<?php

namespace App\Services\Traits;

trait HttpRequestTrait
{
    /*
     * Указывается IP и порты всех микросервисов
     */
    public string $host = '192.168.0.63';
    public string $educationProgramPort = '9011';
    public string $universityPort = '9001';
    public string $studentPort = '9021';
    public string $teacherPort = '9031';
    public string $userPort = '1114';
}
