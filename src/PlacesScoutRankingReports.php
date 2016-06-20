<?php

namespace KevinEm\PlacesScoutPHP;


/**
 * Class PlacesScoutRankingReports
 * @package KevinEm\PlacesScoutPHP
 */
class PlacesScoutRankingReports extends AbstractReports
{
    /**
     * @var string
     */
    protected $baseUri = '/rankingreports';

    public function getHistoricalKeywords($reportId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/historical/keywords");
    }

    /**
     * @param $reportId
     * @param $reportRunId
     * @return mixed
     */
    public function getReportRunKeywordSearchResults($reportId, $reportRunId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/runs/$reportRunId/keywordsearchresults");
    }

    /**
     * @param $reportId
     * @param $reportRunId
     * @param $keywordSearchResultId
     * @return mixed
     */
    public function getReportRunKeywordSearchResult($reportId, $reportRunId, $keywordSearchResultId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/runs/$reportRunId/keywordsearchresults/$keywordSearchResultId");
    }

    /**
     * @param $reportId
     * @param $reportRunId
     * @return mixed
     */
    public function getReportRunSummaryMetrics($reportId, $reportRunId)
    {
        return $this->placesScout->get("$this->baseUri/$reportId/runs/$reportRunId/summarymetrics");
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
    public function saveReportNotes(array $data = [])
    {
        return $this->placesScout->put("$this->baseUri/saverankingreportrunnotes", $data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getBulkSummaryMetrics(array $data = [])
    {
        return $this->placesScout->post("$this->baseUri/summarymetrics/bulk", $data);
    }
}