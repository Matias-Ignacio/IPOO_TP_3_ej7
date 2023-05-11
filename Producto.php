<?php
class Producto{

    private $codigoBarra;
    private $descripcion;
    private $stock;
    private $iva;
    private $precioCompra;
    private $rubro;

    public function __construct($cod, $desc, $stock, $iva, $pCom, $rubro){
        $this->codigoBarra = $cod;
        $this->descripcion = $desc;
        $this->stock = $stock;
        $this->iva = $iva;
        $this->precioCompra = $pCom;
        $this->rubro = $rubro;
    }

    public function getCodigoBarra(){
        return $this->codigoBarra;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getStock(){
        return $this->stock;
    }

    public function getIva(){
        return $this->iva;
    }

    public function getPrecioCompra(){
        return $this->precioCompra;
    }

    public function getRubro(){
        return $this->rubro;
    }

    public function setCodigoBarra($cod){
        $this->codigoBarra = $cod;
    }

    public function setDescripcion($desc){
        $this->descripcion = $desc;
    }

    public function setStock($stock){
        $this->stock = $stock;
    }

    public function __setIva($iva){
        $this->iva = $iva;
    }

    public function setPrecioCompra($pre){
        $this->precioCompra = $pre;
    }

    public function setRubro($rubro){
        $this->rubro = $rubro;
    }

    public function __toString(){
        $cadena = "";
        return$cadena;
    }

    /**
     * Retorna el precio de venta, (Compra * Ganacia) + (compra * Iva)
     * @return int
     */
    public function darPrecioVenta(){
        $precio = $this->getPrecioCompra() * $this->getRubro()->getPorcentajeGanancia() + 
        $this->getPrecioCompra() * $this->getIva();
        return $precio;
    }

}