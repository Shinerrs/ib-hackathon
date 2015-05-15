<?php
/**
 * Created by PhpStorm.
 * User: mmilivojevic
 * Date: 5/15/15
 * Time: 4:58 PM
 */

require_once "Consts.php";

class Monitor {

    private $stream;
    private $positionX;
    private $positionY;
    private $ip;

    function __construct()
    {
        $response = http_get(SERVICE_URL, null, $info);
        $data = json_decode($response);

        $this->stream = $data["stream"];
        $this->positionX = $data["positionX"];
        $this->positionY = $data["positionY"];
        $this->ip = $data["ip"];
    }


}