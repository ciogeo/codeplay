<?php

/**
 * Class SortByQuickSort
 */
class SortByQuickSort implements SortStrategy {

    /**
     * @param $array
     * @return array
     */
    public function sort($array)
    {
        if (count($array) < 2) {
            return $array;
        }

        $left = $right = array();

        reset($array);

        $pivot_key = key($array);
        $pivot = array_shift($array);

        foreach ($array as $k => $v) {
            if ($v < $pivot) {
                $left[$k] = $v;
            } else {
                $right[$k] = $v;
            }
        }

        return array_merge($this->sort($left), array($pivot_key => $pivot), $this->sort($right));
    }
}