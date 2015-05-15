<?php
/**
 * Created by PhpStorm.
 * User: mmilivojevic
 * Date: 5/15/15
 * Time: 4:58 PM
 */

require_once "Consts.php";

class Monitor {

    public $stream;
    public $positionX;
    public $positionY;
    public $ip;

    function __construct($id)
    {
        if (!empty($id)) {
            // TODO: Create new Monitor in database
        } else {
            // Fetch monitor from DB
            $response = http_get(SERVICE_URL_GET_MONITOR, array("id"=>$id), $info);
            $data = json_decode($response);

            // TODO: check id

            $this->stream = $data["stream"];
            $this->positionX = $data["positionX"];
            $this->positionY = $data["positionY"];
            $this->ip = $data["ip"];
        }
    }


    function setStream($stream)
    {
        if (!empty($stream)) {
            $data = array(
                "id"=>$this->id,
                "stream"=>$stream,
            );
            http_post_data(SERVICE_URL_SET_MONITOR, $data, $info);

        }
    }

}