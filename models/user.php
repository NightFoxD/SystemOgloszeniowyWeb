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
                $this->query('SELECT * FROM user WHERE login = :login AND password = :password');
                $this->bind(':login', $post['login']);
                $this->bind(':password', $password);
                
                $row = $this->single();
                $this->query('INSERT INTO `user_data`(`user_id`) VALUES (:user_id)');
                $this->bind(':user_id',$row['user_id']);
                
                // Verify
                if($createAccount){
                    return true;
                }
            }
            return false;
        }
        public function login(){
            // Sanitize POST
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
        
    }
?>
