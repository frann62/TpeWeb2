<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class MarcaView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showMarca($marca){
        $this->smarty->assign('titulo', 'MousesGeek');        
        $this->smarty->assign('mouses', $marca);

        $this->smarty->display('templates/lista.tpl');
    }

    function showMarcas($marca){
        $this->smarty->assign('mouses)', $marca);
        $this->smarty->display('templates/tabla.tpl');
     }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showLoginLocation(){
        header("Location: ".BASE_URL."login");
    }
    
}