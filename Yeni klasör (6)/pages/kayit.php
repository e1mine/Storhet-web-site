<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Veritabanı bağlantısı
$servername = "localhost";
$username = "root"; // veya senin kullanıcı adın
$password = "";     // varsa şifreni gir
$dbname = "storhet"; // kendi veritabanı adını gir

$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Formdan gelen verileri al
$isim = $_POST['isim'];
$soyad = $_POST['Soyad'];
$sifre = $_POST['Sifre'];
$eposta = $_POST['eposta'];
$tarih = $_POST['tarih'];
$cinsiyet = $_POST['cinsiyet'];

// SQL sorgusu
$sql = "INSERT INTO uyeler (isim, soyad, sifre, eposta, tarih, cinsiyet)
        VALUES ('$isim', '$soyad', '$sifre', '$eposta', '$tarih', '$cinsiyet')";

if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarılı!";
} else {
    echo "Hata: " . $conn->error;
}

$conn->close();
?>
