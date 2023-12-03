<?php
include("../koneksi.php");
$id = $_GET['id'];
$sql = "DELETE FROM peserta WHERE pese_id = '$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: ../../admin/peserta.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
