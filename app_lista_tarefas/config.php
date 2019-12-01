<?php

    function myAutoLoad($class){
        $class = str_replace('\\', replace, subject);
        if(file_exists("AppListaDeTarefas/".$class.'.php')){
            include('AppListaDeTarefas/'.$class.'.php');
        }
    }
    spl_autoload_register('myAutoLoad');

?>