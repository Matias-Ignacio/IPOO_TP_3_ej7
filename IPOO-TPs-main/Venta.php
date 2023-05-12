<?php

class Venta{
    private $fecha;
    private $colProductos; //Arreglo asosiativo ["cant" => 0, "Producto" => 0]
    private $cliente;
 //   private $importeFinal;

    public function __construct($fecha, $colProductos, $cliente){
        $this->fecha = $fecha;
        $this->colProductos = $colProductos;
        $this->cliente = $cliente;
       // $this->importeFinal = 0;
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

/*    public function getImporteFinal(){
        return $this->importeFinal;
    }*/

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function setColProductos($col){
        $this->colProductos = $col;
    }

    public function setCliente($cliente){
        $this->cliente = $cliente;
    }

 /*   public function setImporteFinal($importe){
        $this->importeFinal = $importe;
    }*/

    
    public function __toString(){
        $cadena = "";
        return $cadena;
    }

    /**
     * Retorna el valor total de la venta
     * @return int
     */
    public function darImporteVenta(){
        $importe = 0;
        $colProd = $this->getColProductos();
        for ($i = 0; $i < count($colProd); $i++){
            $importe += $colProd[$i]["Cant"] * $colProd[$i]["Producto"]->darPrecioVenta;
        }

        return $importe;
       // return $this->getImporteFinal();
    }



}
