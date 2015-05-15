<?php
/**
 * Created by PhpStorm.
 * User: mmilivojevic
 * Date: 5/15/15
 * Time: 9:00 PM
 */

echo "Ok Ajax";
define("MONITOR_ID", "monitorId");
define("URL", "url");

if (!empty($_GET[MONITOR_ID])) {
    Monitor::runStream($_GET[URL]);
}