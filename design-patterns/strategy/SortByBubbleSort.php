<?php

/**
 * Class SortByBubbleSort.
 */
class SortByBubbleSort implements SortStrategy
{
    /**
     * @param $array
     *
     * @return mixed
     */
    public function sort($array)
    {
        if (!$length = count($array)) {
            return $array;
        }

        for ($outer = 0; $outer < $length; $outer++) {
            for ($inner = 0; $inner < $length; $inner++) {
                if ($array[$outer] < $array[$inner]) {
                    $temp = $array[$outer];
                    $array[$outer] = $array[$inner];
                    $array[$inner] = $temp;
                }
            }
        }

        return $array;
    }
}
