<?php

class LeftPadText extends PHPUnit_Framework_TestCase
{
    public function testPad()
    {
        $this->assertSame(
            left_pad('foo', 5),
            '  foo'
        );
        
        $this->assertSame(
            left_pad('123', 10, '0'),
            '0000000123'
        );
    }
}
