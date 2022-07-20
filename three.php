<?php
/**
 * Calculated by divide 360 degrees between 12 hours
 */
const HOUR_DEGREES = 30;

/**
 * Calculated by divide 360 degrees between 60 minutes
 */
const MINUTE_DEGREES = 6;

/**
 * @throws Exception incorrect format
 */
function calculateAngleAmplitude(string $time)
{
    if (strlen($time) !== 5) {
        throw new Exception('Time parameter must be on "hh:mm" format');
    }

    $data = explode(':', $time);

    $hours = intval($data[0]);

    $minutes = intval($data[1]);

    if ($hours > 12) {
        $hours = $hours % 12;
        echo 'hours assumed as ' . $hours . PHP_EOL;
    }

    if ($minutes > 60) {
        $minutes = $minutes % 60;
        echo 'minutes assumed as ' . $minutes . PHP_EOL;
    }

    $hours_position = $hours * HOUR_DEGREES;

    $minutes_position = $minutes * MINUTE_DEGREES;

    $preliminary_angle_amplitude = abs($hours_position - $minutes_position);

    /**
     * if $preliminary_angle_amplitude is bigger than 180 degrees calculate and return internal angle
     */

    return $preliminary_angle_amplitude > 180 ?
        360 - $preliminary_angle_amplitude :
        $preliminary_angle_amplitude;
}

echo calculateAngleAmplitude('02:04') . PHP_EOL;

echo calculateAngleAmplitude('13:04') . PHP_EOL;

echo calculateAngleAmplitude('12:64') . PHP_EOL;

echo calculateAngleAmplitude('14:84') . PHP_EOL;

echo calculateAngleAmplitude('28:04') . PHP_EOL;

echo calculateAngleAmplitude('01:45') . PHP_EOL;

echo calculateAngleAmplitude('12:30') . PHP_EOL;

echo calculateAngleAmplitude('10:30') . PHP_EOL;

echo calculateAngleAmplitude('12:05') . PHP_EOL;

echo calculateAngleAmplitude('02:25') . PHP_EOL;

echo calculateAngleAmplitude('12:12') . PHP_EOL;

echo calculateAngleAmplitude('00:00') . PHP_EOL;

echo calculateAngleAmplitude('12:27') . PHP_EOL;