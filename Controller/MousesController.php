<?php
require_once "./Model/MousesModel.php";
require_once "./View/MousesView.php";
require_once "./Helpers/loghelp.php";

class MousesController{

    private $model;
    private $view;
    private $loghelp;

    function __construct(){
        $this->model = new MousesModel();
        $this->view = new MousesView();
        $this->loghelp = new LogHelp();
    }

    function showHome(){

        if (!isset ($_POST['filtro']) || ($_POST['filtro'] == "todasMarcas")) {            
             
            $mouses = $this->model->getMouses();
            
        }
        else{  
            $filtro = $_POST['filtro'];
            $mouses = $this->model->getMousesPorMarca($filtro);
        }
           
        $marcas = $this->model->getMarcas();
        $this->view->showMouses($mouses, $marcas);

    }

    function createMouses(){
        $this->loghelp->checkLoggedIn();
       
        $this->model->insertMousesDeBD($_POST['nombre'], $_POST['stock'], $_POST['precio'], $_POST['Marca']);
        $this->view->showHomeLocation();
    }

    function deleteMouse($id){
        $this->loghelp->checkLoggedIn();

        $this->model->deleteMousesDeBD($id);
        $this->view->showHomeLocation();
    }

    function updateMouses($action, $id){
        $this->loghelp->checkLoggedIn();
        
        $this->model->updateMousesDeBD($id, $action);
        $this->view->showHomeLocation();
    }
    
    function viewMouse($id){

        $mouse = $this->model->getMouse($id);
        $this->view->showMouse($mouse);
    }

}
