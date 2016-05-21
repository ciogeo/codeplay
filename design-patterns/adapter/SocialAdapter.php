<?php

/**
 * Interface SocialAdapter.
 */
interface SocialAdapter
{
    /**
     * @param $status
     *
     * @return mixed
     */
    public function send($status);
}
