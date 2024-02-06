<div class="container mt-5 mb-5">
    <div class=" border p-1 rounded-1 m-1 shadow-sm">
        <div class="row">
            <div class="col-6">
                <h1 class="d-flex p-2 fs-5">Dane użytkownika </h1>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <button type="button" class="btn btn-outline-primary m-1 justify-content-end MyUncollapse" onclick="Btn_Edit('UserData_Edit','UserDataInformations','UserDataForm')" id="UserData_Edit" >Edytuj</button>
            </div>
        </div>
        <div class="row m-1">
            <div class="col-lg-2 col-md-3">
                <img src="<?php echo ROOT_IMG ?>Swiftlly_transparent_Logo.png" class="d-block">
                <div>
                    <p class="fs-5"><input type="file" class="text-decoration-none color-gray"> </a></p>
                </div>
            </div>
            <div class="col-lg-10 col-md-9">
                <div class="MyUncollapse" id="UserDataInformations">
                <?php echo ROOT_URL"/users/getUserData";?>
                </div>
                <form method="post" action="<?php echo ROOT_URL ?>users/saveUserData" class="MyCollapse" id="UserDataForm">
                    
                    <div class="row m-1">
                        <div class="col">
                            <label class="form-label">Imię</label>
                            <input type="text" name="user_name" class="form-control">
                        </div>
                        <div class="col">
                            <label class="form-label">Nazwisko</label>
                            <input type="text" name="user_surname" class="form-control">
                        </div>
                    </div>
                    <div class="row m-1">
                        <div class="col">
                            <label class="form-label">Aktualne stanowisko</label>
                            <input type="text" name="user_currnent_occupation"  class="form-control">
                        </div>
                    </div>
                    <div class="row m-1">
                        <div class="col">
                            <label for="validationCustom04" class="form-label">Państwo</label>
                            <select class="form-select" id="validationCustom04" name="user_nationality" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label">Miasto</label>
                            <input type="text" name="user_city" class="form-control">
                        </div>
                    </div>
                    <div class="row m-1">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_CancelSave('UserData_Edit','UserDataInformations','UserDataForm')">Annuluj</button>
                            <button type="submit" name="submit" class="btn btn-outline-primary m-1">Zapisz</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <div class=" border p-1 rounded-1 m-1 mt-5 shadow-sm">
        <div class="row">
            <div class="col-6">
                <h1 class="d-flex p-2 fs-5">Dane kontaktowe </h1>
            </div>
            <div class="col-6 d-flex justify-content-end">
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
                                <label class=" col-2 form-label m-1">Email:</label>
                                <input type="text" class="form-control m-1">
                            </div>
                            <div class="col d-flex align-items-center">
                                <label class="col-2 form-label m-1">Telefon:</label>
                                <input type="text" class="form-control m-1">
                            </div>
                        </div>
                        <div class="col d-flex align-items-center">
                            <label class="col-2 form-label m-1">Data urodzenia:</label>
                            <div class=" m-1 d-flex">
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Dzień</option>
                                    <option>...</option>
                                </select>
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Miesiąc</option>
                                    <option>...</option>
                                </select>
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Rok</option>
                                    <option>...</option>
                                </select>
                            </div>
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
    <div class=" border p-1 rounded-1 m-1 mt-5 shadow-sm">
        <div class="row">
            <div class="col-6">
                <h1 class="d-flex p-2 fs-5">Doświadczenie zawodowe </h1>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <button type="button" class="btn btn-outline-primary m-1 justify-content-end MyUncollapse" onclick="Btn_Add('ExperienceWork_Add','ExperienceWork_AddForm')" id="ExperienceWork_Add">Dodaj nowy</button>
            </div>
        </div>
        <div class="row m-1">
            <div class="col">
                <div class="col-10">
                    <form method="post" class="MyCollapse container" id="ExperienceWork_AddForm">
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Stanowisko:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control m-1" placeholder="Stanowisko">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Lokalizacja:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control m-1" placeholder="Lokalizacja">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Nazwa firmy:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control m-1" placeholder="Nazwa firmy">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Okres:</label>
                            </div>
                            <div class="col-9 d-flex justify-content-center">
                                <label class=" col align-items-center justify-content-center d-flex">Od</label>
                                <div class=" col m-1 justify-content-center d-flex">
                                    <select class="form-select" required>
                                        <option selected disabled value="">Miesiąc</option>
                                        <option>...</option>
                                    </select>
                                    <select class="form-select" required>
                                        <option selected disabled value="">Rok</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <label class="col align-items-center justify-content-center d-flex">do</label>
                                <div class="col m-1 d-flex justify-content-center">
                                    <select class="form-select" required>
                                        <option selected disabled value="">Miesiąc</option>
                                        <option>...</option>
                                    </select>
                                    <select class="form-select" required>
                                        <option selected disabled value="">Rok</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Stanowisko:</label>
                            </div>
                            <div class="col-9">
                                <textarea class="form-control bg-transparent TextareaEdit" placeholder="Napisz twoje obowiazki"></textarea>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_Cancel('ExperienceWork_Add','ExperienceWork_AddForm')">Annuluj</button>
                                <button type="submit" class="btn btn-outline-primary m-1">Zapisz</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <div class="container">
                        <p>Historia zatrudnienia to podstawowa informacja, na bazie której pracodawca oceni Twoje kompetencje. Koniecznie uzupełnij informacje o stanowiskach na których pracowałeś i opisz dokładnie wykonywane obowiązki.</p>
                        <div class="row MyUncollapse" id="ExperienceWork_Iformation_1">
                            <div class="row d-flex">
                                <div class="col-5">
                                    <nav aria-label="breadcrumb d-flex">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">stanowisko</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">data</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="col-7 d-flex justify-content-end">
                                    <button class="btn btn-outline-danger m-1">usuń</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="Btn_Add('ExperienceWork_Iformation_1','ExperienceWork_UpdateForm_1')">Edytuj</button>
                                </div>
                            </div>
                            <div class="col-5">
                                <p>Lokalizacja <span class="text-success">miasto</span> </p>
                                <textarea class="form-control bg-transparent border-0" placeholder="Leave a comment here" disabled>obawiozki</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col-10">
                        <form method="post" class="MyCollapse container" id="ExperienceWork_UpdateForm_1">
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class="form-label m-1">Stanowisko:</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control m-1" placeholder="Stanowisko">
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class="form-label m-1">Lokalizacja:</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control m-1" placeholder="Lokalizacja">
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class="form-label m-1">Nazwa firmy:</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control m-1" placeholder="Nazwa firmy">
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class=" col-2 form-label m-1">Okres:</label>
                                </div>
                                <div class="col-9 d-flex justify-content-center">
                                    <label class=" col align-items-center justify-content-center d-flex">Od</label>
                                    <div class=" col m-1 justify-content-center d-flex">
                                        <select class="form-select" required>
                                            <option selected disabled value="">Miesiąc</option>
                                            <option>...</option>
                                        </select>
                                        <select class="form-select" required>
                                            <option selected disabled value="">Rok</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <label class="col align-items-center justify-content-center d-flex">do</label>
                                    <div class="col m-1 d-flex justify-content-center">
                                        <select class="form-select" required>
                                            <option selected disabled value="">Miesiąc</option>
                                            <option>...</option>
                                        </select>
                                        <select class="form-select" required>
                                            <option selected disabled value="">Rok</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class=" col-2 form-label m-1">Stanowisko:</label>
                                </div>
                                <div class="col-9">
                                    <textarea class="form-control bg-transparent TextareaEdit" placeholder="Napisz twoje obowiazki"></textarea>
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_Cancel('ExperienceWork_Iformation_1','ExperienceWork_UpdateForm_1')">Annuluj</button>
                                    <button type="submit" class="btn btn-outline-primary m-1">Zapisz</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <div class=" border p-1 rounded-1 m-1 mt-5 shadow-sm">
        <div class="row">
            <div class="col-6">
                <h1 class="d-flex p-2 fs-5">Podsumowanie zawodowe</h1>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <button type="button" class="btn btn-outline-primary m-1 justify-content-end MyUncollapse" onclick="Btn_Edit('JobSummary_Edit','JobSummary_UserInfo','JobSummary_Form')" id="JobSummary_Edit">Edytuj</button>
            </div>
        </div>
        <div class="row m-1">
            <div class="col">
                <div class="col">
                    <div class="MyUncollapse" id="JobSummary_UserInfo">
                        <p>Pierwsze co zobaczą rekrutujący na Twoim profilu to podsumowanie zawodowe. Postaraj się w paru zdaniach, podsumować Twoje doświadczenie zawodowe.</p>
                        <textarea class="form-control bg-transparent border-0" disabled>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eum ad consectetur, recusandae fugiat voluptatibus cupiditate temporibus in numquam exercitationem labore doloribus et voluptatum quidem ducimus, dolorem illum sequi provident?</textarea>
                        <label>Aktualna pozycja zawodowa:</label>
                    </div>
                    <form method="post" action="" class="MyCollapse" id="JobSummary_Form">
                        <div class="row m-1">
                            <div class="col d-flex align-items-center">
                                <label class=" col-2 form-label m-1">Opis</label>
                                <textarea class="form-control bg-transparent TextareaEdit"></textarea>
                            </div>
                        </div>
                        <div class="col d-flex align-items-center">
                            <label class="col-2 form-label m-1">Aktualna pozycja zawodowa</label>
                            <div class=" m-1 d-flex">
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Wybierz z listy</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_CancelSave('JobSummary_Edit','JobSummary_UserInfo','JobSummary_Form')">Annuluj</button>
                                <button type="submit" class="btn btn-outline-primary m-1">Zapisz</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <div class=" border p-1 rounded-1 m-1 mt-5 shadow-sm">
        <div class="row">
            <div class="col-6">
                <h1 class="d-flex p-2 fs-5">Wykrztałcenie</h1>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <button type="button" class="btn btn-outline-primary m-1 justify-content-end MyUncollapse" onclick="Btn_Add('Education_Add','Education_AddForm')" id="Education_Add">Dodaj nowy</button>
            </div>
        </div>
        <div class="row m-1">
            <div class="col">
                <div class="col-10">
                    <form method="post" class="MyCollapse container" id="Education_AddForm">
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Nazwa szkoły:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control m-1" placeholder="Nazwa szkoły:">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Poziom wykształcenia:</label>
                            </div>
                            <div class="col-9">
                                <select class="form-select" required>
                                    <option selected disabled value="">Wykrztałcenie</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Specjalizacja</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control m-1" placeholder="Specjalizacja">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Okres:</label>
                            </div>
                            <div class="col-9 d-flex justify-content-center">
                                <label class=" col align-items-center justify-content-center d-flex">Od</label>
                                <div class=" col m-1 justify-content-center d-flex">
                                    <select class="form-select" required>
                                        <option selected disabled value="">Miesiąc</option>
                                        <option>...</option>
                                    </select>
                                    <select class="form-select" required>
                                        <option selected disabled value="">Rok</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <label class="col align-items-center justify-content-center d-flex">do</label>
                                <div class="col m-1 d-flex justify-content-center">
                                    <select class="form-select" required>
                                        <option selected disabled value="">Miesiąc</option>
                                        <option>...</option>
                                    </select>
                                    <select class="form-select" required>
                                        <option selected disabled value="">Rok</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_Cancel('Education_Add','Education_AddForm')">Annuluj</button>
                                <button type="submit" class="btn btn-outline-primary m-1">Zapisz</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <div class="container">
                        <p>Historia zatrudnienia to podstawowa informacja, na bazie której pracodawca oceni Twoje kompetencje. Koniecznie uzupełnij informacje o stanowiskach na których pracowałeś i opisz dokładnie wykonywane obowiązki.</p>
                        <div class="row MyUncollapse" id="Experience_Iformation_1">
                            <div class="row d-flex">
                                <div class="col-5">
                                    <nav aria-label="breadcrumb d-flex">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">stanowisko</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">data</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="col-7 d-flex justify-content-end">
                                    <button class="btn btn-outline-danger m-1">usuń</button>
                                    <button type="button" class="btn btn-outline-primary m-1" onclick="Btn_Add('Experience_Iformation_1','Experience_UpdateForm_1')">Edytuj</button>
                                </div>
                            </div>
                            <div class="col-5">
                                <p>Lokalizacja <span class="text-success">miasto</span> </p>
                                <textarea class="form-control bg-transparent border-0" placeholder="Leave a comment here" disabled>obawiozki</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col-10">
                        <form method="post" class="MyCollapse container" id="Experience_UpdateForm_1">
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class="form-label m-1">Nazwa szkoły:</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control m-1" placeholder="Nazwa szkoły:">
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class="form-label m-1">Poziom wykształcenia:</label>
                                </div>
                                <div class="col-9">
                                    <select class="form-select" required>
                                        <option selected disabled value="">Wykrztałcenie</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class="form-label m-1">Specjalizacja</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control m-1" placeholder="Specjalizacja">
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class=" col-2 form-label m-1">Okres:</label>
                                </div>
                                <div class="col-9 d-flex justify-content-center">
                                    <label class=" col align-items-center justify-content-center d-flex">Od</label>
                                    <div class=" col m-1 justify-content-center d-flex">
                                        <select class="form-select" required>
                                            <option selected disabled value="">Miesiąc</option>
                                            <option>...</option>
                                        </select>
                                        <select class="form-select" required>
                                            <option selected disabled value="">Rok</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <label class="col align-items-center justify-content-center d-flex">do</label>
                                    <div class="col m-1 d-flex justify-content-center">
                                        <select class="form-select" required>
                                            <option selected disabled value="">Miesiąc</option>
                                            <option>...</option>
                                        </select>
                                        <select class="form-select" required>
                                            <option selected disabled value="">Rok</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_Cancel('Experience_Iformation_1','Experience_UpdateForm_1')">Annuluj</button>
                                    <button type="submit" class="btn btn-outline-primary m-1">Zapisz</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <div class=" border p-1 rounded-1 m-1 mt-5 shadow-sm">
        <div class="row">
            <div class="col-6">
                <h1 class="d-flex p-2 fs-5">Jezyki</h1>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <button type="button" class="btn btn-outline-primary m-1 justify-content-end MyUncollapse" onclick="Btn_LanguageEdit('Language_Edit','Language_Add','Language_Form')" id="Language_Edit">Edytuj</button>
                <button class="btn btn-outline-primary m-1 justify-content-end m-1 MyCollapse" id="Language_Add">Dodaj</button>
            </div>
        </div>
        <div class="row m-1">
            <div class="col">
                <div class="col">
                    <div class="MyUncollapse" id="LanguageInfo">
                        <p>Określ jakie języki znasz najlepiej i wskaż poziom ich znajomości. Pamiętaj, że możesz zostać poproszony o zaprezentowanie znajomości języka na rozmowie kwalifikacyjnej. </p>
                    </div>
                    <form method="post" action="" class="MyCollapse" id="Language_Form">
                        <div class="container">
                            <div class="row">
                                <div class="col-5">
                                    <div class=" m-1 d-flex">
                                        <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="">Wybierz z listy</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class=" m-1 d-flex">
                                        <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="">Wybierz z listy</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-outline-danger m-1">usuń</button>
                                </div>
                            </div>
                        </div>

                        <div class="row m-1">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_LanguageCancel('Language_Edit','Language_Add','Language_Form')">Annuluj</button>
                                <button type="submit" class="btn btn-outline-primary m-1">Zapisz</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -------------------------------------------------------------- -->
