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
                $this->query('INSERT INTO user_data (login, password, account_type_id) VALUES(:login, :password,:user_type)');
                $this->bind(':login', $post['login']);
                $this->bind(':password', $password);
                $this->bind(':user_type', 1);
                $this->execute();
                // Verify
                if($this->lastInsertId()){
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
                $this->query('SELECT * FROM user_data WHERE
                login = :login AND password = :password');
                $this->bind(':login', $post['login']);
                $this->bind(':password', $password);
                $row = $this->single();
                if($row){
                    $_SESSION['is_logged_in'] = true;
                    $_SESSION['user_data'] = array("id" => $row['user_data_id'],"login" => $row['login'],"type" => $row['account_type_id']);
                    return true;
                }
            }
        return false;
        }
        
    }
?>
