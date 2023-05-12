<?php
class Rubro{
    private $descripcion;
    private $porcentajeGanancia;

    public function __construct($desc, $porcen){
        $this->descripcion = $desc;
        $this->porcentajeGanancia = $porcen;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getPorcentajeGanancia(){
        return $this->porcentajeGanancia;
    }

    public function setDescripcion($desc){
        $this->descripcion = $desc;
    }

    public function __setPorcentajeGanancia($gan){
        $this->porcentajeGanancia = $gan;
    }


    public function __toString(){
        $cadena = "";
        return $cadena;
    }

}