<?php

class LogHelp{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["username"])){
            header("Location: ".BASE_URL."login");
        }
        else{
            header("Location: ".BASE_URL."home");
        }
    }

}