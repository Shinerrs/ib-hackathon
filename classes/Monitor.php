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
    public $host;
    public $port;

    function __construct($id)
    {
//        if (!empty($id)) {
//            // TODO: Create new Monitor in database
//        } else {
//            // Fetch monitor from DB
//            $payload = array("id" => $id);
//            $response = \Httpful\Request::get(SERVICE_URL_GET_MONITOR)
//                ->body(json_encode($payload))
//                ->send();
//
//            // TODO: check id
//
//            $this->stream = $response->body->stream;
//            $this->positionX = $response->body->positionX;
//            $this->positionY = $response->body->positionY;
//            $this->ip = $response->body->host;
//            $this->port = $response->body->port;
//        }
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
            $this->stream =$stream;
        }
    }

    function runStream($url = null, $monitorIp = null)
    {
//        // If new stream is prompted save it to DB
//        if ($this->stream != $url) {
//            $this->setStream($url);
//        }

//        $response = \Httpful\Request::post('http://requestb.in/1ikp9yg1')
        $response = \Httpful\Request::post("$monitorIp" . SERVER_SHOW_PAGE)
            ->body("\"$url\"")
            ->send();
        // TODO: if request is failed return error
    }

}