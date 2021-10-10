<?php
namespace App\Services\Convertor\Factories;

use App\Services\Convertor\Contract\Convertor;
use App\Services\Convertor\Contract\ConvertorFactory;
use App\Services\Convertor\ConvertorYardToMeter;

class ConvertorYardToMeterFactory extends ConvertorFactory
{
    public function makeConvertor(): Convertor
    {
        return new ConvertorYardToMeter();
    }

}
