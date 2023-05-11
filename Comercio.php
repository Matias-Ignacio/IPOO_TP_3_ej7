<?php
include_once 'Producto.php';
include_once 'ProductoReg.php';
include_once 'ProductoImp.php';
class Comercio{
    private $colProductos;
    private $colRubros;
    private $colClientes;

    public function __construct($colPro, $colRu, $colCli){
        $this->colProductos = $colPro;
        $this->colRubros = $colRu;
        $this->colClientes = $colCli;
    }

    public function getColProductos(){
        return $this->colProductos;
    }
    public function getColRubros(){
        return $this->colRubros;
    }
    public function getColClientes(){
        return $this->colClientes;
    }

    public function setColProductos($col){
        $this->colProductos = $col;
    }
    public function setColRubros($col){
        $this->colRubros = $col;
    }
    public function setColClientes($col){
        $this->colClientes = $col;
    }

    public function __toString(){
        $cadena = "";
        return $cadena;
    }

    /**
     * Buscar un producto con el codigo de barra
     * @param Producto $obj
     * @return int
     */
    public function buscarObjProducto($obj){
        $coleccion = $this->getColProductos();
        $codigo = 0;
        $i = 0;
        while (($codigo == 0) && ($i < count($coleccion))){
            if ($obj->getCodigoBarra() == $coleccion[$i]->getCodigoBarra()){
                $codigo = $obj->getCodigoBarra();
            }
            $i++;
        }
        return $codigo;
    }

        /**
     * Buscar un producto con el codigo de barra
     * @param int
     * @return Producto $obj
     */
    public function buscarCodProducto($codigo){
        $objProducto = null;
        $coleccion = $this->getColProductos();
        $i = 0;
        while (($objProducto == null) && ($i < count($coleccion))){
            if ($codigo == $coleccion[$i]->getCodigoBarra()){
                $objProducto = $coleccion[$i];
            }
            $i++;
        }
        return $objProducto;
    }

    /**
     * Crea un producto y lo Incorpora a la coleccion del local
     * @param Producto $objProducto
     * @return boolean
     */
    public function incorporarProductoLocal($objProducto){
        $codigo = 0;
        $exito = false;
        $coleccion = $this->getColProductos();
        $codigo = $this->buscarObjProducto($objProducto);
        if ($codigo == 0){
            $coleccion[] = $objProducto;
            $this->setColProductos($coleccion);
            $exito = true;
        }
        return $exito;
    }

    /**
     * Recibe el codigo de un producto t retorna el precio
     * @param int $codigo
     * @return int $precio
     */
    public function retornarImporteProducto($codigo){
        $precio =0;
        $precio = $this->buscarCodProducto($codigo)->darPrecioVenta();
        return $precio;
    }

}