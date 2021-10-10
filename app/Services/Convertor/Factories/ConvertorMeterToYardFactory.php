<?php
namespace App\Services\Convertor\Factories;

use App\Services\Convertor\Contract\Convertor;
use App\Services\Convertor\Contract\ConvertorFactory;
use App\Services\Convertor\ConvertorMeterToYard;

class ConvertorMeterToYardFactory extends ConvertorFactory
{
    public function makeConvertor(): Convertor
    {
        return new ConvertorMeterToYard();
    }

}
