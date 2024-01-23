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
                    $_SESSION['user_data'] = array("id" => $row['user'],"login" => $row['login'],"type" => $row['role_id']);
                    
                    return true;
                }
            }
        return false;
        }
        public function SaveUserData(){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if($post['submit']){
                if($post['user_name']){
                    return false;
                }
                if($post['user_surname']){
                    return false;
                }
                if($post['user_currnent_occupation|']){
                    return false;
                }
                if($post['user_city']){
                    return false;
                }
                
            }
        }
        
    }
?>
