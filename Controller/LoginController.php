<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";

class LoginController {

    private $model;
    private $view;

    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

    function logout(){

        session_start();
        session_destroy();
        $this->view->showLogin("Sesion cerrada!");

    }

    function login(){
        $this->view->showLogin();
    }

    function verifyLogin(){

        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
     
            $username = $this->model->getUser($username);
     
            if ($username && password_verify($password, $username->password)) {

                session_start();

                $_SESSION["username"] = $username;
                $_SESSION["administrador"] = true;
                $this->view->showHome();

            } else {
                $_SESSION["administrador"] = false;
                $this->view->showLogin("Cuenta Invalida");
            }
        }
    }

}