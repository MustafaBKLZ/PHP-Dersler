<?php
// sık kullanacağımız bazı fonksiyonlar
$string = "www.mustafabukulmez.com";
$br = "<br/> <br/>";


// echo, bir değişkeni ekrana basar.
echo $string . $br;

// . (nokta) iki string ifadeyi birleştirir
echo $string . $br;

// var_dump parametre olarak aldığı değer hakkında geniş bilgiler verir. 
// Çok kullanışlı bir metottur.
// Yazının devamında bunu kullanacağım.
var_dump($string . $br);
// Sonuç:  C:\wamp64\www\PHP-Dersler\Ders4\functions.php:14:string 'www.mustafabukulmez.com<br/> <br/>' (length=34)


// explode, ilk parametrede verilen karaktere göre 2. parametredeki string'i bölerek dizi haline getirir.
$array1 = explode(".", $string);
var_dump($array1);
// Sonuç: 
// C:\wamp64\www\PHP-Dersler\Ders4\functions.php:20:
// array (size=3)
//   0 => string 'www' (length=3)
//   1 => string 'mustafabukulmez' (length=15)
//   2 => string 'com' (length=3)


// implode, ilk parametrede verilen karaktere göre 2. parametredeki diziyi birleştirerek string haline getirir.
// explode'un yaptığı hatayı düzeltir :D / explode'un tersidir.
// Diğer adı da Join'dir. implode 'un alias'ıdır.
var_dump(implode(".", $array1));
// Sonuç:  C:\wamp64\www\PHP-Dersler\Ders4\functions.php:32:string 'www.mustafabukulmez.com' (length=23)
var_dump(join(".", $array1));
// Sonuç:  C:\wamp64\www\PHP-Dersler\Ders4\functions.php:32:string 'www.mustafabukulmez.com' (length=23)


// substr, ilk paramatredeki string'in istediğimiz parçasını alır. 
// Örnekte: 4. karakterden başlayıp 7 karakter al dedik
var_dump(substr($string, 4, 7));
// Sonuç C:\wamp64\www\PHP-Dersler\Ders4\functions.php:34:string 'mustafa' (length=7)




$string = "          " . $string . "      ";
// boşluk verilmiş halini ekranda göreceğiz
var_dump($string);
//Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:50:string '          www.mustafabukulmez.com      ' (length=39)

// ltrim string'in solundaki tüm boşlukları siler.
var_dump(ltrim($string));
// C:\wamp64\www\PHP-Dersler\Ders4\functions.php:54:string 'www.mustafabukulmez.com      ' (length=29)


// boşluk verilmiş halini ekranda göreceğiz
var_dump($string);
//Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:61:string '                    www.mustafabukulmez.com            ' (length=55)

// rtrim string'in sağındaki tüm boşlukları siler.
var_dump(rtrim($string));
// C:\wamp64\www\PHP-Dersler\Ders4\functions.php:65:string '                    www.mustafabukulmez.com' (length=43)


// boşluk verilmiş halini ekranda göreceğiz
var_dump($string);
//Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:70:string '          www.mustafabukulmez.com      ' (length=39)

// trim string'in sağındaki ve solundaki tüm boşlukları siler.
var_dump(trim($string));
// C:\wamp64\www\PHP-Dersler\Ders4\functions.php:75:string 'www.mustafabukulmez.com' (length=23)

$string = trim($string);


$number = "5698";
// 1. parametre başına, sonunda veya iki tarafına bir şeyler eklemek istediğiniz string
// 2. parametre, eklemeler yapıldıktan sonra yeni string'in kaç karakter olması gerektiği
//      Örneğin, 5698 sayısı var elinizde ve başına da 4 adet 0 eklemek istiyorsunuz diyelim.
//      5 karakter değişken ve 4 adet sıfır ile 9 karakter yapıyor. O halde 2. parametreye 9 yazmanız gerekir.
//      Yani toplam uzunluk vermeni gerek.
// 3. parametre ne eklemek istediğiniz. Parametre verilmezse ' ' boşluk eklenir
// 4. Neresine eklemek istediğiniz. Parametre verilmezse sağ tarafa ekler. STR_PAD_RIGHT, STR_PAD_LEFT veya STR_PAD_BOTH
var_dump(str_pad($number, 9, "0", STR_PAD_LEFT));
// C:\wamp64\www\PHP-Dersler\Ders4\functions.php:86:string '000005698' (length=9)
var_dump(str_pad($number, 9, "0", STR_PAD_RIGHT));
// C:\wamp64\www\PHP-Dersler\Ders4\functions.php:88:string '569800000' (length=9)
var_dump(str_pad($number, 9, "0", STR_PAD_BOTH));
// C:\wamp64\www\PHP-Dersler\Ders4\functions.php:90:string '005698000' (length=9)



