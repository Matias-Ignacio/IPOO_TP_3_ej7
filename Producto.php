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

    
}