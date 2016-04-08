<?php
if (!function_exists('left_pad')) {
    /**
     * Left-pad a string
     * 
     * @param string $str
     * @param int $length
     * @param string $space
     * @return string
     */
    function left_pad($str, $length = 0, $space = ' ')
    {
        return str_pad($str, $length, $space, STR_PAD_LEFT);
    }
}
