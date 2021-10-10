<?php
namespace App\Services\Convertor\Contract;

class FactoryConfig
{
    private static $instances;
    private $factories = [];
    public static function getInstance(): FactoryConfig
    {
        if (!isset(self::$instances)) {
            self::$instances = new static();
        }

        return self::$instances;
    }

    public function addFactory($key, ConvertorFactory $factoryClass): void
    {
        $this->factories[$key] = $factoryClass;
    }

    public function getFactory($key)
    {
        try {
            $factory = $this->factories[$key];
            return $factory->makeConvertor();
        } catch (\Throwable $e) {
            throw new \Exception('این تبدیل اشتباه است.');
        }

    }
}
