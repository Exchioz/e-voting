<?php
include("../koneksi.php");
$id = $_GET['id'];
$sql = "DELETE FROM calon WHERE calo_id = '$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: ../../admin/calon.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
