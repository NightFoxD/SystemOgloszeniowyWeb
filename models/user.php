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
                    echo <<<html
                    <div class="row m-1">
                        <div class="col">
                    html;
                        echo '<label class="form-label">Imię: '. $row['name'].' Nazwisko: '. $row['surname'] .'</label>';
                    echo <<<html
                        </div>
                    </div>
                    <div class="row m-1">
                        <div class=col">
                    html;
                        echo '<label class="form-label">Aktualne stanowisko: '. $row['currnent_occupation'] .' </label>';
                    echo <<<html
                        </div>
                    </div>
                    <div class="row m-1">
                        <div class="col">
                    html;
                        echo '<label class="form-label">Państwo: ' . $row['nationality'] .' Miasto: '. $row['city'] .' </label>';
                    echo <<<html
                        </div>
                    </div>
                    html;
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
                            <div class="col-5">
                                <nav aria-label="breadcrumb d-flex">
                                    <ol class="breadcrumb">
                                        <li class='breadcrumb-item'><a href='#'><?php echo $data['position']; ?></a></li>
                                        <li class='breadcrumb-item active' aria-current='page'><?php echo $data['period_start'] . " - " . $data['period_end']; ?></li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-7 d-flex justify-content-end">
                                <form method='post' action ='<?php echo ROOT_URL; ?>users/deleteExperienceWork'>
                                    <input type='hidden' name ='deleteExperienceWorkID' value ='<?php echo $data['experience_id']; ?>'>
                                    <button type='submit' class="btn btn-outline-danger m-1">usuń</button>
                                </form>
                                <button type="button" class="btn btn-outline-primary m-1" onclick="Btn_Add('ExperienceWork_Information_<?php echo $experienceId; ?>', 'ExperienceWork_UpdateForm_<?php echo $experienceId; ?>')">Edytuj</button>
                            </div>
                        </div>
                        <div class='col-5'>
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
                                <button type="submit" name="Save" class="btn btn-outline-primary m-1">Zapisz</button>
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
    }
?>
