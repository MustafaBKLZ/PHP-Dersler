<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/Ders2/" . "ImportClasses.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta name="author" content="Mustafa BÜKÜLMEZ">
    <title> Mustafa Bükülmez PHP Dersleri</title>
</head>

<body>
    <?php if ($DB->connect)
        echo  "Connection OK";
    else
        echo "Connection ERROR";
    ?>
</body>

</html>