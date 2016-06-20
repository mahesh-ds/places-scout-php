<?php

namespace KevinEm\PlacesScoutPHP;


/**
 * Class PlacesScoutLeadGenReports
 * @package KevinEm\PlacesScoutPHP
 */
class PlacesScoutLeadGenReports
{
    /**
     * @var PlacesScout
     */
    protected $placesScout;

    /**
     * @var string
     */
    protected $baseUri = '/leadgenreports';

    /**
     * PlacesScoutLeadGenReports constructor.
     * @param PlacesScout $placesScout
     */
    public function __construct(PlacesScout $placesScout)
    {
        $this->placesScout = $placesScout;
    }

    /**
     * @return mixed
     */
    public function lists()
    {
        return $this->placesScout->get($this->baseUri);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data = [])
    {
        return $this->placesScout->post($this->baseUri, $data);
    }

    /**
     * @param $reportId
     * @return mixed
     */
    public function get($reportId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId");
    }

    /**
     * @param $reportId
     * @param array $data
     * @return mixed
     */
    public function update($reportId, array $data = [])
    {
        return $this->placesScout->put("$this->baseUri/$reportId", $data);
    }

    /**
     * @param $reportId
     * @return mixed
     */
    public function delete($reportId)
    {
        return $this->placesScout->delete("$this->baseUri/$reportId");
    }

    /**
     * @param $reportId
     * @return mixed
     */
    public function getBackLinks($reportId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/backlinks");
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
    public function runReport($reportId, array $data = [])
    {
        return $this->placesScout->post("$this->baseUri/$reportId/runreport", $data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getBulkReports(array $data = [])
    {
        return $this->placesScout->post("$this->baseUri/bulk", $data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getBulkCitations(array $data = [])
    {
        return $this->placesScout->post("$this->baseUri/citations/bulk", $data);
    }

    /**
     * @param $reportId
     * @return mixed
     */
    public function getRunReport($reportId)
    {
        return $this->placesScout->get("$this->baseUri->runs/$reportId");
    }

    /**
     * @param $reportId
     * @return mixed
     */
    public function getPercentComplete($reportId)
    {
        return $this->placesScout->get("$this->baseUri/runs/$reportId/percentcomplete");
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getBulkRuns(array $data = [])
    {
        return $this->placesScout->post("$this->baseUri/runs/bulk", $data);
    }
}