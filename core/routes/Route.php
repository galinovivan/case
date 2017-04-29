<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.04.17
 * Time: 21:06
 */

namespace caseweb\routes;

use caseweb\helpers\HttpHelper;


class Route
{

    private $config = array();



    public function setConfig($config)
    {

        $this->config = $config;

    }

    public function getConfig()
    {

        return $this->config;

    }

    public function load()
    {

        $config = $this->getConfig();

        $segments = HttpHelper::getSegments();
        print_r($segments);
        for ($i = 0; $i < count($config); $i++) {

        }


    }

    public function loadController()
    {


    }


}