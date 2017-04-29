<?php

namespace caseweb\core;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.04.17
 * Time: 18:54
 */
class Loader
{

    const CORE_PATH = 'core';
    const APPLICATION_PATH = 'application';

    const LIBS_DIR = '/libs/';

    const CONTROLLERS_DIR = '/controllers/';

    const HELPERS_DIR = '/helpers/';


    private $config;


    /**
     * Loader constructor.
     */
    public function __construct()
    {

        $this->config = array();

    }

    /**
     * @param array $config
     */
    public function setConfig(array $config)
    {

        $this->config = $config;

    }


    /**
     * @return array
     */
    public function getConfig()
    {

        return $this->config;

    }


    /**
     *
     */
    public function loadHelpers()
    {

        $this->loadResource('helpers', true);


    }

    public function LoadLibs()
    {

        $this->loadResource('libs');

    }

    public function loadControllers()
    {

        require_once (self::CORE_PATH . self::CONTROLLERS_DIR . 'Controller.php');

        $this->loadResource('controllers', true);

    }

    /**
     * @param $res
     * @return mixed
     */
    private function getResource($res)
    {

        $config = $this->getConfig();
        return $config['load'][$res];

    }

    /**
     * @param $res
     * @param bool $appLoad
     */
    private function loadResource($res, $appLoad = false)
    {
        $resourceArray = $this->getResource($res);

        for ($i = 0; $i < count($resourceArray); $i++) {
            $resCorePath = self::CORE_PATH . '/' . $res . '/' . $resourceArray[$i] . '.php';
            $resAppPath = '';
            if ($appLoad) {
                $resAppPath = self::APPLICATION_PATH . '/' . $res . '/' . $resourceArray[$i] . '.php';
            }

            if (file_exists($resCorePath)) {
                require_once ($resCorePath);
            } elseif (file_exists($resAppPath)) {
                require_once ($resAppPath);
            }
        }

    }

}