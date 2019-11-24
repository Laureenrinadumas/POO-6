<?php


class Speedometer
{
    const CONVERT = 0.621371;

    public static function convertKmToMiles(int $km) : float
    {
        $miles = $km * self::CONVERT;
        return $miles;
    }

    public static function convertMilesToKm(int $miles): float
    {
        $km = $miles / self::CONVERT;
        return $km;
    }
}