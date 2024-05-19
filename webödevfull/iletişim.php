<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.sena.com</title>
   
    
</head>
<body>

    <h2>Gönderilen Form Bilgileri</h2>
    <?php
    // Form verilerini al
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Form verilerini görüntüle
    echo "<p><strong>Ad Soyad:</strong> $name</p>";
    echo "<p><strong>E-posta:</strong> $email</p>";
    echo "<p><strong>Mesaj:</strong> $message</p>";
    ?>
</body>
</html>

