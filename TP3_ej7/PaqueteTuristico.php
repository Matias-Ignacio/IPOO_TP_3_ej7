<?php
class PaqueteTuristico{
    private $fechaDesde;
    private $cantDias;
    private $objDestino;
    private $cantTotPlazas;
    private $cantDispPlazas;

    public function __construct($fechaDesde, $cantDias, $objDestino, $cantTotPlazas, $cantDispPlazas){
        $this->fechaDesde = $fechaDesde;
        $this->cantDias = $cantDias;
        $this->objDestino = $objDestino;
        $this->cantTotPlazas = $cantTotPlazas;
        $this->cantDispPlazas = $cantDispPlazas;
    }
    public function getFechaDesde(){
        return $this->fechaDesde;
    }
    public function getCantDias(){
        return $this->cantDias;
    }
    public function getObjDestino(){
        return $this->objDestino;
    }
    public function getCantTotPlazas(){
        return $this->cantTotPlazas;
    }
    public function getCantDispPlazas(){
        return $this->cantDispPlazas;
    }

    //Metodos de escritura 
  
    public function setFechaDesde($fechaDesde){
        $this->fechaDesde = $fechaDesde;
    }
    public function setCantDias($cantDias){
        $this->cantDias = $cantDias;
    }
    public function setObjDestino($objDestino){
        $this->objDestino = $objDestino;
    }
    public function setCantTotPlazas($cantTotPlazas){
        $this->cantTotPlazas = $cantTotPlazas;
    }
    public function setCantDispPlazas($cantDispPlazas){
        $this->cantDispPlazas =$cantDispPlazas;
    }

    //-------- toString--------
    public function __toString(){
        $cadena = "";
        $cadena = 
        "FechaDesde: ".$this->getFechaDesde().
        "\nCantDias: ".$this->getCantDias().
        "\nDestino: ".$this->getObjDestino().
        "\nCantTotPlazas: ".$this->getCantTotPlazas().
        "\nCantDispPlazas: ".$this->getCantDispPlazas()."\n";
        return $cadena;
    }


 
}