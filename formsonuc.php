<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form Sonucu</title>
  <!-- style.css dosyasını sayfaya bağlıyoruz -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Form Bilgileriniz</h2>

  <!-- Kullanıcının formda girdiği "Ad Soyad" bilgisini güvenli şekilde ekrana yazdırıyoruz -->
  <p><strong>Ad Soyad:</strong> <?php echo htmlspecialchars($_POST['adsoyad']); ?></p>

  <!-- Kullanıcının formda girdiği "E-Posta" bilgisini güvenli şekilde ekrana yazdırıyoruz -->
  <p><strong>E-Posta:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>

  <!-- Kullanıcının formda girdiği "Telefon" bilgisini güvenli şekilde ekrana yazdırıyoruz -->
  <p><strong>Telefon:</strong> <?php echo htmlspecialchars($_POST['telefon']); ?></p>

  <!-- Kullanıcının formda seçtiği "Cinsiyet" bilgisini güvenli şekilde ekrana yazdırıyoruz -->
  <p><strong>Cinsiyet:</strong> <?php echo htmlspecialchars($_POST['cinsiyet']); ?></p>

  <!-- Kullanıcının formda seçtiği "Şehir" bilgisini güvenli şekilde ekrana yazdırıyoruz -->
  <p><strong>Şehir:</strong> <?php echo htmlspecialchars($_POST['sehir']); ?></p>

  <!-- Kullanıcının isteğe bağlı yazdığı mesajı ekrana yazdırıyoruz. 
       Eğer mesaj boş ise "(Mesaj yazılmamış)" yazıyoruz. -->
  <p><strong>Mesaj:</strong><br>
    <?php
      if (!empty($_POST['mesaj'])) {
        // Satır sonlarını <br> etiketi, güvenlik için htmlspecialchars kullanıyoruz
        echo str_replace("\n", "<br>", htmlspecialchars($_POST['mesaj']));
      } else {
        echo "(Mesaj yazılmamış)";
      }
    ?>
  </p>
</body>
</html>
