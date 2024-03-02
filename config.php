<?php
    // Define DB Params
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "advertisements_system");
    // Define URL
    define("PROTOCOL", "http://");
    define("ROOT_DOMAIN", "localhost/SystemOgloszeniowyWeb/");
    define("ROOT_URL", PROTOCOL . ROOT_DOMAIN);
    define("ROOT_IMG", ROOT_URL ."images/");
    define("ROOT_Style", ROOT_URL ."styles/");
    define("ROOT_Script", ROOT_URL ."scripts/");
    foreach (glob("app/*.php") as $filename) {
        include $filename;
    }
    foreach (glob("controllers/*.php") as $filename) {
        include $filename;
    }
    foreach (glob("models/*.php") as $filename) {
        include $filename;
    }
?>