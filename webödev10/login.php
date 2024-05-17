
<?php
// Kullanıcı adı ve şifreyi kontrol etmek için bir dizi kullanıcı oluşturuyoruz
$users = array(
    array("username" => "kullanici1", "password" => "sifre1"),
    array("username" => "kullanici2", "password" => "sifre2"),
    // Buraya daha fazla kullanıcı ekleyebilirsiniz
);

// Form gönderildiğinde kullanıcı adı ve şifreyi alıyoruz
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kullanıcı adı ve şifreyi doğrulama
    $loggedIn = false;
    foreach ($users as $user) {
        if ($username == $user["username"] && $password == $user["password"]) {
            $loggedIn = true;
            break;
        }
    }

    // Kullanıcı girişi başarılıysa yönlendirme yapabiliriz
    if ($loggedIn) {
        // Örneğin, ana sayfaya yönlendirme
        header("Location: main.html");
        exit(); // header fonksiyonu çalıştıktan sonra scriptin devam etmemesi için exit() çağrılır
    } else {
        // Kullanıcı adı veya şifre yanlışsa hata mesajı gösterilebilir
        echo "Kullanıcı adı veya şifre yanlış!";
    }
}
?>
