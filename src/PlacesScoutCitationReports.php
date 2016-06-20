<?php

namespace KevinEm\PlacesScoutPHP;


/**
 * Class PlacesScoutCitationReports
 * @package KevinEm\PlacesScoutPHP
 */
class PlacesScoutCitationReports extends AbstractReports
{
    /**
     * @var string
     */
    protected $baseUri = '/citationreports';

    /**
     * @param array $data
     * @return mixed
     */
    public function saveReportNotes(array $data = [])
    {
        return $this->placesScout->put("$this->baseUri/savecitationreportrunnotes", $data);
    }

    /**
     * @param $reportId
     * @return mixed
     */
    public function getCitations($reportId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/citations");
    }

    /**
     * @param $reportId
     * @param array $data
     * @return mixed
     */
    public function updateCitations($reportId, array $data = [])
    {
        return $this->placesScout->put("$this->baseUri/$reportId/citations", $data);
    }

    /**
     * @param $reportId
     * @param $citationId
     * @param array $data
     * @return mixed
     */
    public function updateCitation($reportId, $citationId, array $data = [])
    {
        return $this->placesScout->put("$this->baseUri/$reportId/citations/$citationId", $data);
    }

    /**
     * @return mixed
     */
    public function getLostCitations($reportId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/citations/list");
    }

    /**
     * @return mixed
     */
    public function getNewCitations($reportId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/citations/new");
    }

    /**
     * @return mixed
     */
    public function getPagedCitations($reportId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/citationspages");
    }
}