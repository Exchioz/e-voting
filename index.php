<?php
session_start();

include 'services/koneksi.php';
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse position-absolute top-50 start-50 translate-middle" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <?php
            $nim = $_SESSION['nim'];
            $sql = "SELECT pese_nama FROM peserta WHERE pese_nim = '$nim'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $nama = $row['pese_nama'];
            }
            ?>
            <a class="navbar-brand font" href="#">
                Halo, <?php echo $nama; ?>
            </a>
            <a class="btn btn-danger text-white" href="services/action-logout.php" role="button">Logout</a>
        </div>
    </nav>

    <section id="landing-page" class="min-vh-100">
        <div class="main-hero">
            <div class="intro-text">
                <div class="container">
                    <div class="heading text-white" data-aos="fade-up">
                        <h1>Another cool free template by the fine folks at colorlib</h1>
                    </div>
                    <div class="excerpt text-center text-white" data-aos="fade-up" data-aos-delay="100">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live.</p>
                    </div>
                    <div class="align-items-center justify-content-center d-flex">
                        <button class="btn btn-light btn-lg fw-bold mt-4" onclick="scrollToSection('pemilihan')" type="button">Vote Sekarang!</button>
                    </div>
                </div>
            </div>
            <div class="intro-image" data-aos="fade-up" data-aos-delay="50">
                <div class="section-counter count-numbers">
                    <div class="container">
                        <div class="py-5 mb-2 bg-light text-dark rounded-5">
                            <h2 class="text-center">Data Sementara</h2>
                            <div class="row">
                                <?php
                                //Hitung total suara
                                $sqlTotalSuara = "SELECT COUNT(*) as total_suara FROM peserta";
                                $resultTotalSuara = $conn->query($sqlTotalSuara);
                                $totalSuara = 0;
                                if ($resultTotalSuara) {
                                    $rowTotalSuara = $resultTotalSuara->fetch_assoc();
                                    $totalSuara = $rowTotalSuara['total_suara'];
                                }

                                //Hitung total pemilih
                                $sqlTotalPemilih = "SELECT COUNT(*) as total_pemilih FROM peserta_pilih";
                                $resultTotalPemilih = $conn->query($sqlTotalPemilih);
                                $totalPemilih = 0;
                                if ($resultTotalPemilih) {
                                    $rowTotalPemilih = $resultTotalPemilih->fetch_assoc();
                                    $totalPemilih = $rowTotalPemilih['total_pemilih'];
                                }

                                //Hitung persentase pemilih
                                $persentasePemilih = intval(($totalPemilih / $totalSuara) * 100);
                                ?>
                                <div class="col-lg-4 text-center">
                                    <span class="counter">
                                        <span class="counterpersen" data-target="<?php echo $persentasePemilih; ?>"><?php echo $persentasePemilih; ?></span>
                                    </span>
                                    <span class="d-block">Orang</span>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <span class="counter">
                                        <span class="counternormal" data-target="<?php echo $totalSuara; ?>"><?php echo $totalSuara; ?></span>
                                    </span>
                                    <span class="d-block">Total Pemilih</span>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <span class="counter">
                                        <span class="counternormal" data-target="<?php echo $totalPemilih; ?>"><?php echo $totalPemilih; ?></span>
                                    </span>
                                    <span class="d-block">Total Suara</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pemilihan" class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            <div class="justify-content-center text-center">
                <h2 class="mb-5">Pilih Calonmu!</h2>
            </div>
            <div class="row gutter-v1">
                <?php
                $sql = "SELECT * FROM calon;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <div class="card h-100 d-flex flex-column justify-content-between">
                                <div class="image-container text-center">
                                    <img src="./assets/img/<?php echo $row['calo_gambar'] ?>" alt="Image" class="rounded-top img-fluid">
                                </div>
                                <div class="content text-container text-center mx-2">
                                    <h3><?php echo $row['calo_nama'] ?></h3>
                                    <p>Nomor Urut <?php echo $row['calo_id'] ?></p>
                                    <div class="more d-flex justify-content-center align-items-center">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $row['calo_id'] ?>">Visi & Misi</a>
                                        <a href="">|</a>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#modalpilih<?php echo $row['calo_id'] ?>">Pilih Calon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Visi Misi -->
                        <div class="modal fade" id="staticBackdrop<?php echo $row['calo_id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nomor Urut <?php echo $row['calo_id'] ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-4">
                                            <div class="text-start">
                                                <strong>Visi</strong>
                                            </div>
                                            <p class="text-justify">
                                                <?php echo $row['calo_visi'] ?>
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <div class="text-start">
                                                <strong>Misi</strong>
                                            </div>
                                            <p class="text-justify">
                                                <?php echo $row['calo_misi'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalpilih<?php echo $row['calo_id'] ?>">Pilih</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Pilih -->
                        <div class="modal fade" id="modalpilih<?php echo $row['calo_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nomor Urut <?php echo $row['calo_id'] ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="./assets/img/<?php echo $row['calo_gambar'] ?>" class="img-fluid rounded-start" alt="...">
                                                </div>

                                                <div class="col-md-8 text-center d-flex justify-content-center align-items-center">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Apakah anda yakin dengan pilihan anda?</h5>
                                                        <form action="services/config.php" id="myForm" method="POST">
                                                            <input type="hidden" name="calon" value="<?php echo $row['calo_id'] ?>">
                                                            <div class="mt-3">
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BATAL</button>
                                                                <button type="submit" class="btn btn-success" onclick="location.href='thankyou.php'">PILIH</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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

    <script src="assets/script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

</html>