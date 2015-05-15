<?php
/**
 * Created by PhpStorm.
 * User: mmilivojevic
 * Date: 5/15/15
 * Time: 4:58 PM
 */

require_once "Consts.php";
require_once "../vendor/autoload.php";

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
            $payload = array("id" => $id);
            $response = \Httpful\Request::get(SERVICE_URL_GET_MONITOR)
                ->body(json_encode($payload))
                ->send();

            // TODO: check id

            $this->stream = $response->body->stream;
            $this->positionX = $response->body->positionX;
            $this->positionY = $response->body->positionY;
            $this->ip = $response->body->ip;
        }
    }


    function setStream($stream)
    {
        if (!empty($stream)) {
            $data = array(
                "id"=>$this->id,
                "stream"=>$stream,
            );
            $response = \Httpful\Request::put(SERVICE_URL_SET_MONITOR)
                ->body(json_encode($data))
                ->send();

            // TODO: if request is failed return error
        }
    }

    function runStream()
    {
        $response = \Httpful\Request::post(SERVER_HOST_1 + SERVER_SHOW_PAGE)
            ->body($this->stream)
            ->send();
        // TODO: if request is failed return error
    }

}