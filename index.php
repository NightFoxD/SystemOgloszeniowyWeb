<?php
    session_start();
    require('config.php');
    $requestUrl = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $bootstrap = new Bootstrap($requestUrl);
    $controller = $bootstrap->createController();
    if ($controller) {
        $controller->executeAction();
    }
?>
<!-- 
    start sesji
    dołączenie	plików
    przetworzenie	zapytania	URL 
-->