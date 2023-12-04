<?php

include "koneksi.php";

if (isset($_GET['pese_id'])) {
    $pese_id = $_GET['pese_id'];
    $pese_nim = $_POST['editNIM'];
    $pese_nama = $_POST['editNama'];
    $pese_nomor = $_POST['editNomor'];
    $pese_email = $_POST['editEmail'];
    $sql = "UPDATE peserta SET pese_nim='$pese_nim', pese_nama='$pese_nama', pese_nomor='$pese_nomor', pese_email='$pese_email' WHERE pese_id=$pese_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../admin/peserta.php");
        echo "Data updated successfully";
    } else {
        echo "Error updating data: " . $conn->error;
    }
} else if (isset($_GET['calo_id'])) {
    $calo_id = $_GET['calo_id'];
    $calo_nama = $_POST['editNama'];
    $calo_visi = $_POST['editVisi'];
    $calo_misi = $_POST['editMisi'];

    $sql = "UPDATE calon SET calo_id='$calo_id', calo_nama='$calo_nama', calo_visi='$calo_visi', calo_misi='$calo_misi' WHERE calo_id=$calo_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../admin/calon.php");
        echo "Data updated successfully";
    } else {
        echo "Error updating data: " . $conn->error;
    }
}
$conn->close();
