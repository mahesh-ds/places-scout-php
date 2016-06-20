<?php

namespace KevinEm\PlacesScoutPHP\Exceptions;


class PlacesScoutException extends \Exception
{
    /**
     * PlacesScoutException constructor.
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct($message, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}