<!-- <div class=" border p-1 rounded-1 m-1 mt-5 shadow-sm">
            <div class="row">
                <div class="col-2">
                    <h1 class="d-flex p-2 fs-5">Podsumowanie zawodowe</h1>
                </div>
                <div class="col-10 d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-primary m-1 justify-content-end MyUncollapse" onclick="Btn_Edit('JobSummary_Edit','JobSummary_UserInfo','JobSummary_Form')" id="JobSummary_Edit">Edytuj</button>
                </div>
            </div>
            <div class="row m-1">
                <div class="col">
                    <div class="col">
                        <div class="MyUncollapse" id="JobSummary_UserInfo">
                           <p>Pierwsze co zobaczą rekrutujący na Twoim profilu to podsumowanie zawodowe. Postaraj się w paru zdaniach, podsumować Twoje doświadczenie zawodowe.</p>
                           <textarea class="form-control bg-transparent border-0" disabled>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eum ad consectetur, recusandae fugiat voluptatibus cupiditate temporibus in numquam exercitationem labore doloribus et voluptatum quidem ducimus, dolorem illum sequi provident?</textarea>
                            <label >Aktualna pozycja zawodowa:</label>
                        </div>
                        <form method="post" action="" class="MyCollapse" id="JobSummary_Form">
                            <div class="row m-1">
                                <div class="col d-flex align-items-center">
                                    <label class=" col-2 form-label m-1">Opis</label>
                                    <textarea class="form-control bg-transparent TextareaEdit"></textarea>
                                </div>
                            </div>
                            <div class="col d-flex align-items-center">
                                <label class="col-2 form-label m-1">Aktualna pozycja zawodowa</label>
                                <div class=" m-1 d-flex">
                                    <select class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">Wybierz z listy</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_CancelSave('JobSummary_Edit','JobSummary_UserInfo','JobSummary_Form')">Annuluj</button>
                                    <button type="submit" class="btn btn-outline-primary m-1">Zapisz</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
<!-- -------------------------------------------------------------- -->