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
    <section id="pemilihan" class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            <div class="justify-content-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-success float-right mt-3" width="75" height="75" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
                <h1 class=""> Terima Kasih anda telah memilih pasangan calon <?php ?></h1>
                <p class="">Voting anda telah tersubmit pada sistem kami</p>
            </div>
        </div>
    </section>

    <script>
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 3000);
    </script>
    <script src="assets/script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>