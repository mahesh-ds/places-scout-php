<?php

namespace KevinEm\PlacesScoutPHP;


/**
 * Class PlacesScoutClient
 * @package KevinEm\PlacesScoutPHP
 */
class PlacesScoutClients
{
    /**
     * @var PlacesScout
     */
    protected $placesScout;

    /**
     * PlacesScoutClient constructor.
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
        return $this->placesScout->get('/clients', $query);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->placesScout->post('/clients', $data);
    }

    /**
     * @param $clientId
     * @return mixed
     */
    public function get($clientId)
    {
        return $this->placesScout->get("/clients/$clientId");
    }

    /**
     * @param $clientId
     * @param $data
     * @return mixed
     */
    public function update($clientId, $data)
    {
        return $this->placesScout->put("/clients/$clientId", $data);
    }

    /**
     * @param $clientId
     * @return mixed
     */
    public function delete($clientId)
    {
        return $this->placesScout->delete("/clients/$clientId");
    }

    /**
     * @param $clientId
     * @param $data
     * @return mixed
     */
    public function getMultiLocationCitationReportDataByLocations($clientId, $data)
    {
        return $this->placesScout->post("/clients/$clientId/multilocationcitationreportdatabylocations", $data);
    }

    /**
     * @param $clientId
     * @param $data
     * @return mixed
     */
    public function getMultiLocationListingReportDataByLocations($clientId, $data)
    {
        return $this->placesScout->post("/clients/$clientId/multilocationlistingreportdatabylocations", $data);
    }

    /**
     * @param $clientId
     * @param $data
     * @return mixed
     */
    public function getMultiLocationRankingReportDataByLocations($clientId, $data)
    {
        return $this->placesScout->post("/clients/$clientId/multilocationrankingreportdatabylocations", $data);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function getNamesAndIds(array $query = [])
    {
        return $this->placesScout->get('/clients/namesandids', $query);
    }
}