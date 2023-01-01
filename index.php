<?php require('sorgu.php');
require('connection.php');?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8"/>
        <title>Stok Yönetim Sistemi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    </head>
    <body>
        <div class="login-page">
            <div class="left-side">
                <img class="login-form-photo" src="icons/form_photo.jpg"/>
            </div>
            <div class="right-side">
                <form method="post" action="giris.php">
                    <div class="login-form-container">
                        <div class="form-title">
                            <h1>SoftwareKDS</h1>
                            <h2>Stok Yönetim Sistemi</h3>
                        </div>
                        <input type="text" name="username" placeholder="Kullanıcı Adı" value="">
                        <input type="password" name="password" placeholder="Şifre"><br>
                        <button type="submit" class="girisbuton" name="register_btn">Giriş Yap</button>
                    </div>
                </form>
            </div>
        </div>
</html>