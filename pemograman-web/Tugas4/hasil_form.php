<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST["npm"];
    $nama = strtoupper($_POST["nama"]); 
    $alamat = strtoupper($_POST["alamat"]);
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $hobi = $_POST["hobi"];

    echo "<h2>Hasil Input:</h2>";
    echo "NPM: $npm<br>";
    echo "Nama: $nama<br>";
    echo "Alamat: $alamat<br>";
    echo "Tempat Lahir: $tempat_lahir<br>";
    echo "Tanggal Lahir: $tanggal_lahir<br>";
    echo "Jenis Kelamin: $jenis_kelamin<br>";
    echo "Hobi: $hobi<br>";
} else {
    echo "Data tidak dikirim.";
}
?>