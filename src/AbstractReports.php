<?php


namespace KevinEm\PlacesScoutPHP;


abstract class AbstractReports
{
    /**
     * @var PlacesScout
     */
    protected $placesScout;

    /**
     * @var string
     */
    protected $baseUri;

    /**
     * PlacesScoutRankingReports constructor.
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
        return $this->placesScout->get($this->baseUri, $query);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->placesScout->post($this->baseUri, $data);
    }

    /**
     * @param $clientId
     * @param array $query
     * @return mixed
     */
    public function getAllByClient($clientId, array $query = [])
    {
        return $this->placesScout->get("$this->baseUri/$clientId/allbyclient", $query);
    }

    /**
     * @param $clientId
     * @param array $data
     * @return mixed
     */
    public function getAllByLocations($clientId, array $data = [])
    {
        return $this->placesScout->post("$this->baseUri/$clientId/allbylocations", $data);
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
     * @param array $data
     * @return mixed
     */
    public function delete($reportId, array $data = [])
    {
        return $this->placesScout->delete("$this->baseUri/$reportId", $data);
    }

    /**
     * @param $reportId
     * @param array $query
     * @return mixed
     */
    public function getHistoricalData($reportId, array $query = [])
    {
        return $this->placesScout->get("$this->baseUri/$reportId/historical", $query);
    }

    /**
     * @param $reportId
     * @param array $query
     * @return mixed
     */
    public function getRunDatesAndIds($reportId, array $query = [])
    {
        return $this->placesScout->get("$this->baseUri/$reportId/rundatesandids", $query);
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
     * @param $reportId
     * @param array $query
     * @return mixed
     */
    public function getRuns($reportId, array $query = [])
    {
        return $this->placesScout->get("$this->baseUri/$reportId/runs", $query);
    }

    /**
     * @param $reportId
     * @param $reportRunId
     * @return mixed
     */
    public function getRun($reportId, $reportRunId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/runs/$reportRunId");
    }

    /**
     * @param $reportId
     * @param $reportRunId
     * @param array $data
     * @return mixed
     */
    public function deleteRun($reportId, $reportRunId, array $data = [])
    {
        return $this->placesScout->delete("$this->baseUri/$reportId/runs/$reportRunId", $data);
    }

    /**
     * @param $reportId
     * @return mixed
     */
    public function getNewestRun($reportId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/runs/newest");
    }

    /**
     * @param $reportId
     * @return mixed
     */
    public function getOldestRun($reportId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/runs/oldest");
    }

    /**
     * @param array $query
     * @return mixed
     */
    public function getAll(array $query = [])
    {
        return $this->placesScout->get("$this->baseUri/all", $query);
    }

    /**
     * @param array $query
     * @return mixed
     */
    public function getAllData(array $query = [])
    {
        return $this->placesScout->get("$this->baseUri/allreportdata", $query);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getMultiReportSummary(array $data = [])
    {
        return $this->placesScout->post("$this->baseUri/multireportsummary", $data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getBulkRuns(array $data = [])
    {
        return $this->placesScout->post("$this->baseUri/runs/bulk", $data);
    }

    /**
     * @param $reportId
     * @param array $data
     * @return mixed
     */
    public function updateReportSettings($reportId, array $data = [])
    {
        return $this->placesScout->put("$this->baseUri/updateclientreportsettings/$reportId", $data);
    }
}