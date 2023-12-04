<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $calo_id = $_POST['addNoUrut'];
    $calo_nama = $_POST['addNama'];
    $calo_visi = $_POST['addVisi'];
    $calo_misi = $_POST['addMisi'];


    $query = "INSERT INTO calon (calo_id, calo_nama, calo_visi, calo_misi) VALUES ('$calo_id', '$calo_nama', '$calo_visi', '$calo_misi')";
    $result = $conn->query($query);

    if ($result) {
        header("Location: ../../admin/calon.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
