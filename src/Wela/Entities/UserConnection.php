<?php

namespace Wela\Entities;

use Wela\QuovoAbstract;
use Wela\QuovoApp;
use Wela\QuovoClient;

/**
 * Class UserConnection
 *
 * @package Wela\Entities
 */
class UserConnection extends QuovoAbstract
{
    /**
     * @var QuovoApp The Quovo app entity.
     */
    protected $app;

    /**
     * @var QuovoClient The Guzzle service.
     */
    protected $client;

    /**
     * @const string The uri used for this entity.
     */
    const PATH = 'users/%d/connections';

    /**
     * UserConnection constructor.
     *
     * @param QuovoApp $app
     * @param QuovoClient $client
     */
    public function __construct(QuovoApp $app, QuovoClient $client)
    {
        $this->app = $app;
        $this->client = $client;
    }

//    /**
//     * Create an account
//     *
//     * Creates an Account for a User.
//     *
//     * @param int   $userId
//     * @param array $params
//     *
//     * @return mixed
//     */
//    public function create($userId, array $params)
//    {
//        $options = [
//            'json' => $params
//        ];
//
//        return $this->post(
//            $this->app,
//            $this->client,
//            sprintf(self::PATH, $userId),
//            $options
//        );
//    }

    /**
     * Get Connections
     *
     * Returns all of a User’s Connections.
     *
     * @param $userId
     *
     * @return mixed
     */
    public function all($userId)
    {
        return $this->get(
            $this->app,
            $this->client,
            sprintf(self::PATH, $userId)
        );
    }

    /**
     * Delete Connection
     *
     * Delete's a Connection.
     *
     * @param $connectionId
     *
     * @return mixed
     */
    public function delete($connectionId)
    {
        return $this->delete(
            $this->app,
            $this->client,
            sprintf(self::PATH, $connectionId)
        );
    }


}