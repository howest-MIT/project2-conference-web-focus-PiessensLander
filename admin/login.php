<?php
session_start();
//toon een overzicht van alle bestelde tickets
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Multi-Mania 2022</title>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/screen.css" />

</head>

<body style="background-color: #c54893">
    <div class="container">
        <div class="row row-login align-items-center justify-content-center" style="height: 100vh">
            <div class="col-12 col-md-8 col-lg-6 col-xl-3">
                <div class="c-login p-4">
                    <div class="c-login__header mb-4">
                        <h1 class="mb-2">Log in</h1>
                        <p>Don't have an account yet? Please contact the administrator.</p>
                    </div>
                    <div>
                        <form action="index.php" method="POST" class="d-flex flex-column c-login__form">
                            <input type="text" name="username" id="username" class="c-form__input c-form__input--text mb-3" placeholder="Username" required>
                            <input type="password" name="password" id="password" class="c-form__input c-form__input--text mb-3" placeholder="Password" required>
                            <input type="submit" name="submit" id="submit" value="Log in" class="c-btn c-btn--pink py-2 px-5 text-center">
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>