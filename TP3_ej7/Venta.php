<?php
class Venta{
    private $fecha;
    private $objPaqTur;
    private $cantPersonas;
    private $cliente;

    public function __construct($fecha, $objPaqTur, $cantPersonas, $cliente){
        $this->fecha = $fecha;
        $this->objPaqTur = $objPaqTur;
        $this->cantPersonas = $cantPersonas;
        $this->cliente = $cliente;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getObjPaqTur(){
        return $this->objPaqTur;
    }
    public function getCantPersonas(){
        return $this->cantPersonas;
    }
    public function getCliente(){
        return $this->cliente;
    }

    //Metodos de escritura 
  
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setObjPaqTur($objPaqTur){
        $this->objPaqTur = $objPaqTur;
    }
    public function setCantPersonas($cantPersonas){
        $this->cantPersonas = $cantPersonas;
    }
    public function setCliente($cliente){
        $this->cliente = $cliente;
    }

    //-------- toString--------
    public function __toString(){
        $cadena = "";
        $cadena = 
        "Fecha: ".$this->getFecha().
        "\nPaqTur: ".$this->getObjPaqTur().
        "\nCantPersonas: ".$this->getCantPersonas().
        "\nCliente: ".$this->getCliente()."\n";
        return $cadena;
    }
    

 
}