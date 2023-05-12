<?php
include_once 'Producto.php';

class ProductoImp extends Producto{

    public function __construct($cod, $desc, $stock, $iva, $pCom, $rubro, $descuento){
        parent::__construct($cod, $desc, $stock, $iva, $pCom, $rubro);
    }

    public function darPrecioVenta(){
        $precio = parent::darPrecioVenta();
        $precio = ($precio * 1.5) * 1.1;

        return $precio;
    }
}