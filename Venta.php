<?php

class Venta{
    private $fecha;
    private $colProductos;
    private $cliente;
    private $importeFinal;

    public function __construct($fecha, $colProductos, $cliente, $importeFinal){
        $this->fecha = $fecha;
        $this->colProductos = $colProductos;
        $this->cliente = $cliente;
        $this->$importeFinal = $importeFinal;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getColProductos(){
        return $this->colProductos;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function getImporteFinal(){
        return $this->importeFinal;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function setColProductos($col){
        $this->colProductos = $col;
    }

    public function setCliente($cliente){
        $this->cliente = $cliente;
    }

    public function setImporteFinal($importe){
        $this->importeFinal = $importe;
    }

    
    public function __toString(){
        $cadena = "";
        return $cadena;
    }

}
