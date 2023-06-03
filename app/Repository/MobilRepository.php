<?php

namespace App\Repositories;

use App\Models\Mobil;

class MobilRespository
{
    protected $mobil;

    public function __construct(Mobil $mobil)
    {
        $this->mobil = $mobil;
    }
}
