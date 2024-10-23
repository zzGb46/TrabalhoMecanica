<?php

//Definir URL base da aplicação
define("BASE_URL", "https://kioficina.smpsistema.com.br");

// Configuração do Data Base
define("DB_HOST", "smpsistema.com.br");
define("DB_NAME", "");
define("DB_USER", "");
define("DB_PASS", "");



//sistema de autoload das classes
spl_autoload_register(function ($classe) {

    if (file_exists('../app/controllers/' . $classe . '.php')) {
        require_once '../app/controllers/' . $classe . '.php';
    }

    if(file_exists('../app/models' . $classe . '.php')){
        require_once '../app/models' . $classe . '.php';
    }

    if(file_exists('../core/' . $classe . '.php')){
        require_once '../core/' . $classe . '.php';
    }
});
