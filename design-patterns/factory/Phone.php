<?php

/**
 * Class Phone.
 */
class Phone
{
    private $maker;
    private $model;

    /**
     * @param $maker
     * @param $model
     */
    public function __construct($maker, $model)
    {
        $this->maker = $maker;
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->maker.' '.$this->model;
    }
}
