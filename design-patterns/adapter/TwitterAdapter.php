<?php

/**
 * Class TwitterAdapter
 */
class TwitterAdapter implements SocialAdapter {

    private $twitter;

    /**
     * @param Twitter $twitter
     */
    function __construct(Twitter $twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * @param $status
     */
    public function send($status)
    {
        $this->twitter->tweet($status);
    }
}
