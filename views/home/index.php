<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo ROOT_Style; ?>style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container justify-content-center mt-5">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control bg-white border-dark-subtle" placeholder="Stanowisko, firma, słowo klucz ?">
                                    <div class="form-floating">
                                        <select class="form-select border-dark-subtle" id="floatingSelect" aria-label="Floating label select example">
                                            <option value="0" selected>Wszystko</option>
                                            <option value="1">AGD</option>
                                            <option value="2">Elektronika</option>
                                            <option value="3">Ogród</option>
                                        </select>
                                        <label for="floatingSelect">Kategorie</label>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select border-dark-subtle" id="floatingSelect" aria-label="Floating label select example">
                                            <option value="0" selected>Wszystko</option>
                                            <option value="1">AGD</option>
                                            <option value="2">Elektronika</option>
                                            <option value="3">Ogród</option>
                                        </select>
                                        <label for="floatingSelect">Lokalizacja</label>
                                    </div>
                                </div>
                                <div class="container mt-3">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="container form-check text-white bg-primary rounded-4 p-2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="float-start">
                                                            <input class="form-check-input" type="checkbox" id="showOptions1">
                                                            <label class="form-check-label" for="showOptions1">Rodzaj umowy</label>
                                                        </div>
                                                        <div class="float-end">
                                                            <span id="selectedOptionsCountBadge1" class=" badge rounded-pill text-bg-light">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapse border rounded p-2 bg-white" id="optionsList1">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" id="option1_1">
                                                    <label class="form-check-label" for="option1_1">Opcja 1</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="option1_2">
                                                    <label class="form-check-label" for="option1_2">Opcja 2</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="option1_3">
                                                    <label class="form-check-label" for="option1_3">Opcja 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="container form-check text-white bg-primary rounded-4 p-2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="float-start">
                                                            <input class="form-check-input" type="checkbox" id="showOptions2">
                                                            <label class="form-check-label" for="showOptions2">Rodzaj umowy</label>
                                                        </div>
                                                        <div class="float-end">
                                                            <span id="selectedOptionsCountBadge2" class=" badge rounded-pill text-bg-light">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="collapse border rounded p-2 bg-white" id="optionsList2">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" id="option2_1">
                                                    <label class="form-check-label" for="option2_1">Opcja 1</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="option2_2">
                                                    <label class="form-check-label" for="option2_2">Opcja 2</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="option2_3">
                                                    <label class="form-check-label" for="option2_3">Opcja 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="container form-check text-white bg-primary rounded-4 p-2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="float-start">
                                                            <input class="form-check-input" type="checkbox" id="showOptions3">
                                                            <label class="form-check-label" for="showOptions3">Rodzaj umowy</label>
                                                        </div>
                                                        <div class="float-end">
                                                            <span id="selectedOptionsCountBadge3" class=" badge rounded-pill text-bg-light">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="collapse border rounded p-2 bg-white" id="optionsList3">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" id="option3_1">
                                                    <label class="form-check-label" for="option3_1">Opcja 1</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="option3_2">
                                                    <label class="form-check-label" for="option3_2">Opcja 2</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="option3_3">
                                                    <label class="form-check-label" for="option3_3">Opcja 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="container form-check text-white bg-primary rounded-4 p-2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="float-start">
                                                            <input class="form-check-input" type="checkbox" id="showOptions4">
                                                            <label class="form-check-label" for="showOptions4">Rodzaj umowy</label>
                                                        </div>
                                                        <div class="float-end">
                                                            <span id="selectedOptionsCountBadge4" class=" badge rounded-pill text-bg-light">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="collapse border rounded p-2 bg-white" id="optionsList4">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" id="option4_1">
                                                    <label class="form-check-label" for="option4_1">Opcja 1</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="option4_2">
                                                    <label class="form-check-label" for="option4_2">Opcja 2</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="option4_3">
                                                    <label class="form-check-label" for="option4_3">Opcja 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 d-flex  justify-content-center">
                                            <button class="btn btn-outline-light border-dark-subtle text-dark" type="button" id="button-addon2">Szukaj
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="m" class="carousel mt-5">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <button type="button" class="col-3 active button text-primary bg-transparent border-0 m-1 p-1 border-bottom border-primary" data-bs-target="#m" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">Ostatio oglądane</button>
                            <button type="button" class="col-3 button text-primary bg-transparent border-0 m-1 p-1 border-bottom border-primary" data-bs-target="#m" data-bs-slide-to="1" aria-label="Slide 2">Najnowsze oferty</button>
                            <button type="button" class="col-3 button text-primary bg-transparent border-0 m-1 p-1 border-bottom border-primary" data-bs-target="#m" data-bs-slide-to="2" aria-label="Slide 3">Super oferty</button>
                        </div>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-content">
                                <div class="container">
                                    <div class="row d-flex justify-content-start">
                                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                                            <div class="card">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item container">
                                                        <div class="row">
                                                            <div class="col align-items-center">
                                                                <div class="float-start">
                                                                    <p class="h4"><a href="" class="text-decoration-none text-black"> tytul</a></p>
                                                                    <p>mies</p>
                                                                </div>
                                                                <div class="float-end">
                                                                    <a class=" text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                                        </svg>
                                                                    </a>
                                                                    <!--
                                                                    <a class="float-end text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                        </svg> 
                                                                    </a>    
                                                                -->
                                                                    <a class=" text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <img src="<?php echo ROOT_IMG ?>Swiftlly_transparent_FullName.png" class="col img-fluid" alt="image">
                                                                    <div class="col">
                                                                        <p class="h4">h6Bootstrap heading</p>
                                                                        <p>Kraków</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                                            <div class="card">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item container">
                                                        <div class="row">
                                                            <div class="col align-items-center">
                                                                <div class="float-start">
                                                                    <p class="h4"><a href="" class="text-decoration-none text-black"> tytul</a></p>
                                                                    <p>mies</p>
                                                                </div>
                                                                <div class="float-end">
                                                                    <a class=" text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                                        </svg>
                                                                    </a>
                                                                    <!--
                                                                    <a class="float-end text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                        </svg> 
                                                                    </a>    
                                                                -->
                                                                    <a class=" text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <img src="<?php echo ROOT_IMG ?>Swiftlly_transparent_FullName.png" class="col img-fluid" alt="image">
                                                                    <div class="col">
                                                                        <p class="h4">h6Bootstrap heading</p>
                                                                        <p>Kraków</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                                            <div class="card">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item container">
                                                        <div class="row">
                                                            <div class="col align-items-center">
                                                                <div class="float-start">
                                                                    <p class="h4"><a href="" class="text-decoration-none text-black"> tytul</a></p>
                                                                    <p>mies</p>
                                                                </div>
                                                                <div class="float-end">
                                                                    <a class=" text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                                        </svg>
                                                                    </a>
                                                                    <!--
                                                                    <a class="float-end text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                        </svg> 
                                                                    </a>    
                                                                -->
                                                                    <a class=" text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <img src="<?php echo ROOT_IMG ?>Swiftlly_transparent_FullName.png" class="col img-fluid" alt="image">
                                                                    <div class="col">
                                                                        <p class="h4">h6Bootstrap heading</p>
                                                                        <p>Kraków</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                                            <div class="card">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item container">
                                                        <div class="row">
                                                            <div class="col align-items-center">
                                                                <div class="float-start">
                                                                    <p class="h4"><a href="" class="text-decoration-none text-black"> tytul</a></p>
                                                                    <p>mies</p>
                                                                </div>
                                                                <div class="float-end">
                                                                    <a class=" text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                                        </svg>
                                                                    </a>
                                                                    <!--
                                                                    <a class="float-end text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                        </svg> 
                                                                    </a>    
                                                                -->
                                                                    <a class=" text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <img src="<?php echo ROOT_IMG ?>Swiftlly_transparent_FullName.png" class="col img-fluid" alt="image">
                                                                    <div class="col">
                                                                        <p class="h4">h6Bootstrap heading</p>
                                                                        <p>Kraków</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-content">
                                <div class="carousel-content">
                                    <div class="container">
                                        <div class="row d-flex justify-content-start">
                                            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                                                <div class="card">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item container">
                                                            <div class="row">
                                                                <div class="col align-items-center">
                                                                    <div class="float-start">
                                                                        <p class="h4"><a href="" class="text-decoration-none text-black"> tytul</a></p>
                                                                        <p>mies</p>
                                                                    </div>
                                                                    <div class="float-end">
                                                                        <a class=" text-decoration-none text-black" href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                                            </svg>
                                                                        </a>
                                                                        <!--
                                                                    <a class="float-end text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                        </svg> 
                                                                    </a>    
                                                                -->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <img src="<?php echo ROOT_IMG ?>Swiftlly_transparent_FullName.png" class="col img-fluid" alt="image">
                                                                        <div class="col">
                                                                            <p class="h4">h6Bootstrap heading</p>
                                                                            <p>Kraków</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-content">
                                <div class="carousel-content">
                                    <div class="container">
                                        <div class="row d-flex justify-content-start">
                                            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                                                <div class="card">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item container">
                                                            <div class="row">
                                                                <div class="col align-items-center">
                                                                    <div class="float-start">
                                                                        <p class="h4"><a href="" class="text-decoration-none text-black"> tytul</a></p>
                                                                        <p>mies</p>
                                                                    </div>
                                                                    <div class="float-end">
                                                                        <a class=" text-decoration-none text-black" href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                                            </svg>
                                                                        </a>
                                                                        <!--
                                                                    <a class="float-end text-decoration-none text-black" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                        </svg> 
                                                                    </a>    
                                                                -->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <img src="<?php echo ROOT_IMG ?>Swiftlly_transparent_FullName.png" class="col img-fluid" alt="image">
                                                                        <div class="col">
                                                                            <p class="h4">h6Bootstrap heading</p>
                                                                            <p>Kraków</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>