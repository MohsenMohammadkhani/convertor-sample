<?php

namespace App\Services\Convertor\Contract;

interface Convertor
{
    public function convert(float $amount): float;
}
