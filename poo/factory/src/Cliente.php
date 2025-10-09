<?php
class Cliente{
    /*
    public float $totalCompras;
    public function __construct(float $total)
    {
        $this->totalCompras=$total;
    }
    */
    public function __construct(public float $totalCompras)
    {
        
    }
    public function getPrecioFinal(float $descuento): float{
        return  $this->totalCompras*(1-($descuento/100));
    }

}