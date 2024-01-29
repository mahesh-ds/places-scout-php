<?php

namespace KevinEm\PlacesScoutPHP;


/**
 * Class PlacesScoutReputationReports
 * @package KevinEm\PlacesScoutPHP
 */
class PlacesScoutReputationReports extends AbstractReports
{
    /**
     * @var string
     */
    protected $baseUri = '/reputationreports';

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
     * @param $reportId
     * @return mixed
     */
    public function getAutoPopulateResults($reportId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/autopopulate/results");
    }

    /**
     * @param $reportId
     * @param array $query
     * @return mixed
     */
    public function getNewReviews($reportId, array $query = [])
    {
        return $this->placesScout->get("$this->baseUri/$reportId/newreviews", $query);
    }

    /**
     * @param $reportId
     * @param array $query
     * @return mixed
     */
    public function getReviews($reportId, array $query = [])
    {
        return $this->placesScout->get("$this->baseUri/$reportId/reviews", $query);
    }

    /**
     * @param $reportId
     * @param $source
     * @param array $query
     * @return mixed
     */
    public function getSourceReviews($reportId, $source, array $query = [])
    {
        return $this->placesScout->get("$this->baseUri/$reportId/reviews/$source", $query);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getMultipleLocationHistoricalData(array $data = [])
    {
        return $this->placesScout->post("$this->baseUri/historical/multilocation", $data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getBulkReviews(array $data = [])
    {
        return $this->placesScout->post("$this->baseUri/reviews/bulk", $data);
    }
    /**
     * @param array $data
     * @return mixed
     */
    public function getReviewsByRunId($reportId, $reportRunId, array $query = [])
    {
        return $this->placesScout->get("$this->baseUri/$reportId/runs/$reportRunId/reviewsandrun", $query);
    }
    /**
     * @param array $data
     * @return mixed
     */
    public function saveReportNotes(array $data = [])
    {
        return $this->placesScout->put("$this->baseUri/savereputationreportrunnotes", $data);
    }
}
