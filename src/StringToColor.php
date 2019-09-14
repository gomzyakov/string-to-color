<?php

namespace Gomzyakov;

class StringToColor
{
    /**
     * Outputs a color (#000000) based Text input.
     *
     * @param $text String of text
     */
    public static function convertStringToColor(string $text): array
    {
        // Generate hash of string
        $hash = md5($text);

        $color_RGB = [];
        $color_RGB['red'] = self::_stringToBrightness($hash, 0);
        $color_RGB['green'] = self::_stringToBrightness($hash, 1);
        $color_RGB['blue'] = self::_stringToBrightness($hash, 2);

        return $color_RGB;
    }

    /**
     * @const MAX_BRIGHTNESS Maximum color brightness.
     */
    const MAX_BRIGHTNESS = 180;

    /**
     * @const SUBSTRING_LEN Lenght of string chunk.
     */
    const SUBSTRING_LEN = 10;

    /**
     * Convert chunk of hash into decimal value between 0 and 255.
     */
    private static function _stringToBrightness(string $string, int $offset = 0): int
    {
        $percentage = hexdec(substr($string, $offset * self::SUBSTRING_LEN, self::SUBSTRING_LEN)) / hexdec(str_pad('', self::SUBSTRING_LEN, 'F'));
        $brightness = $percentage * self::MAX_BRIGHTNESS;
        $brightness = round($brightness);

        return (int) $brightness;
    }
}
