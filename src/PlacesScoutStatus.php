<?php

namespace KevinEm\PlacesScoutPHP;


/**
 * Class PlacesScoutStatus
 * @package KevinEm\PlacesScoutPHP
 */
class PlacesScoutStatus
{
    /**
     * @var PlacesScout
     */
    protected $placesScout;

    /**
     * PlacesScoutStatus constructor.
     * @param PlacesScout $placesScout
     */
    public function __construct(PlacesScout $placesScout)
    {
        $this->placesScout = $placesScout;
    }

    /**
     * @return mixed
     */
    public function getReportStatus()
    {
        return $this->placesScout->get('/status/getreportstatus');
    }
}