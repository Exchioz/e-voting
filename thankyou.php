<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Check Circle Fill</title>
    <style>
        body {
            height: 100vh;
        }

        /* Add custom styling for the navbar */
        .navbar {
            background-color: #0D6EFD;
        }
    </style>
</head>

<body class="d-flex flex-column">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Thank You Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <!-- Replace "Home" with a left arrow icon -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        &#8592; <!-- Unicode character for left arrow -->
                    </a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="card bg-light text-dark flex-grow-1">
        <div class="card-body text-center p-5">
            <h1 class="mt-4"> Terima Kasih anda telah memilih pasangan calon 1</h1>
            <svg xmlns="http://www.w3.org/2000/svg" class="text-success float-right mt-3" width="75" height="75" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
            <p class="mt-3">Voting anda telah tersubmit pada sistem kami</p>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/