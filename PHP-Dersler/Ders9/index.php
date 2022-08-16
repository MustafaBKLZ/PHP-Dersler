<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST["button_pressed"])) {
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host       = 'mail.mustafabukulmez.com';
        $mail->Port       = 465;
        $mail->Username   = 'info@mustafabukulmez.com';
        $mail->Password   = 'şifreniz';
        $mail->From  = "info@mustafabukulmez.com";
        $mail->FromName  = "Mustafa BÜKÜLMEZ";

        $mail->addAddress('mustafabukulmez3446@gmail.com');
        $mail->CharSet = "utf-8";


        $mail->isHTML(true);
        $mail->Subject = 'Konu';
        $mail->Body    = 'HTML Mesajı. <b>Kalın ifade ve <i>italik</i> ifade </b> ';
        $mail->AltBody = 'HTML olmayan posta istemcileri için düz metin gövdesi';
        // $mail->Send();

        echo "Posta başarıyla gönderildi!";
    } catch (Exception $e) {
        echo "Mesaj gönderilemedi. Posta Hatası: {$mail->ErrorInfo}";
    }
}
?>
<html>

<body>
    <h1>Selam</h1>
    <h2>Bu sayfadan artık mail gönderilemez. Yazının içeriği için lütfen yazı sayfasına gidiniz.</h2>
    <p> <a href=""> PHP PHPMailer Kullanarak Mail Gönderme</a> </p>
    <br>

    <form method="post" action="">
        <input type="submit" value="Send" />
        <input type="hidden" name="button_pressed" value="1" />
    </form>
</body>

</html>
