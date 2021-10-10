<?php

namespace App\Providers;

use App\Services\Convertor\Contract\FactoryConfig;
use App\Services\Convertor\Factories\ConvertorKgToPoundFactory;
use App\Services\Convertor\Factories\ConvertorMeterToYardFactory;
use App\Services\Convertor\Factories\ConvertorPoundToKgFactory;
use App\Services\Convertor\Factories\ConvertorYardToMeterFactory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $factoryConfig = FactoryConfig::getInstance();
        // $factoryConfig->addFactory('kg-to-pound', ConvertorKgToPound::class);
        // $factoryConfig->addFactory('pound-to-kg', ConvertorPoundToKg::class);
        // $factoryConfig->addFactory('meter-to-yard', ConvertorMeterToYard::class);
        // $factoryConfig->addFactory('yard-to-meter', ConvertorYardToMeter::class);

        $factoryConfig->addFactory('kg-to-pound', new ConvertorKgToPoundFactory());
        $factoryConfig->addFactory('pound-to-kg', new ConvertorPoundToKgFactory());
        $factoryConfig->addFactory('meter-to-yard', new ConvertorMeterToYardFactory());
        $factoryConfig->addFactory('yard-to-meter', new ConvertorYardToMeterFactory());
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
