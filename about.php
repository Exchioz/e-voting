<?php
session_start();

include 'services/koneksi.php';
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>E-voting</title>
</head>

<body>
    <?php
    require_once "navbar.php";
    ?>
    <section class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container custom-container text-center text-lg-start">
            <div class="container mt-5 pt-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-5">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/assets/calon.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Azka Rizki Sabilus Sulaeman</h5>
                                        <p class="card-text">email@upi.edu</p>
                                        <p class="card-text">Role: Project Manager
                                            <br> Phone: +62 123-456-789
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-5">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/assets/calon.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Haryanto Hidayat</h5>
                                        <p class="card-text">email@upi.edu</p>
                                        <p class="card-text">Role: Project Manager
                                            <br> Phone: +62 123-456-789
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-6 col-sm-5">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/assets/calon.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Ivan Rajwa Naufal</h5>
                                        <p class="card-text">email@upi.edu</p>
                                        <p class="card-text">Role: Project Manager
                                            <br> Phone: +62 123-456-789
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-5">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/assets/calon.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Muhammad Aksyal Bambang S</h5>
                                        <p class="card-text">email@upi.edu</p>
                                        <p class="card-text">Role: Project Manager
                                            <br> Phone: +62 123-456-789
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-6 col-sm-5">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/assets/calon.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Muhammad Radya Wiguna</h5>
                                        <p class="card-text">email@upi.edu</p>
                                        <p class="card-text">Role: Project Manager
                                            <br> Phone: +62 123-456-789
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-5">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>