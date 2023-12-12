<?php
include("koneksi.php");

if (isset($_GET['pese_id'])) {
    $id = $_GET['pese_id'];
    $sql = "DELETE FROM peserta WHERE pese_id = '$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../admin/index.php?page=peserta");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else if (isset($_GET['calo_id'])) {
    $id = $_GET['calo_id'];
    $sql = "DELETE FROM calon WHERE calo_id = '$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../admin/index.php?page=calon");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
