<?php

class MarcaModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_mouses;charset=utf8', 'root', '');
    }

    function getMarca(){
        $query = $this->db->prepare( "select * from marcas");
        $query->execute();
        $marcas = $query->fetchAll(PDO::FETCH_OBJ);
        return $marcas;
    } 

    function insertMarcaDeBD($name){
        $query = $this->db->prepare("INSERT INTO marcas(marca_name) VALUES(?)");
        $query->execute(array($name));
    }

    function deleteMarcaDeBD($id){
        $query = $this->db->prepare("DELETE FROM marcas WHERE id_marca=?");
        $query->execute(array($id));
    }

    function updateMarcaDeBD($id, $nuevoNombre){
        $query = $this->db->prepare("UPDATE marcas SET marca_name = '$nuevoNombre' WHERE id_marca=?");
        $query->execute(array($id));
    }

    
}