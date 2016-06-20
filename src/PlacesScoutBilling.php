<?php

namespace KevinEm\PlacesScoutPHP;

/**
 * Class PlacesScoutBilling
 * @package KevinEm\PlacesScoutPHP
 */
class PlacesScoutBilling
{
    /**
     * @var PlacesScout
     */
    protected $placesScout;

    /**
     * PlacesScoutBilling constructor.
     * @param PlacesScout $placesScout
     */
    public function __construct(PlacesScout $placesScout)
    {
        $this->placesScout = $placesScout;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getSummary(array $data = [])
    {
        return $this->placesScout->post('/billing/detailed', $data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getDetailedSummary(array $data = [])
    {
        return $this->placesScout->post('/billing/detailed', $data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getLeadGenCreditUsage(array $data = [])
    {
        return $this->placesScout->post('/billing/leadgencreditusage', $data);
    }

    /**
     * @param array $query
     * @return mixed
     */
    public function getUsageReport(array $query = [])
    {
        return $this->placesScout->get('/billing/reportusage', $query);
    }
}