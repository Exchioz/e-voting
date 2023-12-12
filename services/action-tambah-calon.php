<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $calo_id = $_POST['addNoUrut'];
    $calo_nama = $_POST['addNama'];
    $calo_visi = $_POST['addVisi'];
    $calo_misi = $_POST['addMisi'];
    $calo_gambar = $_POST['addImage'];

    $query = "INSERT INTO calon (calo_id, calo_nama, calo_visi, calo_misi, calo_gambar) VALUES ('$calo_id', '$calo_nama', '$calo_visi', '$calo_misi', '$calo_gambar')";
    $result = $conn->query($query);

    $uploadDir = "../assets/img/";

    $uploadedFile = $_FILES["addImage"]["tmp_name"];
    $fileName = basename($_FILES["addImage"]["name"]);
    $uploadPath = $uploadDir . $fileName;
    move_uploaded_file($uploadedFile, $uploadPath);

    if ($result) {
        header("Location: ../../admin/index.php?page=calon&status=success");
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