// str_repeat 1. parametreyi, 2. parametre kadar tekrarlar
var_dump(str_repeat($string, 3));
// C:\wamp64\www\PHP-Dersler\Ders4\functions.php:93:string 'www.mustafabukulmez.comwww.mustafabukulmez.comwww.mustafabukulmez.com' (length=69)


// str_replace 3. parametre içinde geçen 1. parametreyi, 2. parametreye dönüştürür.
// Örnekte $string içindeki www ifadesini @@@ olarak değiştirdik
var_dump(str_replace("www", "@@@", $string));
// C:\wamp64\www\PHP-Dersler\Ders4\functions.php:100:string '@@@.mustafabukulmez.com' (length=23)



// str_shuffle verilen parametredeki string'i karmakarışık hale getirir. Çok işinize yarar mı bilmem ama sevdiğim bir fonksiyon.
var_dump(str_shuffle($string));
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:107:string 'w.oekbms.tuwufalcwzumma' (length=23)


// str_split verilen parametredeki string'in tamamını bir dizi haline getirir.
var_dump(str_split($string));
// Sonuç: 
// C:\wamp64\www\PHP-Dersler\Ders4\functions.php:111:
// array (size=23)
// 0 => string 'w' (length=1)
// 1 => string 'w' (length=1)
// 2 => string 'w' (length=1)
// 3 => string '.' (length=1)
// 4 => string 'm' (length=1)
// 5 => string 'u' (length=1)
// 6 => string 's' (length=1)
// 7 => string 't' (length=1)
// 8 => string 'a' (length=1)
// 9 => string 'f' (length=1)
// 10 => string 'a' (length=1)
// 11 => string 'b' (length=1)
// 12 => string 'u' (length=1)
// 13 => string 'k' (length=1)
// 14 => string 'u' (length=1)
// 15 => string 'l' (length=1)
// 16 => string 'm' (length=1)
// 17 => string 'e' (length=1)
// 18 => string 'z' (length=1)
// 19 => string '.' (length=1)
// 20 => string 'c' (length=1)
// 21 => string 'o' (length=1)
// 22 => string 'm' (length=1)


// str_word_count verilen parametrenin kaç kelime içeridğini bulur.
var_dump(str_word_count($string));
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:141:int 3



// strstr  1. parametrenin, 2. parametrede geçen ifadenin ilk bulunduğu yerden sonrasını verir.
// 3. parametre false ise sonrasını verir ve 2. parametredeki ifadeyi içerir.
// büyük küçük harf duyarlıdır
var_dump(strstr($string, "m",false)); 
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:148:string 'mustafabukulmez.com' (length=19)

// strstr  1. parametrenin, 2. parametrede geçen ifadenin ilk bulunduğu yerden sonrasını verir.
// 3. parametre true ise öncesini verir ve 2. parametredeki ifadeyi içermez.
// büyük küçük harf duyarlıdır
var_dump(strstr($string, "m",true)); 
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:154:string 'www.' (length=4)

// strstr  'in duyarsız hali
var_dump(stristr($string, "M")); 
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:160:string 'mustafabukulmez.com' (length=19)



// strlen verilan parametrenin kaç karakter olduğunu söyler
var_dump(strlen($string)); 
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:159:int 23


// strpos 2. parametrenin, 1. parametre için bulunduğu ilk konumu verir.
var_dump(strpos($string,"m")); 
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:164:int 4


// strpos'ın duyarsız hali
var_dump(stripos($string,"M")); 
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:164:int 4


// strrpos 2. parametrenin, 1. parametre için bulunduğu son konumu verir.
var_dump(strrpos($string,"m")); 
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:164:int 4


// strrpos'ın duyarsız hali'
var_dump(strripos($string,"M")); 
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:164:int 4




// strrev verilan parametreyi tersten yazar
var_dump(strrev($string)); 
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:177:string 'moc.zemlukubafatsum.www' (length=23)




// strtolower verilan parametreyi küçük harfli yapar
var_dump(strtolower($string)); 
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:199:string 'www.mustafabukulmez.com' (length=23)

// strtolower verilan parametreyi büyük harfli yapar
var_dump(strtoupper($string)); 
// Sonuç: C:\wamp64\www\PHP-Dersler\Ders4\functions.php:203:string 'WWW.MUSTAFABUKULMEZ.COM' (length=23)

