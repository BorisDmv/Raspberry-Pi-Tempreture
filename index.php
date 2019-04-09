<?php
    header("Refresh:30");
    $output = shell_exec("sudo /opt/vc/bin/vcgencmd measure_temp");
    $output2 = str_replace("temp=","", $output);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raspberry Pi Tempreture</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <p class="titleText">Raspberry pi Core Temp</p>
    <div class="MainContainer">
        <img class="img" src="rasppilogo.png">
        <!-- <img class="img2" src="rasppilogo.png"> -->

        <div id="TempretureContainer">
            <p class="tempText"><?php echo "$output2"; ?></p>
        </div>
    </div>
    
</body>
</html>