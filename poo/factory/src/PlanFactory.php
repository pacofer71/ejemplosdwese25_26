<?php
class PlanFactory{
    public function getPlan(Cliente $cliente): Plan{
        return match(true){
            $cliente->totalCompras>=20000 => new PlanOro,
            $cliente->totalCompras>=15000 => new PlanPlata,
            $cliente->totalCompras>=10000 => new PlanBronce,
            default => new PlanStarter
        };
    }
}
