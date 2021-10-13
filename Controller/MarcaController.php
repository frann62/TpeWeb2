<?php
require_once "./Model/MarcaModel.php";
require_once "./View/MarcaView.php";
require_once "./Helpers/loghelp.php";

class MarcaController{

    private $modelMarca;
    private $viewMarca;
    private $loghelp;

    function __construct(){
        $this->modelMarca = new MarcaModel();
        $this->viewMarca = new MarcaView();
        $this->loghelp = new LogHelp();
    }

    function showHome(){

        $mouses = $this->modelMarca->getMarca();
        $this->viewMarca->showMarca($mouses);
    }

    function createMarca(){
        $this->loghelp->checkLoggedIn();
       
        $this->modelMarca->insertMarcaDeBD($_POST['marca_name']);
        $this->viewMarca->showHomeLocation();
    }

    function createMouses(){
        $this->loghelp->checkLoggedIn();

        $this->modelMarca->insertMarcaDeBD($_POST['id_marca'], $_POST['precio']);
        $this->viewMarca->showHomeLocation();
    }

    function deleteMarca($id){
        $this->loghelp->checkLoggedIn();

        $this->modelMarca->deleteMarcaDeBD($id);
        $this->viewMarca->showHomeLocation();
    }

    function updateMarca($id){
        $this->loghelp->checkLoggedIn();

        $nuevoNombre = ($_POST['editarNombre']);
        $this->modelMarca->updateMarcaDeBD($id, $nuevoNombre);
        $this->viewMarca->showHomeLocation();
    }
    
    function viewMarca($id){
        $this->loghelp->checkLoggedIn();

        $mouses = $this->modelMarca->getMarca($id);
        $this->viewMarca->showMarca($mouses);
    }

}
