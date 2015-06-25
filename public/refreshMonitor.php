<?php
/**
 * Created by PhpStorm.
 * User: mmilivojevic
 * Date: 5/15/15
 * Time: 9:00 PM
 */

require_once "../classes/Monitor.php";
require_once "../classes/Data.php";

echo "Ok Ajax";
define("MONITOR_ID", "monitorId");
define("MONITOR_IP", "monitorIp");
define("URL", "url");

if (!empty($_GET[MONITOR_ID])) {

    //save data
    $data = new Data();
    $data->setRPiIPForMonitor($_GET[MONITOR_ID], $_GET[MONITOR_IP]);
    $data->setUrlForMonitor($_GET[MONITOR_ID], $_GET[URL]);

    // refresh monitor
    $monitor = new Monitor($_GET[MONITOR_ID]);
    $monitor->runStream($_GET[URL], $_GET[MONITOR_IP]);
}