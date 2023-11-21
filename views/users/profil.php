<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo ROOT_Style; ?>style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class=" border p-1 rounded-1 m-1 shadow-sm">
            <div class="row">
                <div class="col-2">
                    <h1 class="d-flex p-2 fs-5">Dane użytkownika </h1>
                </div>
                <div class="col-10 d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-primary m-1 justify-content-end MyUncollapse" onclick="Btn_Edit('UserData_Edit','UserDataInformations','UserDataForm')" id="UserData_Edit">Edytuj</button>
                </div>
            </div>
            <div class="row m-1">
                <div class="col-lg-2 col-md-3">
                    <img src="<?php echo ROOT_IMG ?>Swiftlly_transparent_Logo.png" class="d-block">
                    <div>
                        <label class="form-label">Zmień swoje zdjęcie profilowe</label>
                        <p class="fs-5"><a class="text-decoration-none color-gray" href="#">Zmień swoje zdjęcie</a></p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9">
                    <div class="MyUncollapse" id="UserDataInformations">
                        <div class="row m-1">
                            <div class="col">
                                <label class="form-label">Imię Nazwisko</label>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class=col">
                                <label class="form-label">Aktualne stanowisko</label>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col">
                                <label class="form-label">Państwo Miasto</label>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="" class="MyCollapse" id="UserDataForm">
                        <div class="row m-1">
                            <div class="col">
                                <label class="form-label">Imię</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label class="form-label">Nazwisko</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col">
                                <label class="form-label">Aktualne stanowisko</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col">
                                <label for="validationCustom04" class="form-label">Państwo</label>
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col">
                                <label class="form-label">Miasto</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_CancelSave('UserData_Edit','UserDataInformations','UserDataForm')">Annuluj</button>
                                <button type="submit" class="btn btn-outline-primary m-1">Zapisz</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        <div class=" border p-1 rounded-1 m-1 mt-5 shadow-sm">
            <div class="row">
                <div class="col-2">
                    <h1 class="d-flex p-2 fs-5">Dane kontaktowe </h1>
                </div>
                <div class="col-10 d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-primary m-1 justify-content-end MyUncollapse" onclick="Btn_Edit('UserContact_Edit','UserContact_Informations','UserContact_Form')" id="UserContact_Edit">Edytuj</button>
                </div>
            </div>
            <div class="row m-1">
                <div class="col">
                    <div class="col">
                        <div class="MyUncollapse" id="UserContact_Informations">
                            <div class="row m-1">
                                <div class="col-lg-6 col-md-12">
                                    <label class="form-label">Email: </label>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label class="form-label">Telefon:</label>
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col">
                                    <label class="form-label">Data urodzenia:</label>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="" class="MyCollapse" id="UserContact_Form">
                            <div class="row m-1">
                                <div class="col d-flex align-items-center">
                                    <label class="form-label m-1">Email:</label>
                                    <input type="text" class="form-control m-1">
                                </div>
                                <div class="col d-flex align-items-center">
                                    <label class="form-label m-1">Telefon:</label>
                                    <input type="text" class="form-control m-1">
                                </div>
                            </div>
                            <div class="col d-flex align-items-center">
                                <label class="col-2 form-label m-1">Data urodzenia:</label>
                                <input type="text" class="m-1 form-control">
                            </div>
                            <div class="row m-1">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_CancelSave('UserContact_Edit','UserContact_Informations','UserContact_Form')">Annuluj</button>
                                    <button type="submit" class="btn btn-outline-primary m-1">Zapisz</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------------------------------------------------------------- -->
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col">
                <div class="card border border-none">
                    <div class="card-body" style="height: 22em;">
                        <div class="card-title container">
                            <div class="row">
                                <div class="col-2">
                                    <h5 class=" d-flex">Dane urzytkownika </h5>
                                </div>
                                <div class="col-10 d-flex justify-content-end">
                                    <button type="button" class="btn btn-outline-primary m-1 justify-content-end MyUncollapse" onclick="Btn_Edit('UserData_Edit','UserDataInformations','collapseExample')" id="UserData_Edit">Edytuj</button>
                                </div>
                            </div>
                        </div>
                        <h6 class="card-subtitle text-body-secondary">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-end flex-wrap">
                                        <img src="<?php //echo ROOT_IMG 
                                                    ?>Swiftlly_transparent_Logo.png" class="d-block">
                                        <div>
                                            <label for="formFile" class="form-label">Zmień swoje zdjęcie profilowe</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="MyUncollapse" id="UserDataInformations">
                                            <label>Kamil Kowalski</label>
                                            <label>Aktualne stanowisko</label>
                                            <label>Panstwo Miasto</label>
                                        </div>
                                        <form method="post" action="" class="MyCollapse" id="collapseExample">
                                            <div class="row m-1">
                                                <div class="col">
                                                    <label class="form-label">Imię</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Nazwisko</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row m-1">
                                                <div class="col">
                                                    <label class="form-label">Aktualne stanowisko</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row m-1">
                                                <div class="col">
                                                    <label for="validationCustom04" class="form-label">Państwo</label>
                                                    <select class="form-select" id="validationCustom04" required>
                                                        <option selected disabled value="">Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a valid state.
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Miasto</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row m-1">
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_CancelSave('UserData_Edit','UserDataInformations','collapseExample')">Annuluj</button>
                                                    <button type="button" class="btn btn-outline-primary m-1" onclick="Btn_CancelSave('UserData_Edit','UserDataInformations','collapseExample')">Zapisz</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?php echo ROOT_Script ?>profil.js"></script>

</html>