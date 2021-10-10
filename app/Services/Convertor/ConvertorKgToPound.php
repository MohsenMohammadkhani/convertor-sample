<?php
namespace App\Services\Convertor;

use App\Services\Convertor\Contract\Convertor;

class ConvertorKgToPound implements Convertor
{
    public function convert(float $amount): float
    {
        return $amount * 2.20;
    }
}
