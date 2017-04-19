<?php

namespace KevinEm\PlacesScoutPHP;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use KevinEm\PlacesScoutPHP\Exceptions\PlacesScoutException;
use Psr\Http\Message\ResponseInterface;


/**
 * Class PlacesScoutPHP
 * @package KevinEm\PlacesScout
 */
class PlacesScout
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $baseUri = 'https://apihost1.placesscout.com';

    /**
     * PlacesScoutPHP constructor.
     * @param array $options
     */
    public function __construct(array $options)
    {
        $this->username = $options['username'];

        $this->password = $options['password'];

        $this->client = new Client([
            'base_uri' => $this->baseUri,
            'headers'  => [
                'Authorization' => 'Basic ' . base64_encode("$this->username:$this->password"),
                'Accept'        => 'application/json'
            ]
        ]);
    }

    /**
     * @param $uri
     * @param array $options
     * @return mixed
     */
    public function get($uri, array $options = [])
    {
        return $this->client
            ->getAsync($uri, $options)
            ->then(function (ResponseInterface $res) {
                return json_decode((string)$res->getBody());
            }, function (RequestException $e) {
                throw new PlacesScoutException($e->getMessage(), $e->getCode(), $e);
            })
            ->wait();
    }

    /**
     * @param $uri
     * @param $options
     * @return mixed
     */
    public function post($uri, array $options = [])
    {
        return $this->client
            ->postAsync($uri, $options)
            ->then(function (ResponseInterface $res) {
                return json_decode((string)$res->getBody());
            }, function (RequestException $e) {
                throw new PlacesScoutException($e->getMessage(), $e->getCode(), $e);
            })
            ->wait();
    }

    /**
     * @param $uri
     * @param $options
     * @return mixed
     */
    public function put($uri, array $options = [])
    {
        return $this->client
            ->putAsync($uri, $options)
            ->then(function (ResponseInterface $res) {
                return json_decode((string)$res->getBody());
            }, function (RequestException $e) {
                throw new PlacesScoutException($e->getMessage(), $e->getCode(), $e);
            })
            ->wait();
    }

    /**
     * @param $uri
     * @param array $options
     * @return mixed
     */
    public function delete($uri, array $options = [])
    {
        return $this->client
            ->deleteAsync($uri, $options)
            ->then(function (ResponseInterface $res) {
                return json_decode((string)$res->getBody());
            }, function (RequestException $e) {
                throw new PlacesScoutException($e->getMessage(), $e->getCode(), $e);
            })
            ->wait();
    }
}