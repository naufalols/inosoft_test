<?php

namespace App\Services;

use App\Repositories\MobilRespository;

class MobileService
{
    protected $mobilRepository;

    public function __construct(MobilRespository $mobilRepository)
    {
        $this->mobilRepository = $mobilRepository;
    }
}
