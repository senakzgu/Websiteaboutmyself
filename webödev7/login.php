<?php
// Login formundan gönderilen kullanıcı adı ve şifre kontrol ediliyor
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen veriler alınıyor
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kullanıcı adı ve şifre boş olmamalı
    if (empty($username) || empty($password)) {
        header("Location: login.php"); // Boş alanlar varsa login sayfasına geri yönlendir
        exit();
    }

    // Kullanıcı adı mail formatında olmalı
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        header("Location: login.php"); // Mail formatında değilse login sayfasına geri yönlendir
        exit();
    }

    // Kullanıcı adından sadece numarayı alıyoruz
    $username = explode('@', $username)[0];

    // Şifre, kullanıcı adına eşit olmalı
    if ($password === $username) {
        // Başarılı giriş durumunda hoş geldiniz mesajı göster
        echo "Hoş geldiniz: " . $username;
    } else {
        header("Location: login.php"); // Başarısız giriş durumunda login sayfasına geri yönlendir
        exit();
    }
}
?>
