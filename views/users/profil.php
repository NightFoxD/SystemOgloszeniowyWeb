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
            </div>
            <div class="col-lg-10 col-md-9">
                <div class="MyUncollapse" id="UserDataInformations">
                    <?php echo $model['userData'];  ?>
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
                        <?php echo $model['userContract']; ?>
                    </div>
                    <form method="post" action="<?php echo ROOT_URL ?>users/saveUserContact" class="MyCollapse" id="UserContact_Form">
                        <div class="row m-1">
                            <div class="col d-flex align-items-center">
                                <label class=" col-2 form-label m-1">Email:</label>
                                <input type="text" name="user_email" class="form-control m-1">
                            </div>
                            <div class="col d-flex align-items-center">
                                <label class="col-2 form-label m-1">Telefon:</label>
                                <input type="text" name="user_phoneNumber" class="form-control m-1">
                            </div>
                        </div>
                        <div class="col d-flex align-items-center">
                            <label class="col-2 form-label m-1">Data urodzenia:</label>
                            <div class=" m-1 d-flex">
                               <input name="user_birthdate" type="date">
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
                    <form method="post" action="<?php echo ROOT_URL?>users/addExperienceWork" class="MyCollapse container" id="ExperienceWork_AddForm">
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Stanowisko:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="position" class="form-control m-1" placeholder="Stanowisko">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Lokalizacja:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="localization" class="form-control m-1" placeholder="Lokalizacja">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Nazwa firmy:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="company" class="form-control m-1" placeholder="Nazwa firmy">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Okres:</label>
                            </div>
                            <div class="col-9 d-flex justify-content-center">
                                <label class=" col align-items-center justify-content-center d-flex">Od</label>
                                <div class=" col m-1 justify-content-center d-flex">
                                    <input type="date" name="period_start"/>
                                </div>
                                <label class="col align-items-center justify-content-center d-flex">do</label>
                                <div class="col m-1 d-flex justify-content-center">
                                    <input type="date" name="period_end"/>
                                </div>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Obowiązki:</label>
                            </div>
                            <div class="col-9">
                                <textarea class="form-control bg-transparent TextareaEdit" name="duties" placeholder="Napisz twoje obowiazki"></textarea>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_Cancel('ExperienceWork_Add','ExperienceWork_AddForm')">Annuluj</button>
                                <button type="submit" class="btn btn-outline-primary m-1">Dodaj</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php 
                foreach ($model['userExperience'] as $content ) {
                    echo $content;
                }
                 ?>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <div class=" border p-1 rounded-1 m-1 mt-5 shadow-sm">
        <div class="row">
            <div class="col-6">
                <h1 class="d-flex p-2 fs-5">Wykształcenie</h1>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <button type="button" class="btn btn-outline-primary m-1 justify-content-end MyUncollapse" onclick="Btn_Add('Education_Add','Education_AddForm')" id="Education_Add">Dodaj nowy</button>
            </div>
        </div>
        <div class="row m-1">
            <div class="col">
                <div class="col-10">
                    <form method="post" action="<?php echo ROOT_URL?>users/addUserEducation" class="MyCollapse container" id="Education_AddForm">
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Nazwa szkoły:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="shoolName" class="form-control m-1" placeholder="Nazwa szkoły">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Miasto:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="UEdu_City" class="form-control m-1" placeholder="Nazwa miasta">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Poziom wykształcenia:</label>
                            </div>
                            <div class="col-9">
                                <select class="form-select" name="UEdu_level" required>
                                    <option selected disabled value="">Wykrztałcenie</option>
                                    <option>...</option>
                                    <option>Podstawowe</option>
                                </select>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Specjalizacja</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="specialization" class="form-control m-1" placeholder="Specjalizacja">
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Okres:</label>
                            </div>
                            <div class="col-9 d-flex justify-content-center">
                                <label class=" col align-items-center justify-content-center d-flex">Od</label>
                                <div class=" col m-1 justify-content-center d-flex">
                                    <input type="date" name="UEdu_periodStart">
                                </div>
                                <label class="col align-items-center justify-content-center d-flex">do</label>
                                <div class="col m-1 d-flex justify-content-center">
                                    <input type="date" name="UEdu_periodEnd">
                                </div>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_Cancel('Education_Add','Education_AddForm')">Annuluj</button>
                                <button type="submit" class="btn btn-outline-primary m-1">Dodaj</button>
                            </div>
                        </div>
                    </form>
                </div>
                <p>Historia zatrudnienia to podstawowa informacja, na bazie której pracodawca oceni Twoje kompetencje. Koniecznie uzupełnij informacje o stanowiskach na których pracowałeś i opisz dokładnie wykonywane obowiązki.</p>
                <?php
                    foreach ($model['userEducation'] as $content ) {
                        echo $content;
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <div class=" border p-1 rounded-1 m-1 mt-5 shadow-sm">
            <div class="row">
                <div class="col-2">
                    <h1 class="d-flex p-2 fs-5">Języki</h1>
                </div>
                <div class="col-10 d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-primary m-1 justify-content-end MyUncollapse" onclick="Btn_Edit('UserLanguage_Edit','UserLanguage_UserInfo','UserLanguage_Form')" id="UserLanguage_Edit">Dodaj</button>
                </div>
            </div>
            <div class="row m-1">
                <div class="col">
                    <div class="col">
                        <div class="MyUncollapse" id="UserLanguage_UserInfo">
                           <p>Pierwsze co zobaczą rekrutujący na Twoim profilu to podsumowanie zawodowe. Postaraj się w paru zdaniach, podsumować Twoje doświadczenie zawodowe.</p>
                        </div>
                        <form method="post" action="<?php echo ROOT_URL ?>users/addUserLanguage" class="MyCollapse" id="UserLanguage_Form">
                        <div class="container">
                            <div class="row">
                                <div class="col-3">
                                    <label class="form-label">Nazwa języka:</label>
                                </div>
                                <div class="col-3">
                                    <div class=" m-1 d-flex">
                                        <select class="form-select" id="validationCustom04" name="language_name" required>
                                            <option selected disabled value="" >Wybierz z listy</option>
                                            <option>polski</option>
                                            <option>angielski</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Twój poziom:</label>
                                </div>
                                <div class="col-3">
                                    <div class=" m-1 d-flex">
                                        <select class="form-select" id="validationCustom04" name="language_level" required>
                                            <option selected disabled value="">Wybierz z listy</option>
                                            <option>podstawowy</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_CancelSave('UserLanguage_Edit','UserLanguage_UserInfo','UserLanguage_Form')">Annuluj</button>
                                    <button type="submit" class="btn btn-outline-primary m-1">Dodaj</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <?php 
                            foreach ($model['userLanguage'] as $content ) {
                                echo $content;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
</div>