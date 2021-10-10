<?php

namespace App\Services\Convertor\Contract;

abstract class ConvertorFactory
{

    public function convert(float $amount): float
    {
        $convertor = $this->makeConvertor();
        return $convertor->convert($amount);
    }

    abstract public function makeConvertor(): Convertor;
}
