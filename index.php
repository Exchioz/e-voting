<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .voteBtn {
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hello,
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="action-logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="section1" class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container custom-container text-center text-lg-start">
            <div class="container">
                <div class="row gx-lg-5 align-items-center p-6">
                    <div class="col-lg-6">
                        <div class="card bg-light" style="height: 450px;">
                            <div class="card-body px-md-5 d-flex flex-column align-items-center justify-content-center">
                                <div class="big-bold-text fw-bold fs-1">
                                    <h1>Total Kandidat</h1>
                                </div>
                                <div class="my-2">
                                    <div class="mb-lg-0 text-center">
                                        <img src="asset/asset-people.png" alt="Your Image Alt Text" class="img-fluid rounded mx-auto d-block" style="width: 200px; height: auto;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 d-flex justify-content-end big-bold-text">
                                        <h1 class="counter big-bold-text fw-bold" data-target="3">0</h1>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-start mb-0">
                                        <p class="text-center my-auto">Orang</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bg-light" style="height: 450px;">
                            <div class="card-body px-md-5 d-flex flex-column align-items-center justify-content-center">
                                <div class="align-items-center big-bold-text">
                                    <h1 class="counterpersen fw-bold text-primary" data-target="100">0%</h1>
                                </div>
                                <div class="paragraph">
                                    <p>Orang Telah Melakukan Voting</p>
                                </div>
                                <div class="card-box row mt-5">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="paragraph">
                                                    <p style="text-align: center;">Total Memilih</p>
                                                </div>
                                                <div class="align-items-center big-bold-text">
                                                    <h1 style="text-align: center;" class="counter fw-bold text-primary" data-target="9999">0</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mw-100">
                                            <div class="card-body" style="height: 150px;">
                                                <div class="paragraph">
                                                    <p style="text-align: center;">Total <br> Suara</p>
                                                </div>
                                                <div class="align-items-center big-bold-text ">
                                                    <h1 style="text-align: center;" class="counter fw-bold text-primary" data-target="9999">0</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-grid gap-2 col-2 mx-auto mt-5">
                    <button type="button" class="btn btn-primary btn-lg" id="scrollButton">Vote <br> Sekarang!</button>
                </div>
            </div>
        </div>

    </section>
    <section id="section2" class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container custom-container text-center text-lg-start">
            <div class="container">
                <div>
                    <h1 class="mt-5 mb-4 text-center">MASA DEPAN ADA DI TANGAN ANDA</h1>
                    <h5 class="text-center">Gunakan hak pilih Anda secara bijak!</h5>
                </div>
                <div class="row gx-lg-5 align-items-center p-6">

                    <!-- Column 1 -->
                    <div class="col-lg-4">
                        <div class="card bg-light">
                            <div class="card-body px-md-5 d-flex flex-column align-items-center justify-content-center">
                                <div class="card-title text-center fw-bold">1</div>
                                <div>
                                    <img src="asset/calon.jpg" class="card-img-top" alt="...">
                                </div>
                                <div>
                                    <h5 class="card-title text-center">Osas</h5>
                                </div>
                                <div class="d-grid gap-2 col-8 mx-auto">
                                    <button class="btn btn-primary" type="button">Detail</button>
                                    <button class="btn btn-primary" type="button">Pilih</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-lg-4">
                        <div class="card bg-light">
                            <div class="card-body px-md-5 d-flex flex-column align-items-center justify-content-center">
                                <div class="card-title text-center fw-bold">2</div>
                                <div>
                                    <img src="asset/calon.jpg" class="card-img-top" alt="...">
                                </div>
                                <div>
                                    <h5 class="card-title text-center">Osas 2</h5>
                                </div>
                                <div class="d-grid gap-2 col-8 mx-auto">
                                    <button class="btn btn-primary" type="button">Detail</button>
                                    <button class="btn btn-primary" type="button">Pilih</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="col-lg-4">
                        <div class="card bg-light">
                            <div class="card-body px-md-5 d-flex flex-column align-items-center justify-content-center">
                                <div class="card-title text-center fw-bold">3</div>
                                <div>
                                    <img src="asset/calon.jpg" class="card-img-top" alt="...">
                                </div>
                                <div>
                                    <h5 class="card-title text-center">Osas 3</h5>
                                </div>
                                <div class="d-grid gap-2 col-8 mx-auto">
                                    <button class="btn btn-primary" type="button">Detail</button>
                                    <button class="btn btn-primary" type="button">Pilih</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Additional content or buttons can be added here if needed -->

            </div>
        </div>
    </section>


    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofGJhYJRbM6Lc6U5BdQl5qN7U6P5tr5Y" crossorigin="anonymous"></script>
</body>

</html>

</html>