<?php
session_start();
$_SESSION["asd"] = "denemeee";
echo '$_SESSION["asd"] = ' . $_SESSION['asd'];
unset($_SESSION["asd"]);
echo '<br/>Oturum ($_SESSION), birden çok sayfada kullanılacak bilgileri (değişkenlerde) depolamanın bir yoludur.';
echo "<br/><br/>";


setcookie("deneme", "mustafabukulmez", time() + (86400 * 30), "/"); // 86400 = 1 gün
echo '$_COOKIE["deneme"] = ' . $_COOKIE['deneme'];
// setcookie(name, value, expire, path, domain, secure, httponly);
echo '<br/>Çerez, sunucunun kullanıcının bilgisayarına yerleştirdiği küçük bir dosyadır.';
echo "<br/><br/>";

echo "<hr/><br/>";

echo '$_SERVER["DOCUMENT_ROOT"] = ' . $_SERVER['DOCUMENT_ROOT'];
echo '<br/>Sunucunun ayar dosyasında da tanımlandığı gibi, geçerli betiğin altında çalıştığı belge kök dizinidir.';
echo "<br/><br/>";

echo '$_SERVER["REQUEST_URI"] = ' . $_SERVER["REQUEST_URI"];
echo '<br/>Sayfaya erişim için belirtilen URI; örneğin, /index.html.';
echo "<br/><br/>";

echo '$_SERVER["PHP_SELF"] = ' . $_SERVER["PHP_SELF"];
echo '<br/>Çalıştırılmakta olan betiğin, belge kök dizinine göreli dosya adıdır.';
echo "<br/><br/>";

echo '$_SERVER["SERVER_NAME"] = ' . $_SERVER["SERVER_NAME"];
echo '<br/>Geçerli betiğin altında çalıştığı sunucunun adıdır. Eğer betik bir sanal konak üzerinde çalışıyorsa, o sanal konağın adını içerir.';
echo "<br/><br/>";

echo '$_SERVER["REQUEST_METHOD"] = ' . $_SERVER["REQUEST_METHOD"];
echo '<br/>Sayfaya erişim için kullanılan istek yöntemi; GET, HEAD, POST, PUT gibi.';
echo "<br/><br/>";

echo '$_SERVER["QUERY_STRING"] = ' . $_SERVER["QUERY_STRING"];
echo '<br/>Sorgu dizgesi, sayfaya erişirken kullanılabilir. URL deki parametreleri verir.';
echo "<br/><br/>";

echo '$_SERVER["REMOTE_ADDR"] = ' . $_SERVER["REMOTE_ADDR"];
echo '<br/>Geçerli sayfayı görüntüleyen kullanıcının IP adresidir.';
echo "<br/><br/>";


define("DENEME", "bu bir deneme define'dir.");
echo 'define("DENEME","bu bir deneme define dir."); = ' . DENEME;
echo "<br/>";
define("SITE", "www.mustafabukumez.com");
echo 'define("SITE","www.mustafabukumez.com"); = ' . SITE;
echo '<br/>define, bir tanımlama yapıp, o tanımı verdiğimiz isim ile çağırmamıza yarar.';
echo "<br/><br/>";


echo "<hr/>";


echo "<br/>";
echo '<br/>define, aynı zamanda klasör yollarınıda tanımlayabiliriz. Başka klasördeki nesneye ulaşmak için kullanabiliriz.';
echo "<br/><br/>";

define("DERS1", $_SERVER['DOCUMENT_ROOT'] . "/Ders1/");
echo "<br/>Ders1 klasöründeki hello-world.php dosyasını import ettik.<br/>";
include_once(DERS1 . "hello-world.php");
echo "<br/><br/>";


define("DERS2", $_SERVER['DOCUMENT_ROOT'] . "/Ders2/");
echo "<br/>Ders2 klasöründeki index.php dosyasını import ettik.<br/>";
include_once(DERS2 . "index.php");
echo "<br/><br/>";


define("DERS33", $_SERVER['DOCUMENT_ROOT'] . "/Ders3/");
echo "<br/>Ders3 klasöründeki degisken.php dosyasını import ettik.<br/>";
include_once(DERS33 . "degisken.php");


echo "<hr/>";
echo "<br/>";

echo "$ _POST = PHP $ _POST, method=post ile bir HTML formu gönderdikten sonra form verilerini toplamak için kullanılan bir PHP süper global değişkenidir. $ _POST değişkenleri iletmek için de yaygın olarak kullanılır.";
echo "<br/>";
echo "$ _GET = PHP $ _GET, method=get ile bir HTML formu gönderdikten sonra form verilerini toplamak için kullanılan bir PHP süper global değişkenidir. $ _GET, URL'de gönderilen verileri de toplayabilir.";

echo "<br/><br/>";

echo "<hr/>";
echo "<br/>";

echo "GTM +3 olarak Saati almak için kullanırız = gmdate('Y-m-d H:i:s', strtotime('+3 hours')); = "  . gmdate('Y-m-d H:i:s', strtotime('+3 hours'));



echo "<hr/>";
echo "<br/>";



//<?php
//  define("DERS3",  "C:\wamp64\www\Ders3\\");
// include(DERS3."header.php");
// include(DERS3."content.php");
// include(DERS3."footer.php");
//


