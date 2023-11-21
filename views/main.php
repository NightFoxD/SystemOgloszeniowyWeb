<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogłoszenia</title>
    <link rel="stylesheet" href="<?php echo ROOT_Style;?>style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
            <div class="container-fluid d-flex justify-content-center">
                <a class="navbar-brand" href="<?php echo ROOT_URL;?>">
                    <img src="<?php echo ROOT_URL;?>images/Swiftlly_transparent_FullName.png" alt="Logo" width="300" class="d-inline-block align-text-top">
                </a>
                <ul class="navbar-nav me-auto d-lg-flex d-none">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo ROOT_URL;?>">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                </ul>
                <div class="justify-end d-lg-flex d-none me-5">
                    <ul class="navbar-nav me-auto d-lg-flex d-none">
                        <?php 
                            if (!isset($_SESSION['is_logged_in'])):
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL;?>users/login">Zaloguj sie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL;?>users/register">Zarejestruj sie</a>
                        </li>
                        <?php else:?>
                        <li class="nav-item">
                            <a class="nav-link d-flex" aria-current="page" href="<?php echo ROOT_URL;?>users/profil">
                            <img src="<?php echo ROOT_IMG;?>Swiftlly_transparent_Logo.png" class="rounded d-block" width="50" alt="...">
                            User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL;?>users/logout">Wyloguj sie</a>
                        </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php Messages::display(); ?>
    <?php require($view); ?>
    <footer class="container-fluid">
        <div class="container">
            <div class="row d-lg-flex d-none d-md-none d-sm-none ">
                <div class = "col-3 col-md-6 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="text-info-emphasis"><strong>Dla kandydatów</strong></span></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Pomoc</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Pracuj w Grupie Pracuj</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Kalkulator godzinowy</a></li>
                    </ul>
                </div>
                <div class = "col-3 col-md-6 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="text-info-emphasis"><strong>Dla firm</strong></span></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Dodaj ogłoszenie</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Konto pracodawcy</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Pomoc dla firm</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Porady dla firm</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Porady rekrutacyjne</a></li>
                    </ul>
                </div>
                <div class = "col-3 col-md-6 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="text-info-emphasis"><strong>Narzędzia</strong></span></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Kreator CV</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Porady zawodowe</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Kalkulator zarobków</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Zarobki</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Blog</a></li>
                    </ul>
                </div>
                <div class = "col-3 col-md-6 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="text-info-emphasis"><strong>Pobierz aplikację</strong></span></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Pomoc</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Pracuj w Grupie Pracuj</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Kalkulator godzinowy</a></li>
                    </ul>
                </div>
            </div>
            <div class="row d-lg-none d-md-flex">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <span class="text-info-emphasis"><strong>Dla kandydatów</strong></span>
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Pomoc</a></li>
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Pracuj w Grupie Pracuj</a></li>
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Kalkulator godzinowy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <span class="text-info-emphasis"><strong>Dla firm</strong></span>
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Dodaj ogłoszenie</a></li>
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Konto pracodawcy</a></li>
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Pomoc dla firm</a></li>
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Porady dla firm</a></li>
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Porady rekrutacyjne</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <span class="text-info-emphasis"><strong>Narzędzia</strong></span>
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Kreator CV</a></li>
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Porady zawodowe</a></li>
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Kalkulator zarobków</a></li>
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Zarobki</a></li>
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                            <span class="text-info-emphasis"><strong>Pobierz aplikację</strong></span>
                        </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Kreator CV</a></li>
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Porady zawodowe</a></li>
                                    <li class="list-group-item"><a href="" class="text-decoration-none text-secondary text">Kalkulator zarobków</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </footer>
    <header class="container-fluid sticky-bottom d-lg-none bg-light">
        <div class="row">
            <div class="col-4">
                <a class="d-block w-100 h-100 text-decoration-none text-dark text-center MenuLink" href="#">
                    Szuka
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                </a>
            </div>
            <div class="col-4">
                <a class="d-block w-100 h-100 text-decoration-none text-dark text-center MenuLink" href="index.php">Strona główna</a>
            </div>
            <div class="col-4">
                <a class="d-block w-100 h-100 text-decoration-none text-dark text-center MenuLink" href="profil.php">
                    <div class="d-flex justify-content-center">
                        <img src="img/Swiftlly_transparent_Logo.png" class="rounded d-block" width="35" alt="...">
                        <h1 class="fs-5 align-self-center me-2">User</h1>
                    </span>

                    </div>
                </a>
            </div>
        </div>
    </header>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?php echo ROOT_Script?>profil.js"></script>
</html>