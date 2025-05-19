<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form Sonucu</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Form Bilgileriniz</h2>
  <p><strong>Ad Soyad:</strong> <?php echo htmlspecialchars($_POST['adsoyad']); ?></p>
  <p><strong>E-Posta:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
  <p><strong>Telefon:</strong> <?php echo htmlspecialchars($_POST['telefon']); ?></p>
  <p><strong>Cinsiyet:</strong> <?php echo htmlspecialchars($_POST['cinsiyet']); ?></p>
  <p><strong>Şehir:</strong> <?php echo htmlspecialchars($_POST['sehir']); ?></p>

  <p><strong>Mesaj:</strong>
    <?php
      if (!empty($_POST['mesaj'])) {
        echo nl2br(htmlspecialchars($_POST['mesaj']));
      } else {
        echo "(Mesaj yazılmamış)";
      }
    ?>
  </p>
</body>
</html>
