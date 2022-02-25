<?php

define("MyCLASS", $_SERVER['DOCUMENT_ROOT'] . "/classes/"); 
// DataBaseSystem.php dosyamız ana dizinde yer alan classes klasöründe yer alıyor.
// define ile de ilgili klasör yolunu bir sabit olarka MyCLASS ismiyle tanımladık. 

include_once(MyCLASS . "DataBaseSystem.php"); // tanımladığımız sabit ile de sınıfımızı bu dosyaya ekledik.
$DB = new DataBaseSystem(); // sınıfımızı tanımladık.
