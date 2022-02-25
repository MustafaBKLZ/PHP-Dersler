<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "/classes/ImportClasses.php"); 

$sonuclar = $DB->ShowTable("select * from table where column1 = ? and column2 = ?", array(1,2));

require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/HTMLHead.php");  
// includes klasöründe, sayfalarımızın HTML Head etiketleri arasında olması gereken kodları tuttuğumuz ayrı bir dosya varsayalım.
?>

<body>

<h1> index.php </h1>


</body>
</html>
