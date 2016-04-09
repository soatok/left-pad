<?php
if (!function_exists('left_pad')) {
    /**
     * Left-pad a string
     * 
     * @param string $str
     * @param int $length
     * @param string $space
     * @param string $encoding
     * @return string
     */
    function left_pad($str, $length = 0, $space = ' ', $encoding = '8bit')
    {
        if (is_array($str)) {
            return array_left_pad($str);
        }
        
        if (function_exists('mb_strlen')) {
            while (mb_strlen($str, $encoding) < $length) {
                $str = $space . $str;
            }
            return $str;
        }
        return str_pad($str, $length, $space, STR_PAD_LEFT);
    }
    
    function array_left_pad($array, $length, $space)
    {
        if (! is_int($length) and function_exists('count')) {
            $length = count($array);
        }
        
        $padded = [];
        while ($length-- > 0) {
            $padded[$length] = $space;
        }
        
        return $padded + $array;
    }
}
