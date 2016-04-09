<?php

class LeftPadText extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider happyPathDataProvider
     */
    public function testPad($origString, $destString, $padLength)
    {
        $this->assertSame(
            $destString,
            left_pad($origString, $padLength)
        );
    }

    /**
     * @dataProvider happyPathDataProviderWithPadChar
     */
    public function testPadWithPadChar($origString, $destString, $padChar, $padLength)
    {
        $this->assertSame(
            $destString,
            left_pad($origString, $padLength, $padChar)
        );
    }

    public function happyPathDataProvider()
    {
        $tests = [];
        for ($i = 1; $i <= 1000; ++$i) {
            $tests[] = [ 'foo', str_pad('foo', $i, ' ', STR_PAD_LEFT), $i];
        }

        return $tests;
    }

    public function happyPathDataProviderWithPadChar()
    {
        $tests = [];
        for ($i = 1; $i <= 1000; ++$i) {
            $tests[] = [ '123', str_pad('123', $i, '0', STR_PAD_LEFT), '0', $i];
        }

        return $tests;
    }
}
