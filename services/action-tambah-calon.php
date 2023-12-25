<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $calo_id = $_POST['addNoUrut'];
    $calo_nama = $_POST['addNama'];
    $calo_visi = $_POST['addVisi'];
    $calo_misi = $_POST['addMisi'];

    // Direktori tempat file akan disimpan
    $uploadDir = "../assets/img/";

    // Mendapatkan ekstensi file
    $fileExtension = pathinfo($_FILES["addImage"]["name"], PATHINFO_EXTENSION);

    // Membuat nama file unik
    $fileName = $calo_id . "_" . time() . "." . $fileExtension;
    $uploadPath = $uploadDir . $fileName;

    // Memindahkan file yang di-upload ke folder tujuan
    if(move_uploaded_file($_FILES["addImage"]["tmp_name"], $uploadPath)) {
        // Menyusun query untuk memasukkan data ke dalam database
        $query = "INSERT INTO calon (calo_id, calo_nama, calo_visi, calo_misi, calo_gambar) VALUES ('$calo_id', '$calo_nama', '$calo_visi', '$calo_misi', '$fileName')";
        
        $result = $conn->query($query);

        if ($result) {
            header("Location: ../admin/index.php?page=calon&status=success");
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "File upload error.";
    }
}
$conn->close();
?>
