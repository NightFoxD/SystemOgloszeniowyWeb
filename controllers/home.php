<?php
class HomeController extends Controller{ 
    protected function getName() {
        return 'home';
    }
    protected function Index(){
        $this->returnView('index');
    }
}
?>