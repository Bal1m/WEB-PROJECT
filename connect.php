
<?php
// Veritabanı yapılandırma dosyasını dahil et
require 'config.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    // Hata mesajını log dosyasına yaz
    error_log("Veritabanı bağlantı hatası: " . $conn->connect_error);
}
?>
