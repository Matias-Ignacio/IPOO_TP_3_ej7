<?php
include_once 'Producto.php';
class ProductoReg extends Producto{

    private $descuento;

    public function __construct($cod, $desc, $stock, $iva, $pCom, $rubro, $descuento){
        parent::__construct($cod, $desc, $stock, $iva, $pCom, $rubro);
        $this->descuento = $descuento;
    }

    public function getDescuento(){
        return $this->descuento;
    }
    /**
     * Retorna el precio de venta, (Compra * Ganacia) + (compra * Iva)
     * @return int
     */
    public function darPrecioVenta(){
        $precio = parent::darPrecioVenta();
        $precio = ($this->getDescuento() / 100 ) * $precio;

        return $precio;
    }
}