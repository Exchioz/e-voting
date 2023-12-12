<?php
include("../services/koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/style.css">
</head>

<body>
    <section id="pemilihan" class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            <div class="justify-content-center text-center">
                <h2 class="mb-5">Hasil Suara</h2>
            </div>
            <div class="row gutter-v1">
                <?php
                $sql = "SELECT * FROM calon;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $caloId = $row['calo_id'];
                        $countSql = "SELECT COUNT(*) AS jumlah_suara FROM peserta_pilih WHERE pepi_calo_id = $caloId";
                        $countResult = $conn->query($countSql);
                        $countRow = $countResult->fetch_assoc();
                        $jumlahSuara = $countRow['jumlah_suara'];
                ?>
                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <div class="cardview h-100 d-flex flex-column justify-content-between">
                                <div class="image-container text-center">
                                    <img src="../assets/img/<?php echo $row['calo_gambar'] ?>" alt="Image" class="rounded-top img-fluid">
                                </div>
                                <div class="content text-container text-center mx-2">
                                    <h1 class="mb-0 fw-bold"><?php echo $jumlahSuara; ?></h1>
                                    <p class="mb-0">Suara</p>
                                    <h4 class="my-4"><?php echo $row['calo_nama'] ?></h4>
                                </div>
                            </div>
                        </div>
                <?php }
                } else {
                    echo "tidak ada calon!";
                } ?>
            </div>
        </div>
    </section>
    <script src="../assets/script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>