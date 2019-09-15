<?php

class Helper_StringToColor_Test extends PHPUnit\Framework\TestCase
{
    public function test_Convert_string_to_color()
    {
        $color = \Gomzyakov\StringToColor::convertStringToColor('Gomzyakov');

        $expected_color = [
            'red'   => 30,
            'green' => 138,
            'blue'  => 114,
        ];

        $this->assertEquals($expected_color, $color);
    }

    public function test_Convert_short_string_to_color()
    {
        $color = \Gomzyakov\StringToColor::convertStringToColor('Sasha');

        $expected_color = [
            'red'   => 170,
            'green' => 79,
            'blue'  => 45,
        ];

        $this->assertEquals($expected_color, $color);
    }
}
