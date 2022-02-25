<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "/Ders5/classes/ImportClasses.php"); 

$sonuclar = $DB->ShowTable("select * from table where column1 = ? and column2 = ?", array(1,2));

require_once($_SERVER['DOCUMENT_ROOT'] . "/Ders5/includes/HTMLHead.php");  
// includes klasöründe, sayfalarımızın HTML Head etiketleri arasında olması gereken kodları tuttuğumuz ayrı bir dosya varsayalım.
?>

<body>

<h1> index.php </h1>
<h5>Siz klasör yollarında yazan "/Ders5" kısmını siliniz.</h5>


</body>
</html>
