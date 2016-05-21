<?php

/**
 * Class FacebookAdapter.
 */
class FacebookAdapter implements SocialAdapter
{
    private $facebook;

    /**
     * @param Facebook $facebook
     */
    public function __construct(Facebook $facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @param $status
     */
    public function send($status)
    {
        $this->facebook->updateStatus($status);
    }
}
