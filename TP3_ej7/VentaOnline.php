<?php
class VentaOnline extends Venta{
    private $descuento;

    public function __construct($fecha, $objPaqTur, $cantPersonas, $objCliente, $desc){
        parent::__construct($fecha, $objPaqTur, $cantPersonas, $objCliente);
        $this->descuento = $desc;
    }

    public function getDescuento(){
        return $this->descuento;
    }

    public function SetDescuento($desc){
        $this->descuento = $desc;
    }

    public function __toString(){
        $cadena = parent::__toString();
        $cadena .= "\nDescuento: ". $this->getDescuento() ."\n";
        return $cadena;
    }
}