<?php
/**
 * Created by PhpStorm.
 * User: mmilivojevic
 * Date: 6/25/15
 * Time: 3:35 PM
 */

require_once "Consts.php";
require_once "../vendor/autoload.php";

class Data {

    const RPI_IP = "ip";
    const RPI_URL = "url";

    private $config;

    function  __construct() {
        $this->config = new Config_Lite(__DIR__ . "/../" . CONFIG_FILE);
    }


    function getUrlForMonitor($idMonitor) {
        return $this->config[$idMonitor][self::RPI_URL];
    }

    function setUrlForMonitor($idMonitor, $url) {
        $this->config->set($idMonitor, self::RPI_URL, $url);
        $this->config->save();
    }

    function getRPiIPForMonitor($idMonitor) {
        return $this->config[$idMonitor][self::RPI_IP];
    }

    function setRPiIPForMonitor($idMonitor, $ip) {
        $this->config->set($idMonitor, self::RPI_IP, $ip);
        $this->config->save();
    }

}