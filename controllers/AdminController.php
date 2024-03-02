<?php
    class AdminController extends Controller{
        protected function getName() {
            return 'admin';
        }
        protected function Index(){
            $this->returnView('index');
        }
    } 
?>