<?php

namespace App\TirePressureMonitoringSystem;


interface SensorInterface
{
    public static function SamplePressure();
    public function popNextPressurePsiValue();
}