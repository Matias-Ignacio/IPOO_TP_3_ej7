<?php
class Destino{
    private $identificacion;
    private $nomLugar;
    private $valorXdia;

    public function __construct($identificacion, $nomLugar, $valorXdia){
        $this->identificacion = $identificacion;
        $this->nomLugar = $nomLugar;
        $this->valorXdia = $valorXdia;
    }
    public function getIdentificacion(){
        return $this->identificacion;
    }
    public function getNomLugar(){
        return $this->nomLugar;
    }
    public function getValorXdia(){
        return $this->valorXdia;
    }

    //Metodos de escritura 
  
    public function setIdentificacion($identificacion){
        $this->identificacion = $identificacion;
    }
    public function setNomLugar($nomLugar){
        $this->nomLugar = $nomLugar;
    }
    public function setValorXdia($valorXdia){
        $this->valorXdia = $valorXdia;
    }

    //-------- toString--------
    public function __toString(){
        $cadena = "";
        $cadena = 
        "Identificacion: ".$this->getIdentificacion().
        "\nNombre del Lugar: ".$this->getNomLugar().
        "\nValor por dia por pasajero: ".$this->getValorXdia()."\n";
        return $cadena;
    }
    



}