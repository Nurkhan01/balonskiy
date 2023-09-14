<?php

namespace App\Jobs;

use App\Services\LogSetService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;

class EducationDisciplineJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Записывает полученные данные с очереди в базу REDIS
     * @return void
     */
    public function handle()
    {
        $array = $this->data;
        Redis::lpush($array["user"].":".$array["id"], $array["text"]." at ".$array["time"]);
    }
}
