<?php

namespace KevinEm\PlacesScoutPHP;


/**
 * Class PlacesScoutNotifications
 * @package KevinEm\PlacesScoutPHP
 */
class PlacesScoutNotifications
{
    /**
     * @var PlacesScout
     */
    protected $placesScout;

    /**
     * PlacesScoutNotifications constructor.
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
        return $this->placesScout->get('notifications', $query);
    }

    /**
     * @param $notificationId
     * @param array $data
     * @return mixed
     */
    public function markRead($notificationId, array $data = [])
    {
        return $this->placesScout->put("/notifications/$notificationId", $data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function bulkUpdate(array $data = [])
    {
        return $this->placesScout->put('/notifications/bulkupdate', $data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function markAllRead(array $data = [])
    {
        return $this->placesScout->post('/notifications/updateall', $data);
    }
}