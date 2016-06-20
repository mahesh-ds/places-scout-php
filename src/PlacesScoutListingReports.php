<?php

namespace KevinEm\PlacesScoutPHP;


/**
 * Class PlacesScoutListingReports
 * @package KevinEm\PlacesScoutPHP
 */
class PlacesScoutListingReports extends AbstractReports
{
    /**
     * @var string
     */
    protected $baseUri;

    /**
     * @param $reportId
     * @param array $data
     * @return mixed
     */
    public function autoPopulate($reportId, array $data = [])
    {
        return $this->placesScout->post("$this->baseUri/$reportId/autopopulate", $data);
    }
    
    /**
     * @param $reportRunId
     * @param $listingId
     * @return mixed
     */
    public function updateListingRun($reportRunId, $listingId)
    {
        return $this->placesScout->put("$this->baseUri/$reportRunId/run/$listingId");
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function saveReportNotes(array $data = [])
    {
        return $this->placesScout->put("$this->baseUri/savelistingreportrunnotes", $data);
    }
}