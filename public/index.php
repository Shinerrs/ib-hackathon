<?php
/**
 * Created by PhpStorm.
 * User: mmilivojevic
 * Date: 5/15/15
 * Time: 4:52 PM
 */
require_once "../classes/Data.php";

$title = 'Wall monitors';
$description = 'BG Hackathon - wall monitors with RPIs';

// set header for utf-8 encode
header('Content-type: text/html; charset=utf-8');

$data = new Data();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="description" content="<?php echo $description; ?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <style><!--
        body {
            margin:0;
            text-align:center;
            padding:0 1em;
        }
        header, footer, section, aside, nav, article { display: block; }
        --></style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        function refreshMonitor ( monitorId, url, monitorIp) {

            $.get("/public/refreshMonitor.php?monitorId=" + monitorId + "&url=" + encodeURIComponent(url) + "&monitorIp=" + monitorIp);
        }
    </script>
</head>
<body>

<div class="jumbotron">
    <h1><?php echo $title ?></h1>
    <h3><?php echo $description ?></h3>
</div>
<div class="container">

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="thumbnail">
                <img src="http://pngimg.com/upload/laptop_PNG5895.png" alt="...">
                <div class="caption">
                    <h3>Monitor 1</h3>
                    <div class="form-group form-inline">
                        <input type="text" class="form-control" value="<?php echo $data->getRPiIPForMonitor(1) ?>" id="server1" > <br />
                        <input type="text" class="form-control" value="<?php echo $data->getUrlForMonitor(1) ?>" id="url1" >
                        <input class="btn btn-warning" type="button" value="Refresh" onclick="refreshMonitor(1, document.getElementById('url1').value, document.getElementById('server1').value)">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="thumbnail">
                <img src="http://pngimg.com/upload/laptop_PNG5895.png" alt="...">
                <div class="caption">
                    <h3>Monitor 2</h3>
                    <div class="form-group form-inline">
                        <input type="text" class="form-control" value="<?php echo $data->getRPiIPForMonitor(2) ?>" id="server2" > <br />
                        <input type="text" class="form-control" value="<?php echo $data->getUrlForMonitor(2) ?>" id="url2" >
                        <input class="btn btn-warning" type="button" value="Refresh" onclick="refreshMonitor(2, document.getElementById('url2').value, document.getElementById('server2').value)">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="thumbnail">
                <img src="http://pngimg.com/upload/laptop_PNG5895.png" alt="...">
                <div class="caption">
                    <h3>Monitor 3</h3>
                    <div class="form-group form-inline">
                        <input type="text" class="form-control" value="<?php echo $data->getRPiIPForMonitor(2) ?>" id="server3" > <br />
                        <input type="text" class="form-control" value="<?php echo $data->getUrlForMonitor(3) ?>" id="url3" placeholder="http://" >
                        <input class="btn btn-warning" type="button" value="Refresh" onclick="refreshMonitor(3, document.getElementById('url3').value, document.getElementById('server3').value)">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="thumbnail">
                <img src="http://pngimg.com/upload/laptop_PNG5895.png" alt="...">
                <div class="caption">
                    <h3>Monitor 4</h3>
                    <div class="form-group form-inline">
                        <input type="text" class="form-control" value="<?php echo $data->getRPiIPForMonitor(2) ?>" id="server4" > <br />
                        <input type="text" class="form-control" value="<?php echo $data->getUrlForMonitor(4) ?>" id="url4" placeholder="http://" >
                        <input class="btn btn-warning" type="button" value="Refresh" onclick="refreshMonitor(4, document.getElementById('url4').value, document.getElementById('server4').value)">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
