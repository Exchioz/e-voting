<?php

include "../koneksi.php";

$calo_id = $_POST['editNoUrut'];
$calo_nama = $_POST['editNama'];
$calo_visi = $_POST['editVisi'];
$calo_misi = $_POST['editMisi'];

$sql = "UPDATE calon SET calo_id='$calo_id', calo_nama='$calo_nama', calo_visi='$calo_visi', calo_misi='$calo_misi' WHERE calo_id=$calo_id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../../admin/calon.php");
    echo "Data updated successfully";
} else {
    echo "Error updating data: " . $conn->error;
}

$conn->close();
