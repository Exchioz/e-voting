<?php
include("../koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pese_nim = $_POST['addNIM'];
    $pese_nama = $_POST['addNama'];
    $pese_nomor = $_POST['addNomor'];
    $pese_email = $_POST['addEmail'];


    $query = "INSERT INTO peserta (pese_nim, pese_nama, pese_nomor, pese_email) VALUES ('$pese_nim', '$pese_nama', '$pese_nomor', '$pese_email')";
    $result = $conn->query($query);

    if ($result) {
        header("Location: ../../admin/peserta.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
