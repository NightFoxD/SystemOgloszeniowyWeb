<?php
class Bootstrap {
    private $controller;
    private $action;
    private $argument;
    private $request;
    public function __construct($request){
        $this->request = str_replace(ROOT_DOMAIN, "/", $request);
        $this->action = 'index';
        $this->argument = '';
        $this->processRequest();
    }
    public function createController() {
        if(is_object($this->controller)) {
            $parents = class_parents($this->controller);
        if(in_array("Controller", $parents)){
        if(method_exists($this->controller, 
            $this->action)){
        return $this->controller;
        } 
        else {
            echo '<h1>Metoda nie istnieje</h1>';
            
            return;
        }
        } else {
            // Klasa nie rozszerza klasy Controller
            echo '<h1>Klasa nie rozszerza klasy Controller</h1>';
            return;
        }
        } else {
            // Klasa kontrolera nie znaleziona
            echo '<h1>Nie udało się utworzyć obiektu</h1>›';
            return;
        }
    }
    private function processRequest() {
        if ($this->request == '/') {
            $this->controller = new HomeController($this->action, $this->argument);
        return;
        }
        
        $uriExploded = explode("?", $this->request);
        if (count($uriExploded) < 2) {
            $controllerUri = $this->request;
        }
        else {
            // query string in place
            $controllerUri = $uriExploded[0];
            $queryString = $uriExploded[1];
        }
        $components = explode("/", $controllerUri);
        $componentsCount = count($components);
        try {
            // w components[1] zawsze powinien znajdować
            // się nasz kontroler, dlatego próbujemy utworzyć obiekt
            // klasy wg podanej nazwy
            $controllerName = ucfirst(strtolower($components[1]));
            $controllerClass = $controllerName . 
            "Controller";
            if (!class_exists($controllerClass))
                throw new Exception("Nie znaleziono klasy kontrolera.");
        switch ($componentsCount) {
            case 2:
                // host www + sam controller
                $this->action = 'index';
                break;
            case 3:
                // host www + controller i metoda
                $this->action = $components[2];
                break;
            case 4:
                // host www + controller, metoda i argument
                $this->action = $components[2];
                $this->argument = $components[3]; 
                break;
            default:
            // ktoś chce nam zrobić na złość
            throw new Exception("Błedny adres URL");
        }
        $this->controller = new
            $controllerClass($this->action, $this->argument);
        }
        catch (Exception $e) {
            $this->action = 'error';
            $this->argument = $e->getMessage();
            $this->controller = new HomeController($this->action, $this->argument);
        }
    }
}