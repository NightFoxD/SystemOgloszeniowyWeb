<?php
    class SearchingController extends Controller{
        protected function getName() {
            return 'search';
        }
        protected function Index() {
            $this->returnView('index');
        }
    }
?>