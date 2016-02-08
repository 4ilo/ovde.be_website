<?php
    /**
     * Created by PhpStorm.
     * User: Olivier
     * Date: 11/01/16
     * Time: 16:58
     */
    
    namespace App;

    use App\CACApi;
    use App\Exceptions\CloudAtCostLoginFailException;

    class CloudAtCost
    {

        private $verbinding;
        private $server;

        /**
         * CloudAtCost constructor.
         */
        public function __construct()
        {
            $this->verbinding = new CACApi(array(
                "key" => env("CAC_KEY"),
                "login" => env("CAC_LOGIN")
            ));
        }

        /**
         * De server ophalen in de cac connectie
         * @param $id
         * @throws CloudAtCostLoginFailException
         */
        public function server($id)
        {
            $temp = $this->verbinding->getServers();
            if (isset($temp["status"]) || $temp == null)
            {
                throw new CloudAtCostLoginFailException;
            }
            $this->server = $temp[$id];
        }

        /**
         * Het gebruikte percentage ram ophahalen
         * @return int
         */
        public function ramUsage()
        {
            $totaal = $this->server["ram"];
            $gebruik = $this->server["ramusage"];
            return intval($gebruik * 100 / $totaal);
        }

        /**
         * Het gebruikte percentage hdd ophahalen
         * @return int
         */
        public function hddUsage()
        {
            $totaal = $this->server["storage"];
            $gebruik = $this->server["hdusage"];
            return intval($gebruik * 100 / $totaal);
        }

        /**
         * Het gebruikte percentage cpu ophahalen
         * @return int
         */
        public function cpuUsage()
        {
            $totaal = $this->server["cpu"]* (266.66);
            $gebruik = $this->server["cpuusage"];
            return intval($gebruik * 100 / $totaal);
        }

        /**
         * De juiste klasse ophalen voor de progressBar
         * @param $soort
         * @return string
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