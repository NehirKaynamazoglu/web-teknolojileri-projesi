<?php
// Kullanıcıdan POST yöntemiyle gönderilen 'email' ve 'sifre' verilerini alıyoruz.
// Eğer gönderilmezse varsayılan olarak boş string atanır.
$kullanici = $_POST["email"] ?? "";
$sifre = $_POST["sifre"] ?? "";

// Doğru kullanıcı adı ve şifre bilgileri (sabit olarak tanımlanmış)
$dogruKullanici = "b241210106@sakarya.edu.tr";
$dogruSifre = "b241210106";

// Girilen kullanıcı adı ve şifre, doğru kullanıcı bilgileriyle karşılaştırılır
if ($kullanici === $dogruKullanici && $sifre === $dogruSifre) {
    // Eğer giriş bilgileri doğruysa, kullanıcıya hoşgeldiniz mesajı gösteren HTML sayfası oluşturulur
    echo "
    <!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Giriş Başarılı</title>
        <!-- Stil dosyası ve Bootstrap CSS sayfaya ekleniyor -->
        <link rel='stylesheet' href='style.css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'>
    </head>
    <body>
        <div class='container mt-5 text-center'>
            <!-- Kullanıcının e-posta adresi ekranda gösteriliyor -->
            <h2 class='text-success'>Hoşgeldiniz, <strong>$kullanici</strong></h2>
            <p class='mt-3'>Başarıyla giriş yaptınız.</p>
            <!-- Kullanıcıyı ana sayfaya yönlendiren buton -->
            <button class='btn btn-primary mt-3' onclick=\"window.location.href='index.html'\">Siteye Git</button>
        </div>
    </body>
    </html>
    ";
} else {
    // Eğer kullanıcı adı veya şifre yanlışsa, login sayfasına hata parametresi ile yönlendirme yapılır
    header("Location: login.html?hata=1");
    exit(); // Yönlendirmeden sonra PHP kodunun devam etmemesi için çıkış yapılır
}
?>
