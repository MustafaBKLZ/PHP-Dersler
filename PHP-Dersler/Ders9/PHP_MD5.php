<?php
define("SODIUM_SECRED_KEY", "oooooooooooooooooooooooooooooooo");

function safeEncrypt(string $message, string $key): string
{
    if (mb_strlen($key, '8bit') !== SODIUM_CRYPTO_SECRETBOX_KEYBYTES) {
        throw new RangeException('Key is not the correct size (must be 32 bytes).');
    }
    $nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

    $cipher = base64_encode(
        $nonce .
            sodium_crypto_secretbox(
                $message,
                $nonce,
                $key
            )
    );
    sodium_memzero($message);
    sodium_memzero($key);
    return $cipher;
}

function safeDecrypt(string $encrypted, string $key): string
{
    $decoded = base64_decode($encrypted);
    $nonce = mb_substr($decoded, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, '8bit');
    $ciphertext = mb_substr($decoded, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, null, '8bit');

    $plain = sodium_crypto_secretbox_open(
        $ciphertext,
        $nonce,
        $key
    );
    if (!is_string($plain)) {
        throw new Exception('Invalid MAC');
    }
    sodium_memzero($ciphertext);
    sodium_memzero($key);
    return $plain;
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mustafa BÜKÜLMEZ">
    <title>PHP MD5 Şifreleme Öğretici</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

</head>

<body>


    <?php
    $sifrelenmis_veri  = "";
    if ($_POST) {
        $sifrelenecek_veri = $_POST["sifrelenecek_veri"];
        $sifrelenmis_veri =  safeEncrypt($sifrelenecek_veri, SODIUM_SECRED_KEY);
        $cozulmus_sifre = safeDecrypt($sifrelenmis_veri, SODIUM_SECRED_KEY);
    }

    ?>
    
    <div class="row" style="margin:100px;">
        <div class="container">
            <form action="#" method="POST">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Şifrelenecek Veri</label>
                    <input type="text" class="form-control" name="sifrelenecek_veri">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Şifrelenmiş Veri</label>
                    <input class="form-control" name="sifrelenmis_veri" value="<?= $sifrelenmis_veri ?>" />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Çözülmüş Veri</label>
                    <input class="form-control" name="cozulmus_sifre" value="<?= $cozulmus_sifre ?>" />
                </div>


                <button type="submit" class="btn btn-success">Kullan</button>
            </form>
        </div>
    </div>

</body>

</html>
