<?php
// Kullanıcıdan gelen verileri al
$kullanici = $_POST["email"] ?? "";
$sifre = $_POST["sifre"] ?? "";

// Doğru kullanıcı bilgileri
$dogruKullanici = "b241210106@sakarya.edu.tr";
$dogruSifre = "b241210106";

// Giriş kontrolü
if ($kullanici === $dogruKullanici && $sifre === $dogruSifre) {
    // Giriş başarılıysa HTML çıktısı ver
    echo "
    <!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Giriş Başarılı</title>
        <link rel='stylesheet' href='style.css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'>
    </head>
    <body>
        <div class='container mt-5 text-center'>
            <h2 class='text-success'>Hoşgeldiniz, <strong>$kullanici</strong></h2>
            <p class='mt-3'>Başarıyla giriş yaptınız.</p>
            <button class='btn btn-primary mt-3' onclick=\"window.location.href='index.html'\">Siteye Git</button>
        </div>
    </body>
    </html>
    ";
} else {
    // Giriş başarısızsa login sayfasına hata mesajıyla geri yönlendir
    header("Location: login.html?hata=1");
    exit();
}
?>
