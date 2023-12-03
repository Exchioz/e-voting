<?php

include "../koneksi.php";

$pese_id = $_POST['pese_id'];
$pese_nim = $_POST['editNIM'];
$pese_nama = $_POST['editNama'];
$pese_nomor = $_POST['editNomor'];
$pese_email = $_POST['editEmail'];

$sql = "UPDATE peserta SET pese_nim='$pese_nim', pese_nama='$pese_nama', pese_nomor='$pese_nomor', pese_email='$pese_email' WHERE pese_id=$pese_id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../../admin/peserta.php");
    echo "Data updated successfully";
} else {
    echo "Error updating data: " . $conn->error;
}

$conn->close();
