<?php
// Veritabanı bağlantı ayarları
define('DB_SERVER', 'sql110.infinityfree.com');
define('DB_USERNAME', 'if0_36578078');
define('DB_PASSWORD', 'MZqScN4Q7nRAb ');
define('DB_NAME', 'if0_36578078_XXX ');

// Veritabanına bağlantı
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Bağlantı kontrolü
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Site URL'si
define('SITE_URL', 'senahakkinda.great-site.net ');


?>
