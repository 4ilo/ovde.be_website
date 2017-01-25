<?php

namespace App;

use GuzzleHttp\Client;
use App\Exceptions\CacHostnameNotFoundException;
use App\Exceptions\CloudAtCostLoginFailException;


class CloudAtCost
{

    private $client;
    private $server;
    private $data;

    private $apiKey;
    private $apiLogin;

    /**
     *  CloudAtCost constructor.
     */
    public function __construct($apiKey, $apiLogin)
    {
        $this->client = new Client();

        $this->apiKey = $apiKey;
        $this->apiLogin = $apiLogin;
    }

    /**
     * Gets the data from the cloud at cost api
     *
     * @throws     \App\Exceptions\CloudAtCostLoginFailException  (description)
     */
    public function getData()
    {
        $requestData = $this->client->get("https://panel.cloudatcost.com/api/v1/listservers.php?key=".$this->apiKey."&login=".$this->apiLogin);

        if( isset($requestData->json()["error"]) )
            throw new CloudAtCostLoginFailException; 

        $this->data = $requestData->json()["data"]; 
    }

    /**
     *  De server ophalen in de cac connectie by id
     * 
     *  @param $id
     *  @throws CloudAtCostLoginFailException
     */
    public function Server($id)
    {
        $this->getdata();

        $this->server = $this->data[$id];
    }

    /**
     * Select a server by its hostname
     *
     * @param      String  $hostname  The hostname
     */
    public function selectServer($hostname)
    {
        $this->getdata();

        foreach ($this->data as $server) 
        {
            if($server["hostname"] === $hostname)
            {
                $this->server = $server;
                return;
            }
        }

        throw new CacHostnameNotFoundException;
    }

    /**
     *  Het gebruikte percentage ram ophahalen
     *  
     *  @return int
     */
    public function ramUsage()
    {
        $totaal = $this->server["ram"];
        $gebruik = $this->server["ramusage"];
        return intval($gebruik * 100 / $totaal);
    }

    /**
     *  Het gebruikte percentage hdd ophahalen
     *  
     *  @return int
     */
    public function hddUsage()
    {
        $totaal = $this->server["storage"];
        $gebruik = $this->server["hdusage"];
        return intval($gebruik * 100 / $totaal);
    }

    /**
     *  Het gebruikte percentage cpu ophahalen
     *  
     *  @return int
     */
    public function cpuUsage()
    {
        $totaal = $this->server["cpu"] * (266.66);
        $gebruik = $this->server["cpuusage"];
        return intval($gebruik * 100 / $totaal);
    }

    /**
     *  De juiste klasse ophalen voor de progressBar
     *  
     *  @return string
     */
    public function statusColor($soort)
    {
        $percentage = 0;

        switch($soort)
        {
            case "ram":
               $percentage = $this->ramUsage();
                break;
            case "cpu":
                $percentage = $this->cpuUsage();
                break;
            case "hdd":
                $percentage = $this->hddUsage();
                break;
        }

        if ($percentage < 25)
        {
            return "progress-bar-success";
        }
        if ($percentage < 50)
        {
            return "progress-bar-info";
        }
        if ($percentage < 75)
        {
            return "progress-bar-warning";
        }
        if ($percentage < 100)
        {
            return "progress-bar-danger";
        }

    }
}