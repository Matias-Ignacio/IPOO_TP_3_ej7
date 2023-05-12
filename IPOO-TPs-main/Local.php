<?php
include_once 'Producto.php';
include_once 'ProductoReg.php';
include_once 'ProductoImp.php';
class Local{
    private $colProductosReg;
    private $colProductosImp;
    private $colRubros;
    private $colClientes;
    private $colVentas;

    public function __construct($colProR, $colProI, $colRu, $colCli, $colVentas){
        $this->colProductosReg = $colProR;
        $this->colProductosImp = $colProI;
        $this->colRubros = $colRu;
        $this->colClientes = $colCli;
        $this->colVentas;
    }

    public function getColProductosReg(){
        return $this->colProductosReg;
    }
    public function getColProductosImp(){
        return $this->colProductosImp;
    }
    public function getColRubros(){
        return $this->colRubros;
    }
    public function getColClientes(){
        return $this->colClientes;
    }
    public function getColVentas(){
        return $this->colVentas;
    }

    public function setColProductosReg($col){
        $this->colProductosReg = $col;
    }

    public function setColProductosImp($col){
        $this->colProductosImp = $col;
    }
    public function setColRubros($col){
        $this->colRubros = $col;
    }
    public function setColClientes($col){
        $this->colClientes = $col;
    }

    public function setColVentas($col){
        $this->colVentas = $col;
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

    /**
     * Retorna la suma de todos los costos de los productos de la tienda
     * teniendo en cuenta el stock
     * @return int 
     */
    public function retornarCostoProductoLocal(){
        $costoTotal = 0;
        $coleccionProductos = $this->getColProductos();
        foreach ($coleccionProductos as $i => $objProducto){
            $costoTotal += $objProducto->getPrecioCompra() * $objProducto->getStock();
        }
        return $costoTotal;
    }

    /**
     * Busca el producto mas economico por rubro
     * @param Rubro $rubro
     * @return Producto
     */
    public function productoMasEconomico($rubro){
        $prodMasEco = null;
        $precioMasBajo = 1000000;
        $precio = 0;
        $colRu = $this->getColRubros();
        $colProd = $this->getColProductosImp();
        for ($i = 0; $i < 2; $i++){
            for ($j = 0; $j < count($colProd); $j++){
                if ($colProd[$j]->getRubro == $rubro){
                    $precio = $colProd[$j]->darPrecioVenta();
                    if ($precio < $precioMasBajo){
                        $precioMasBajo = $precio;
                        $prodMasEco = $colProd[$j];
                    }
                }
            }
            $colProd = $this->getColProductosReg();
        }
        return $prodMasEco;
    }

    /**
     * Informa los productos mas vendidos en el año igresado por parametro
     * @param int $anio
     * @param int $cant
     * @return array Producto
     */
    public function informarProductosMasVendidos($anio, $cant){
        $colProMasVendidos = array();
        $colVentas = $this->getColVentas();
        for ($c = 0; $c < $cant; $c++){

            for ($i = 0; $i < count($colVentas); $i++){
                if (substr($colVentas[$i]->getFecha(), -4) == $anio){
            
                }
            }
        }

        return $colProMasVendidos;
    }

    /**
     * Retorna el promedio de ventas de productos importados
     */
    public function promedioVentasImportados(){

    }

    /**
     * 
     */
    public function informarConsumoCliente($tipoDoc, $numDoc){
        
    }
}