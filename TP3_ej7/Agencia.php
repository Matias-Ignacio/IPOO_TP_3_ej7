<?php
class Agencia{
    private $colPaqTur;
    private $colVentas;
    private $colVentasOnline;

// en minuscula             colPaqTur  colVentas  colVentasOnline 
// EMPIEZA CON MAYUSCULA    ColPaqTur  ColVentas  ColVentasOnline 

    public function __construct($colPaqTur, $colVentas, $colVentasOnline){
        $this->colPaqTur = $colPaqTur;
        $this->colVentas = $colVentas;
        $this->colVentasOnline = $colVentasOnline;
    }
    public function getColPaqTur(){
        return $this->colPaqTur;
    }
    public function getColVentas(){
        return $this->colVentas;
    }
    public function getColVentasOnline(){
        return $this->colVentasOnline;
    }

    //Metodos de escritura 
  
    public function setColPaqTur($colPaqTur){
        $this->colPaqTur = $colPaqTur;
    }
    public function setColVentas($colVentas){
        $this->colVentas = $colVentas;
    }
    public function setColVentasOnline($colVentasOnline){
        $this->colVentasOnline = $colVentasOnline;
    }

    //-------- toString--------
    public function __toString(){
        $cadena = "";
        $cadena = 
        "ColPaqTur: ".$this->verColeccion($this->getColPaqTur()).
        "\nColVentas: ".$this->verColeccion($this->getColVentas()).
        "\nColVentasOnline: ".$this->verColeccion($this->getColVentasOnline())."\n";
        return $cadena;
    }
    
    /**
    * Ver la coleccion en el toString
    */
    public function verColeccion($coleccion){
        $cadena = "";
        if ($coleccion != null){
            for ($i = 0; $i < count($coleccion); $i++){
                $cadena .= $coleccion[$i];
            }
        }    
        return $cadena; 
        }

 
}