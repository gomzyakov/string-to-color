<?php

class Helper_StringToColor_Test extends PHPUnit\Framework\TestCase
{
    public function test_Generate_color_from_string()
    {
        $color = \Gomzyakov\StringToColor::generateColorFromString('Gomzyakov');

        $expected_color = [
            'red'   => 30,
            'green' => 138,
            'blue'  => 114,
        ];

        $this->assertEquals($expected_color, $color);
    }

    public function test_Generate_color_from_short_string()
    {
        $color = \Gomzyakov\StringToColor::generateColorFromString('A');

        $expected_color = [
            'red'   => 90,
            'green' => 117,
            'blue'  => 38,
        ];

        $this->assertEquals($expected_color, $color);
    }
}
