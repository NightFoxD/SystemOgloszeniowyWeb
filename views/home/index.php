<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo ROOT_Style;?>style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo ROOT_IMG?>Swiftlly_transparent_FullName.png" class="d-block w-100" alt="banner">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo ROOT_IMG?>Swiftlly_transparent_FullName.png" class="d-block w-100" alt="banner">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo ROOT_IMG?>Swiftlly_transparent_FullName.png" class="d-block w-100" alt="banner">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden bg-dark">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden bg-dark">Next</span>
                </button>
            </div>
            <div class="container d-flex justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="input-group mt-3 mb-3 mr-2">
                                <input type="text" class="form-control bg-white border-dark-subtle" placeholder="Czego szukasz ?">
                                <div class="form-floating">
                                    <select class="form-select border-dark-subtle" id="floatingSelect" aria-label="Floating label select example">
                                        <option value="0" selected>Wszystko</option>
                                        <option value="1">AGD</option>
                                        <option value="2">Elektronika</option>
                                        <option value="3">Ogród</option>
                                    </select>
                                    <label for="floatingSelect">Kategorie</label>
                                </div>
                                <button class="btn btn-outline-light border-dark-subtle text-dark" type="button" id="button-addon2">Szukaj
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>