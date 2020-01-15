<?php
function result()
{
    $result = false;
    $night = date('H:i', strtotime('21:00'));
    $day = date('H:i', strtotime('05:00'));
    $now = date("H:i");

    if ($now < $day || $now > $night) {
        $result = "images/night.jpg";
    } else {
        $result = "images/day.jpg";
    }
    return $result;
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            color: aliceblue;
            background-position: 0% 13%;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
        }
    </style>
</head>
<body style="background-image: url('<?php echo result()?>')" >

    <p><?php echo (result() === "images/night.jpg") ? "сейчас ночь" : "сейчас день"?></p>

</body>
</html>