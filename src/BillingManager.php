<?php

namespace App;


use App\Entities\Client;
use App\Entities\PayAsYouGo;

class BillingManager
{

    /** @var  Client */
    private $client;

    /** @var  PayAsYouGo */
    private $payAsYouGo;

    /**
     * BillingManager constructor.
     * @param Client     $client
     * @param PayAsYouGo $payAsYouGo
     */
    public function __construct(Client $client, PayAsYouGo $payAsYouGo)
    {
        $this->client     = $client;
        $this->payAsYouGo = $payAsYouGo;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return PayAsYouGo
     */
    public function getPayAsYouGo()
    {
        return $this->payAsYouGo;
    }

}