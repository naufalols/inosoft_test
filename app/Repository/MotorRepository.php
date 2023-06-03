<?php

namespace App\Repositories;

use App\Models\Motor;

class MotorRespository
{
    protected $motor;

    public function __construct(Motor $motor)
    {
        $this->motor = $motor;
    }
}
