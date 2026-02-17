<?php
$host = 'db';
$user = 'user123';
$pass = 'pass123';
$db   = 'test_db';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
} 

echo "<h1>M169 Eigenes Projekt Luca Siegenthaler</h1>";
echo "<p style='color:green;'>Success: Verbindung zur MariaDB-Datenbank steht</p>";
echo "<p>Dieses Setup nutzt zwei Container (App + DB).</p>";
?>