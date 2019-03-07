<?php

namespace App\Tests\TirePressureMonitoringSystem;


use App\TirePressureMonitoringSystem\SensorInterface;

class MockSensor implements SensorInterface
{

    /** @var float */
    protected $temp;

    public function setTemp(float $temp) :void
    {
        $this->temp = $temp;
    }

    public static function SamplePressure()
    {
        // TODO: Implement SamplePressure() method.
    }

    public function popNextPressurePsiValue()
    {
        return $this->temp;
    }

}