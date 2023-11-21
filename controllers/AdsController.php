<?php
    class AdsController extends Controller{
        protected function Index(){
            $model = new Ad();
            $this->returnView('index', $model->Index());
        }
        protected function getName() {
            return 'ads';
        }
        public function create() {
            if(!isset($_SESSION['is_logged_in'])){
                header('Location: '.ROOT_URL.'ads');
            }
            $model = new Ad();
            if ($model->add()) {
                Messages::setMsg('Ogłoszenie dodane','success');
                $this->redirect('ads');
            }
            else { 
                Messages::setMsg('Nie dodano ogłoszenia','error');
                $this->redirect('ads', 'add');
            }
        }
        protected function add(){
            if(!isset($_SESSION['is_logged_in'])){
                header('Location: '.ROOT_URL.'ads');
            }
            $this->returnView('add', true);
        }
        protected function edit($id) {
            if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'ads');
            }
            $model = new Ad();
            $this->returnView('edit', $model->get($id));
        }
        protected function change($id) {
            if(!isset($_SESSION['is_logged_in'])){
                    header('Location: '.ROOT_URL.'ads');
            }
            $model = new Ad();
            if ($model->change($id)) {
                Messages::setMsg('Zmieniono ogłoszenie','success');
            }
            else {
            Messages::setMsg('Nie zmieniono ogłoszenia','error');
            }
            $this->redirect('ads');
        }

        protected function remove($id) {
            if(!isset($_SESSION['is_logged_in'])){
                header('Location: '.ROOT_URL.'ads');
            }
            $model = new Ad();
            if ($model->remove($id)) {
                Messages::setMsg('Ogłoszenie usunięte','success');
            }
            else {
                Messages::setMsg('Nie usunięto ogłoszenia','error');
            }
            $this->redirect('ads');
        }
    }
?>