<?php
    class UsersController extends Controller{ 
        protected function getName() {
            return 'users';
        }
        public function register() {
            $this->returnView('register');
        }
        public function Profil() {
            $userModel = new User();
            $model = [
                "userData"=>$userModel->getUserData(),
                "userContract"=>$userModel->getUserContract(),
                "userExperience"=>$userModel->getUserExperienceWorks()
            ];
            $this->returnView('profil',$model);
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
        public function saveUserData() {
            $model = new User();
            
            if ($model->saveUserData()) {
                
                Messages::setMsg("Informacje zapisano","success");
                $this->redirect('users', 'profil');
            }
            else {
                $this->redirect('users', 'profil');
            }
        }
        public  function saveUserContact(){
            $model = new User();
            if ($model->saveUserContact()) {
                Messages::setMsg("Informacje zapisano","success");
                $this->redirect('users', 'profil');
            }
            else {
                $this->redirect('users', 'profil');
            }
        }
        public function login(){
            $this->returnView('login');
        }
        public function addExperienceWork(){
            $model = new User();
            if($model->addExperienceWork()){
                Messages::setMsg("Informacje zapisano","success");
                $this->redirect('users', 'profil');
            }else{
                $this->redirect('users', 'profil');
            }
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