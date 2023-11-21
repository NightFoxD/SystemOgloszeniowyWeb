<?php
    class User extends Model{
        public function register(){
            // Sanitize POST
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $password = sha1($post['password']);
            if($post['submit']){
                if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''){
                    Messages::setMsg('Proszę wypełnić
                    wszystkie pola', 'error');
                    return;
                }
                // Insert into MySQL
                $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
                $this->bind(':name', $post['name']);
                $this->bind(':email', $post['email']);
                $this->bind(':password', $password);
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
                $this->query('SELECT * FROM users WHERE
                email = :email AND password = :password');
                $this->bind(':email', $post['email']);
                $this->bind(':password', $password);
                
                $row = $this->single();
                if($row){
                    $_SESSION['is_logged_in'] = true;
                    $_SESSION['user_data'] = array("id" => $row['id'],"name" => $row['name'],"email" => $row['email']);
                    return true;
                }
            }
        return false;
        }
        
    }
?>
