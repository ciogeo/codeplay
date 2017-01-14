<?php

/**
 * Class Sort.
 */
class Sort
{
    private $array;

    /**
     * @param $array
     */
    public function __construct($array)
    {
        $this->array = $array;
    }

    /**
     * @return array|mixed
     */
    public function sort()
    {
        if (count($this->array) < 5) {
            $sort = new SortByBubbleSort();
        } else {
            $sort = new SortByQuickSort();
        }

        return $sort->sort($this->array);
    }
}
