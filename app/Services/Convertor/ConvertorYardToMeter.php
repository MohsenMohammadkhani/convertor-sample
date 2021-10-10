<?php
namespace App\Services\Convertor;

use App\Services\Convertor\Contract\Convertor;

class ConvertorYardToMeter implements Convertor
{

    public function convert(float $amount): float
    {
        return $amount * 0.9144;
    }
}
