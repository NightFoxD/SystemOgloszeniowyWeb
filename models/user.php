<?php
    class User extends Model{
        public function register(){
            // Sanitize POST
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $password = sha1($post['password']);
            if($post['submit']){
                if($post['login'] == '' || $post['password'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                // Insert into MySQL
                $this->query('INSERT INTO user (login, password, role_id) VALUES(:login, :password,:user_type)');
                $this->bind(':login', $post['login']);
                $this->bind(':password', $password);
                $this->bind(':user_type', 1);
                $this->execute();
                $createAccount = $this->lastInsertId();
                
                // Verify
                if($createAccount){
                    return true;
                }
            }
            return false;
        }
        public function login(){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $password = sha1($post['password']);
            if($post['submit']){
                // Compare Login
                $this->query('SELECT * FROM user WHERE
                login = :login AND password = :password');
                $this->bind(':login', $post['login']);
                $this->bind(':password', $password);
                
                $row = $this->single();
                if($row){
                    $_SESSION['is_logged_in'] = true;
                    $_SESSION['user_data'] = array("id" => $row['user_id'],"login" => $row['login'],"type" => $row['role_id']);
                    
                    return true;
                }
            }
        return false;
        }
        public function saveUserData(){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($post['submit'])){
                
                if($post['user_name'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['user_surname'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['user_currnent_occupation'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['user_city'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['user_nationality'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                $this->query("UPDATE `user_data` SET `name`=:user_name,`surname` = :user_surname, `currnent_occupation` = :user_crrent_occupaion,`nationality` = :user_nationality, `city` = :user_city WHERE user_id = :user_id");
                $this->bind(':user_name', $post['user_name']);
                $this->bind(':user_surname', $post['user_surname']);
                $this->bind(':user_crrent_occupaion', $post['user_currnent_occupation']);
                $this->bind(':user_city', $post['user_city']);
                $this->bind(':user_nationality', $post['user_nationality']);
                $this->bind(':user_id', $_SESSION['user_data']['id']);
                $this->execute();
                return true;
               
            }
        }
        public function getUserData(){
            $this->query("Select * FROM user_data WHERE user_id = :user_id");
            $this->bind(':user_id', $_SESSION['user_data']['id']);
            ob_start();
            $row = $this->single();
                if($row){
                    ?>
                    <div class="row m-1">
                        <div class="col-6">
                            <label class="form-label">Imię: <?php echo $row['name'] ?> </label>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Nazwisko: <?php echo $row['surname'] ?></label>
                        </div>
                    </div>
                    <div class="row m-1">
                        <div class=col">
                            <label class="form-label">Aktualne stanowisko: <?php echo $row['currnent_occupation'] ?> </label>
                        </div>
                    </div>
                    <div class="row m-1">
                        <div class="col-6">
                            <label class="form-label">Państwo: <?php echo $row['nationality'] ?> </label>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Miasto: <?php echo $row['city'] ?></label>
                        </div>
                    </div>
                    <?php
            }
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }
        public function saveUserContact(){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST)){
                if($post['user_email'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['user_phoneNumber'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['user_birthdate'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                $this->query("UPDATE `user_data` SET `email`=:user_email,`telephone_number` = :user_phoneNumber, `birth_date` = :user_birthdate WHERE user_id = :user_id");
                $this->bind(':user_email', $post['user_email']);
                $this->bind(':user_phoneNumber', $post['user_phoneNumber']);
                $this->bind(':user_birthdate', $post['user_birthdate']);
                
                $this->bind(':user_id', $_SESSION['user_data']['id']);
                $this->execute();
                return true;
            }
        }
        public function getUserContract(){
            $this->query("Select * FROM user_data WHERE user_id = :user_id");
            $this->bind(':user_id', $_SESSION['user_data']['id']);
            ob_start();
            $row = $this->single();
                if($row){
                    echo <<< html
                        <div class="row m-1">
                        <div class="col-lg-6 col-md-12">
                    html;

                    echo '<label class="form-label">Email: '. $row['email'] .' </label>';
                    echo "</div>";
                    echo  '<div class="col-lg-6 col-md-12">';

                    echo '<label class="form-label">Telefon: '.$row['telephone_number'].' </label>';

                    echo <<< html
                        </div>
                        </div>
                        <div class="row m-1">
                        <div class="col">
                    html;

                    echo '<label class="form-label">Data urodzenia: '.$row['birth_date'].' </label>';

                    echo <<< html
                            </div>
                        </div>
                    html;
            }
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }
        public function addExperienceWork(){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST)){
                if($post['position'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['localization'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['company'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['period_start'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['period_end'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['duties'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                $this->query("INSERT INTO `user_experience` (`experience_id`, `user_id`, `position`, `company`, `localization`, `period_start`, `period_end`, `duties`) VALUES (NULL, :user_id, :position, :company, :localization, :period_start, :period_end, :duties)");
                $this->bind(':position', $post['localization']);
                $this->bind(':localization', $post['company']);
                $this->bind(':company', $post['company']);
                $this->bind(':period_start', $post['period_start']);
                $this->bind(':period_end', $post['period_end']);
                $this->bind(':duties', $post['duties']);
                $this->bind(':user_id', $_SESSION['user_data']['id']);
                $this->execute();
                return true;
            }
            
        }
       
        public function getUserExperienceWorksView($data){

            $experienceId = $data['experience_id'];
        
            ob_start();
            ?>
            <div class="col">
                <div class="container">
                    <div class='row MyUncollapse' id='ExperienceWork_Information_<?php echo $experienceId; ?>'>
                        <div class="row d-flex">
                            <div class="col-10">
                                <nav aria-label="breadcrumb d-flex">
                                    <ol class="breadcrumb">
                                        <li class='breadcrumb-item '><a class="text-decoration-none text-black"><?php echo $data['position']; ?></a></li>
                                        <li class='breadcrumb-item active' aria-current='page'><?php echo $data['period_start'] . " - " . $data['period_end']; ?></li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <form method='post' action ='<?php echo ROOT_URL; ?>users/deleteExperienceWork'>
                                    <input type='hidden' name ='deleteExperienceWorkID' value ='<?php echo $data['experience_id']; ?>'>
                                    <button type='submit' class="btn btn-outline-danger m-1">usuń</button>
                                </form>
                                <button type="button" class="btn btn-outline-primary m-1" onclick="Btn_Add('ExperienceWork_Information_<?php echo $experienceId; ?>', 'ExperienceWork_UpdateForm_<?php echo $experienceId; ?>')">Edytuj</button>
                            </div>
                        </div>
                        <div class='col-12'>
                            <p>Lokalizacja <span class='text-success'><?php echo $data['localization']; ?></span></p>
                            <textarea class='form-control bg-transparent border-0' placeholder='Leave a comment here' disabled><?php echo $data['duties']; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-10">
                    <form method='post' action ='<?php echo ROOT_URL; ?>users/updateExperienceWork' class='MyCollapse container' id='ExperienceWork_UpdateForm_<?php echo $experienceId; ?>'>
                        <input type='hidden' name='updateExperienceID' value='<?php echo $data['experience_id']; ?>'>
                        <div class="row m-1">
                            <div class="col-3">
                                <label class="form-label m-1">Stanowisko:</label>
                            </div>
                            <div class="col-9">
                                <input type='text' name='position' class='form-control m-1' placeholder='Stanowisko' value ='<?php echo $data['position']; ?>'>
                            </div>
                        </div>
                        <div class="row m-1">
                                <div class="col-3">
                                    <label class="form-label m-1">Lokalizacja:</label>
                                </div>
                                <div class="col-9">
                            
                                    <input type='text' name='localization' class='form-control m-1' placeholder='Lokalizacja' value ="<?php echo $data['localization'] ?>">
                            
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class="form-label m-1">Nazwa firmy:</label>
                                </div>
                                <div class="col-9">
                          
                                  <input type='text' name='company' class='form-control m-1' placeholder='Nazwa firmy' value = "<?php echo $data['company'] ?>">
                            
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class=" col-2 form-label m-1">Okres:</label>
                                </div>
                                <div class="col-9 d-flex justify-content-center">
                                    <label class=" col align-items-center justify-content-center d-flex">Od</label>
                                    <div class=" col m-1 justify-content-center d-flex">
                           
                                        <input type='date' name='period_start' value="<?php echo $data['period_start'] ?>"/>
                                   
                                    </div>
                                    <label class="col align-items-center justify-content-center d-flex">do</label>
                                    <div class="col m-1 d-flex justify-content-center">
                                  
                                        <input type='date' name='period_end' value="<?php echo $data['period_end']?>"/>
                       
                                    </div>
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class=" col-2 form-label m-1">Obowiązki:</label>
                                </div>
                                <div class="col-9">
                           
                               <textarea class='form-control bg-transparent TextareaEdit' name='duties' placeholder='Napisz twoje obowiazki'><?php echo $data['duties'] ?></textarea>
                                
                         
                                </div>
                            </div>
                        <div class="row m-1">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_Cancel('ExperienceWork_Information_<?php echo $experienceId; ?>', 'ExperienceWork_UpdateForm_<?php echo $experienceId; ?>')">Anuluj</button>
                                <button type="submit" name="Save" class="btn btn-outline-primary m-1">Edytuj</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }
        public function getUserExperienceWorks(){
            $this->query("Select * FROM user_experience WHERE user_id = :user_id");
            $this->bind(':user_id', $_SESSION['user_data']['id']);
            $result = $this->resultSet();
            

            $data = [];
            foreach($result as $row){
                if($row){
                    $experienceWork = [
                    "experience_id" => $row['experience_id'],
                    "position" => $row['position'],
                    "localization" => $row['localization'],
                    "company" => $row['company'],
                    "period_start" => $row['period_start'],
                    "period_end" => $row['period_end'],
                    "duties" => $row['duties']
                    ];
                    
                    array_push($data, $this->getUserExperienceWorksView($experienceWork));
                }
            }
            return $data;
        }
        public function deleteExperienceWork(){
            $this->query("DELETE FROM `user_experience` WHERE  experience_id= :experience_id");
            $this->bind(':experience_id', $_POST['deleteExperienceWorkID']);
            $this->execute();
            return true;
        }
        public function updateExperienceWork(){

            if(isset($_POST)){
              
                if($_POST['position'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($_POST['localization'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($_POST['company'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($_POST['period_start'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($_POST['period_end'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($_POST['duties'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                $this->query("UPDATE `user_experience` SET `position`=:position, `company`=:company, `localization`=:localization, `period_start`=:period_start, `period_end`=:period_end, `duties`=:duties WHERE experience_id = :updateExperienceID");

                $this->bind(':position', $_POST['position']); // Poprawiona nazwa pola
                $this->bind(':localization', $_POST['localization']);
                $this->bind(':company', $_POST['company']);
                $this->bind(':period_start', $_POST['period_start']);
                $this->bind(':period_end', $_POST['period_end']);
                $this->bind(':duties', $_POST['duties']);
                $this->bind(':updateExperienceID', $_POST['updateExperienceID']);
                $this->execute();
                return true;
            }else{
                return false;
            }
        }
        public function addUserEducation(){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST)){
                if($post['shoolName'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['UEdu_level'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['specialization'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['UEdu_City'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['UEdu_periodStart'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['UEdu_periodEnd'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                $this->query("INSERT INTO `user_education`(`education_id`, `user_id`, `school_name`, `city`, `level`, `specialization`, `period_start`, `period_end`) 
                                                VALUES (NULL,:user_id,:shoolName,:UEdu_City,:UEdu_level,:specialization,:UEdu_periodStart,:UEdu_periodEnd)");
                $this->bind(':shoolName', $post['shoolName']);
                $this->bind(':UEdu_City', $post['UEdu_City']);
                $this->bind(':UEdu_level', $post['UEdu_level']);
                $this->bind(':specialization', $post['specialization']);
                $this->bind(':UEdu_periodStart', $post['UEdu_periodStart']);
                $this->bind(':UEdu_periodEnd', $post['UEdu_periodEnd']);
                $this->bind(':user_id', $_SESSION['user_data']['id']);
                $this->execute();
                return true;
            }
        }
        public function getUserEducations(){
            $this->query("SELECT * FROM `user_education` WHERE user_id = :user_id");
            $this->bind(':user_id', $_SESSION['user_data']['id']);
            $result = $this->resultSet();
            

            $data = [];
            foreach($result as $row){
                if($row){
                    $education = [
                    "education_id" => $row['education_id'],
                    "school_name" => $row['school_name'],
                    "city" => $row['city'],
                    "level" => $row['level'],
                    "specialization" => $row['specialization'],
                    "period_start" => $row['period_start'],
                    "period_end" => $row['period_end'],
                    ];
                    
                    array_push($data, $this->getUserEducationView($education));
                }
            }
            
            return $data;
        }
        public function getUserEducationView($data){
            ob_start();
            ?>
            <div class="col">
                    <div class="container">
                        
                        <div class="row MyUncollapse" id="Experience_Iformation_<?php echo $data["education_id"]?>">
                            <div class="row d-flex">
                                <div class="col-5">
                                    <nav aria-label="breadcrumb d-flex">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a class="text-decoration-none text-black"><?php echo $data["school_name"] ?></a></li>
                                            <li class="breadcrumb-item"><a class="text-decoration-none text-black"><?php echo $data["specialization"] ?></a></li>
                                            <li class="breadcrumb-item"><a class="text-decoration-none text-black"><?php echo $data["level"] ?></a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?php echo $data["period_start"]."-".$data["period_end"]?></li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="col-7 d-flex justify-content-end">
                                    <form method="post" action="<?php echo ROOT_URL ?>users/deleteUserEducation">
                                        <input type="hidden" name="Education_id" value="<?php echo $data['education_id'] ?>"/>
                                        <button type="submit" class="btn btn-outline-danger m-1">usuń</button>
                                    </form>
                                   

                                    <button type="button" class="btn btn-outline-primary m-1" onclick="Btn_Add('Experience_Iformation_<?php echo $data['education_id']?>','Experience_UpdateForm_<?php echo $data['education_id']?>')">Edytuj</button>
                                </div>
                            </div>
                            <div class="col-5">
                                <p>Lokalizacja <span class="text-success"><?php echo $data["city"] ?></span> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col-10">
                        <form method="post" action="<?php echo ROOT_URL ?>users/updateUserEducation" class="MyCollapse container" id="Experience_UpdateForm_<?php echo $data['education_id']?>">
                        <input type="hidden" name="updateEducation_id" value="<?php echo $data['education_id'] ?>"/>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class="form-label m-1">Nazwa szkoły:</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="shool_name" class="form-control m-1" placeholder="Nazwa szkoły:" value = "<?php echo $data["school_name"] ?>">
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class="form-label m-1">Miasto:</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="E_UEdu_City" value="<?php echo $data["city"] ?>" class="form-control m-1" placeholder="Nazwa miasta:">
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class="form-label m-1">Poziom wykształcenia:</label>
                                </div>
                                <div class="col-9">
                                    <select class="form-select" name="level" value="<?php echo $data["level"] ?>" required>
                                        <option selected disabled >Wykrztałcenie</option>
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
                                    <input type="text" name="specialization" class="form-control m-1" placeholder="Specjalizacja" value="<?php echo $data["specialization"] ?>">
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-3">
                                    <label class=" col-2 form-label m-1">Okres:</label>
                                </div>
                                <div class="col-9 d-flex justify-content-center">
                                    <label class=" col align-items-center justify-content-center d-flex">Od</label>
                                    <div class=" col m-1 justify-content-center d-flex">
                                        <input type="date" name="UEdu_periodStart" value="<?php echo $data['period_start']?>" >
                                    </div>
                                    <label class="col align-items-center justify-content-center d-flex">do</label>
                                    <div class="col m-1 d-flex justify-content-center">
                                        <input type="date" name="UEdu_periodEnd" value="<?php echo $data['period_end']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="button" class="btn btn-outline-secondary m-1" onclick="Btn_Cancel('Experience_Iformation_<?php echo $data['education_id']?>','Experience_UpdateForm_<?php echo $data['education_id']?>')">Annuluj</button>
                                    <button type="submit" class="btn btn-outline-primary m-1">Zapisz</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            <?php
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }
        public function deleteUserEducation(){
            if(isset($_POST)){
                $this->query("DELETE FROM `user_education` WHERE education_id = :education_id");
                $this->bind(':education_id', $_POST['Education_id']);
                $this->execute();
            }
            
            return true;
        }
        public function updateUserEducation(){
            if(isset($_POST)){
              
                if($_POST['updateEducation_id'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($_POST['specialization'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($_POST['shool_name'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($_POST['E_UEdu_City'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($_POST['level'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($_POST['UEdu_periodStart'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($_POST['UEdu_periodEnd'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                $this->query("UPDATE `user_education` SET `school_name`=:shool_name,`city`=:city,`level`=:updatedLevel,`specialization`=:specialization,`period_start`=:period_start,`period_end`=:period_end WHERE education_id = :education_id");

                $this->bind(':education_id', $_POST['updateEducation_id']);
                $this->bind(':shool_name', $_POST['shool_name']);
                $this->bind(':specialization', $_POST['specialization']);
                $this->bind(':city', $_POST['E_UEdu_City']);
                $this->bind(':updatedLevel', $_POST['level']);
                $this->bind(':period_start', $_POST['UEdu_periodStart']);
                $this->bind(':period_end', $_POST['UEdu_periodEnd']);
                $this->execute();
                return true;
            }else{
                return false;
            }
        }
        public function addUserLanguage(){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST)){
                if($post['language_name'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                if($post['language_level'] == ''){
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return;
                }
                $this->query("INSERT INTO `user_language`(`language_id`, `language`, `level`, `user_id`) VALUES (NULL,:language_name,:language_level,:user_id)");
                $this->bind(':language_name', $post['language_name']);
                $this->bind(':language_level', $post['language_level']);
                $this->bind(':user_id', $_SESSION['user_data']['id']);
                $this->execute();
                return true;
            }
        }
        public function deleteUserLanguage(){
            $this->query("DELETE FROM `user_language` WHERE  language_id= :language_id");
            $this->bind(':language_id', $_POST['deletelanguage_id']);
            $this->execute();
            return true;
        }
        public function getUserLanguages(){
            $this->query("Select * FROM user_language WHERE user_id = :user_id");
            $this->bind(':user_id', $_SESSION['user_data']['id']);
            $result = $this->resultSet();
            $data = [];
            foreach($result as $row){
                if($row){
                    $language = [
                    "language_id" => $row['language_id'],
                    "language" => $row['language'],
                    "level" => $row['level'],
                    ];
                    
                    array_push($data, $this->getUserLanguagesViews($language));
                }
            }
            return $data;
        }
        public function getUserLanguagesViews($data){
            ob_start()
            ?>
                 <div class="row d-flex">
                    <div class="col-10">
                        <nav aria-label="breadcrumb d-flex">
                            <ol class="breadcrumb">
                                <li class='breadcrumb-item'><a class="text-decoration-none text-black"><?php echo $data['language']; ?></a></li>
                                <li class='breadcrumb-item active' aria-current='page'><?php echo $data['level']; ?></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-2 d-flex justify-content-end">
                        <form method='post' action ='<?php echo ROOT_URL; ?>users/deleteUserLanguage'>
                            <input type='hidden' name ='deletelanguage_id' value ='<?php echo $data['language_id']; ?>'>
                            <button type='submit' class="btn btn-outline-danger m-1">usuń</button>
                        </form>
                    </div>
                </div>
            <?php
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }
    }
?>
