<?php

namespace App\Services;

use App\Repositories\MotorRespository;

class MotorService
{
    protected $motorRespository;

    public function __construct(MotorRespository $motorRespository)
    {
        $this->motorRespository = $motorRespository;
    }
}
