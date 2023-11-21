<?php
    class UsersController extends Controller{ 
        protected function getName() {
            return 'users';
        }
        public function register() {
            $this->returnView('register');
        }
        public function Profil() {
            $this->returnView('profil');
        }
        public function createAccount() {
            $model = new User();
            if ($model->register()) {
                Messages::setMsg("Konto utworzone","success");
                $this->redirect('users', 'login');
            }
            else {
                Messages::setMsg("Konto nie zostało utworzone", "error");
                $this->redirect('users', 'register');
            }
        }
        public function login(){
            $this->returnView('login');
        }
            
        public function authenticate() {
            $model = new User();
            if ($model->login()) {
                Messages::setMsg("Zalogowano", "success");
                $this->redirect('home');
            }
            else {
                Messages::setMsg("Nie udało się zalogować","error");
                $this->redirect('users', 'login');
            }
        }
        public function setting() {
            $this->returnView('setting');
        }
        public function logout() {
            unset($_SESSION['is_logged_in']);
            unset($_SESSION['user_data']);
            Messages::setMsg('Wylogowano', 'success');
            $this->redirect('home');
        }
    }
?>   