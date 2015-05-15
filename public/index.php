<?php

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
</head>
<body>

<div class="jumbotron">
    <h1>BG Hackathon - wall monitors</h1>
</div>


<div class="row">
    <div class="col-xs-6 col-md-3">
        <div class="thumbnail">
            <img src="http://pngimg.com/upload/laptop_PNG5895.png" alt="...">
            <div class="caption">
                <h3>Monitor 1</h3>
                <div id="prompt1"></div>
                <br/>
                <input class="btn btn-primary" role="button" type="submit" name="Set stream URL"
                       onclick="document.getElementById('prompt1').textContent = prompt('Please type stream URL:', 'http://');"
                       value="Set stream URL" />
            </div>
        </div>
    </div>


    <div class="col-xs-6 col-md-3">
        <div class="thumbnail">
            <img src="http://pngimg.com/upload/laptop_PNG5895.png" alt="...">
            <div class="caption">
                <h3>Monitor 2</h3>
                <div id="prompt2"></div>
                <br/>
                <input class="btn btn-primary" role="button" type="submit" name="Set stream URL"
                       onclick="document.getElementById('prompt2').textContent = prompt('Please type stream URL:', 'http://');"
                       value="Set stream URL" />
            </div>
        </div>
    </div>

    <div class="col-xs-6 col-md-3">
        <div class="thumbnail">
            <img src="http://pngimg.com/upload/laptop_PNG5895.png" alt="...">
            <div class="caption">
                <h3>Monitor 3</h3>
                <div id="prompt3"></div>
                <br/>
                <input class="btn btn-primary" role="button" type="submit" name="Set stream URL"
                       onclick="document.getElementById('prompt3').textContent = prompt('Please type stream URL:', 'http://');"
                       value="Set stream URL" />
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="thumbnail">
            <img src="http://pngimg.com/upload/laptop_PNG5895.png" alt="...">
            <div class="caption">
                <h3>Monitor 4</h3>
                <div id="prompt4"></div>
                <br/>
                <input class="btn btn-primary" role="button" type="submit" name="Set stream URL"
                       onclick="document.getElementById('prompt4').textContent = prompt('Please type stream URL:', 'http://');"
                       value="Set stream URL" />
            </div>
        </div>
    </div>
</div>

</body>
</html>
