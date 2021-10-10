<?php
namespace App\Services\Convertor\Factories;

use App\Services\Convertor\Contract\Convertor;
use App\Services\Convertor\Contract\ConvertorFactory;
use App\Services\Convertor\ConvertorKgToPound;

class ConvertorKgToPoundFactory extends ConvertorFactory
{
    public function makeConvertor(): Convertor
    {
        return new ConvertorKgToPound();
    }
}
