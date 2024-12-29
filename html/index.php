<?php
$servername = "mysql";
$username = "user";
$password = "password";
$dbname = "mydb";

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
} else {
    echo "Bağlantı başarılı!<br>";
}

// Verileri çek
$sql = "SELECT * FROM Kisiler";
$result = $conn->query($sql);

if (!$result) {
    die("Sorgu hatası: " . $conn->error);
}

// Verileri ekrana yazdır
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Ad: " . $row["ad"] . " - Soyad: " . $row["soyad"] . " - Yaş: " . $row["yas"] . "<br>";
    }
} else {
    echo "0 sonuç";
}

$conn->close();
?>
