
       <?php
                if ($_POST['username'] == 'b201210391@sakarya.edu.tr' && $_POST['password'] == 'b201210391') {
                    echo "<p>Kullanıcı adınız ve şifreniz doğru.</p> <p>Hoşgeldiniz 'b201210391'</p><p>Anasayfaya yönlendiriliyorsunuz.</p>";
                    header("refresh:3;url= main.html");
                } else {
                    echo "<p>Giriş bilgileriniz yanlış.</p> <p>Giriş sayfasına yönlendiriliyorsunuz.</p>";
                    header("refresh:3;url=login.html");
                }
                ?>



