<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class MousesView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showMouses($mouses, $marcas){
        session_start();
        if (isset($_SESSION['administrador'])) {
            $this->smarty->assign('administrador', $_SESSION['administrador']); 
        }
        $this->smarty->assign('titulo', 'MousesGeek');        
        $this->smarty->assign('mouses', $mouses);
        $this->smarty->assign('marcas', $marcas);

        $this->smarty->display('templates/home.tpl');
    }

    function showMouse($mouse){
        $this->smarty->assign('mouse', $mouse);
        $this->smarty->display('templates/mousetienda.tpl');
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showLoginLocation(){
        header("Location: ".BASE_URL."login");
    }
    
}