
<?php
// string date ( string $format [, int $timestamp = time() ] )
 echo date('l jS \of F Y h:i:s A');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HNG stage1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <!-- The section for time -->
    <div class="section-time">
        <svg class="svg" width=700 height=800>
            <g id="time-view">
                <ellipse cx="150" cy="260" rx="200" ry="100" style="fill:#00796B" />
                <text x="5" y="250" text-anchor="start" font-size="65" dx="0" dy=".3em" fill= "white"> <?php echo date("h:i:s a"); ?> </text>         
            </g>        
        </svg>
        <div class="section-message">
                <p class="text-message" id="message_designed">Designed By</p>
                <p class="text-message" id="message_name">Sunday Ndu</p>
        </div>
    </div>
    
</body>
</html>