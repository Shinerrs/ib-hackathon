<?php
/**
 * Created by PhpStorm.
 * User: mmilivojevic
 * Date: 5/15/15
 * Time: 4:52 PM
 */
$title = 'Wall monitors';
$description = 'BG Hackathon - wall monitors with RPIs';

// set header for utf-8 encode
header('Content-type: text/html; charset=utf-8');
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
        function refreshMonitor ( monitorId,  url) {
            $.get("/public/refreshMonitor.php?monitorId=" + monitorId + "&url=" + url);
        }
    </script>
</head>
<body>

<div class="jumbotron">
    <h1>BG Hackathon - wall monitors</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="thumbnail">
                <img src="http://pngimg.com/upload/laptop_PNG5895.png" alt="...">
                <div class="caption">
                    <h3>Monitor 1</h3>
                    <div class="form-group form-inline">
                        <input type="text" class="form-control" placeholder="http://" id="url1" >
                        <input class="btn btn-warning" type="button" value="Refresh" onclick="refreshMonitor(1, document.getElementById('url1').value)">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="thumbnail">
                <img src="http://pngimg.com/upload/laptop_PNG5895.png" alt="...">
                <h3>Monitor 2</h3>
                    <div class="form-group form-inline">
                        <input type="text" class="form-control" placeholder="http://" id="url2" >
                        <input class="btn btn-warning" type="button" value="Refresh" onclick="refreshMonitor(2, document.getElementById('url2').value)">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
