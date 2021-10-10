<?php
namespace App\Services\Convertor;

use App\Services\Convertor\Contract\Convertor;

class ConvertorMeterToYard implements Convertor
{
    public function convert(float $amount): float
    {
        return $amount * 1.09;
    }
}
