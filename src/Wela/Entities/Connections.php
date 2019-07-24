<?php

namespace Wela\Entities;

use Wela\QuovoAbstract;
use Wela\QuovoApp;
use Wela\QuovoClient;

/**
 * Class Connections
 *
 * @package Wela\Entities
 */
class Connections extends QuovoAbstract
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
    const PATH = 'connections';

    /**
     * Connections constructor.
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
//     * Get all accounts
//     *
//     * Retrieves all Accounts across all Users.
//     *
//     * @return mixed
//     */
//    public function all()
//    {
//        return $this->get(
//            $this->app,
//            $this->client,
//            self::PATH
//        );
//    }
//
//    /**
//     * Create an account
//     *
//     * Creates a new Quovo Account.
//     *
//     * @param array $params
//     *
//     * @return mixed
//     */
//    public function create(array $params)
//    {
//        $options = [
//            'json' => $params
//        ];
//
//        return $this->post(
//            $this->app,
//            $this->client,
//            self::PATH,
//            $options
//        );
//    }
//
//    /**
//     * Fetch a single Account
//     *
//     * Provides information on a specific Account
//     *
//     * @param int $accountId
//     *
//     * @return mixed
//     */
//    public function find($accountId)
//    {
//        return $this->get(
//            $this->app,
//            $this->client,
//            self::PATH.'/'.$accountId
//        );
//    }
//
//    /**
//     * Modify an account
//     *
//     * Modifies an existing Account.
//     *
//     * @param int   $accountId
//     * @param array $params
//     *
//     * @return mixed
//     */
//    public function modify($accountId, array $params)
//    {
//        $options = [
//            'json' => $params
//        ];
//
//        return $this->put(
//            $this->app,
//            $this->client,
//            self::PATH.'/'.$accountId,
//            $options
//        );
//    }

    /**
     * Delete a Connection
     *
     * Deletes an existing Quovo Connection.
     *
     * @param int $connectionId
     */
    public function deleteConnection($connectionId)
    {
        $this->delete(
            $this->app,
            $this->client,
            self::PATH.'/'.$connectionId
        );
    }

}