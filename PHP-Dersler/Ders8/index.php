
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
  $dir = 'img';
  // Görüntü adını içerecek diziyi başlat
  $imgs_arr = array();
  // Görüntü dizininin var olup olmadığını kontrol et
  if (file_exists($dir) && is_dir($dir) ) {
    
      // Dosyaları dizinden al
      $dir_arr = scandir($dir);
      $arr_files = array_diff($dir_arr, array('.','..') );
      foreach ($arr_files as $file) {
        // Dosya yolunu al
        $file_path = $dir."/".$file;
        // Uzantıyı al
        $ext = pathinfo($file_path, PATHINFO_EXTENSION);
        if ($ext=="jpg" || $ext=="png" || $ext=="JPG" || $ext=="PNG") {
          array_push($imgs_arr, $file);
        }        
      }
      $count_img_index = count($imgs_arr) - 1;
      $random_img = $imgs_arr[rand( 0, $count_img_index )];
  }
?>
<img src="<?php echo $dir."/".$random_img ?>">


</body>
</html>
