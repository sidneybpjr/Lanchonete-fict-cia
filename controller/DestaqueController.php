<?php

if(isset($_SESSION['cod'])){
require_once "../DAL/DestaqueDAO.php";
}
else{
require_once "DAL/DestaqueDAO.php";   
}

class DestaqueController {

    private $destaqueDAO;
    
    public function __construct() {
        $this->destaqueDAO = new DestaqueDAO();
    }

    function pegarTodos() {
      return $this->destaqueDAO->pegarTodos();
        
    }
    
    function pegarImagem($cod) {
     if ($cod > 0) {
           return $this->destaqueDAO->pegarImagem($cod);
            
        } else {
            return null;
        }
        
    }

    function excluir($cod) {
        
        if ($cod > 0) {
           return $this->destaqueDAO->excluir($cod);
            
        } else {
            return false;
        }
    }

    function inserir($destaque) {
        if ($destaque != null) {
            return $this->destaqueDAO->inserir($destaque);
        } else {
            return false;
        }
    }
    
    
    function retirarExibicao($cod){
        if ($cod > 0) {
           return $this->destaqueDAO->retirarExibicao($cod);
            
        } else {
            return false;
        }
    }
    
    function incluirExibicao($cod){
        if ($cod > 0) {
           return $this->destaqueDAO->incluirExibicao($cod);
            
        } else {
            return false;
        }
    }

}
