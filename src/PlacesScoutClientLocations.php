<?php

namespace KevinEm\PlacesScoutPHP;


/**
 * Class PlacesScoutClientLocations
 * @package KevinEm\PlacesScoutPHP
 */
class PlacesScoutClientLocations
{
    /**
     * @var PlacesScout
     */
    protected $placesScout;

    /**
     * PlacesScoutClientLocations constructor.
     * @param PlacesScout $placesScout
     */
    public function __construct(PlacesScout $placesScout)
    {
        $this->placesScout = $placesScout;
    }

    /**
     * @param array $query
     * @return mixed
     */
    public function lists(array $query = [])
    {
        return $this->placesScout->get('/clientlocations', $query);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data = [])
    {
        return $this->placesScout->post('/clientlocations', $data);
    }

    /**
     * @param $clientLocationId
     * @param array $data
     * @return mixed
     */
    public function autoPopulate($clientLocationId, array $data = [])
    {
        return $this->placesScout->post("/clientlocations/$clientLocationId", $data);
    }

    /**
     * @param $locationId
     * @return mixed
     */
    public function getLocation($locationId)
    {
        return $this->placesScout->get("/clientlocations/$locationId");
    }

    /**
     * @param $locationId
     * @param array $data
     * @return mixed
     */
    public function updateLocation($locationId, array $data = [])
    {
        return $this->placesScout->put("/clientlocations/$locationId", $data);
    }

    /**
     * @param $locationId
     * @param array $data
     * @return mixed
     */
    public function deleteLocation($locationId, array $data = [])
    {
        return $this->placesScout->delete("/clientlocations/$locationId", $data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function bulkAutoPopulate(array $data = [])
    {
        return $this->placesScout->post('/clientlocations/bulkautopopulate', $data);
    }

    /**
     * @param array $query
     * @return mixed
     */
    public function getNamesAndIds(array $query = [])
    {
        return $this->placesScout->get('/clientlocations/namesandids', $query);
    }
}