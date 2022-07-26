<?php
error_reporting(0); // hatalari gosterme 
function encrypt_decrypt($action, $string) {
	if($action == 'encrypt') {
		return urlencode(base64_encode($string));
	}
	else if($action == 'decrypt'){
		return base64_decode(urldecode($string));
	}
}
function cookie($par){
	$par = encrypt_decrypt('encrypt',$par);
	if ($_COOKIE[$par]){	
		return encrypt_decrypt('decrypt',$_COOKIE[$par]);				
	}else {						
		return false;			
	}		
}
function set_cookie($name,$value,$time){
	$name = encrypt_decrypt('encrypt',$name);
	$value = encrypt_decrypt('encrypt',$value);
	return setcookie($name, $value, $time);
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
<?php
/*
	'UserName' değerinin şifrelenmiş hali = VXNlck5hbWU%3D
	'Mustafa BÜKÜLMEZ' değerinin şifrelenmiş hali = TXVzdGFmYSBCw5xLw5xMTUVa
*/
if (!cookie('UserName')){ //cookie yoksa cookie olustur
	set_cookie('UserName', 'Mustafa BÜKÜLMEZ', time() + 60*5);
	
}else{ //cookie varsa
	echo cookie('UserName'); //oku
} 
 ?>
</body>
</html>
