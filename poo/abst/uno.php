<?php
abstract class MetodoPago{
    protected float $cantidad;
    public function __construct(float $cantidad)
    {
        $this->cantidad=$cantidad;
    }
    abstract public function procesarPago(): string;

    public function formatearCantidad(): string{
        return number_format($this->cantidad, 2)." €";
    }
}
class PagoConTarjeta extends MetodoPago{
    public function procesarPago(): string
    {
        return "Procesando pago con tarjeta la cantidad de: ".$this->formatearCantidad().".";
        #return "Procesando pago con tarjeta la cantidad de: ".parent::formatearCantidad().".";
    } 
    //public function formatearCantidad(): string{
    //    return "METODO DE PAGO CON TARJETA";
    //}  
}
class PagoMetalico extends MetodoPago{
     public function procesarPago(): string
    {
        return "Procesando pago en metálico de la cantidad de: ".$this->formatearCantidad().".";
        #return "Procesando pago en metálico de la cantidad de: ".parent::formatearCantidad().".";
    }   
}
//---------------------------------------
$pagos=[
    new PagoConTarjeta(234.67),
    new PagoMetalico(1200)
];

foreach($pagos as $item){
    echo $item->procesarPago()."<br>";
}