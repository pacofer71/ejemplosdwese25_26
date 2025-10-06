<?php 
class Persona{
    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    /*
    public function __construct()
    {
        $numero=func_num_args();
        if($numero==3){
            $this->instanciaTodo(func_get_arg(0), func_get_arg(1), func_get_arg(2));
        }
        if($numero==2){
            $this->instanciaDos(func_get_arg(0), func_get_arg(1));
        }
    }
    */
     public function __construct()
    {
        $datos=func_get_args();
        $numero=count($datos);
        if($numero==3){
            $this->instanciaTodo($datos[0], $datos[1], $datos[2]);
        }
        if($numero==2){
            $this->instanciaDos($datos[0], $datos[1]);
        }
    }

    private function instanciaTodo(string $nombre, string $apellidos, float $sueldo){
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->sueldo=$sueldo;
    }
    private function instanciaDos(string $nombre, string $apellidos){
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
    }
    


    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of sueldo
     */
    public function getSueldo(): float
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     */
    public function setSueldo(float $sueldo): self
    {
        $this->sueldo = $sueldo;

        return $this;
    }
}
$persona3=new Persona("Ana", "Gil", 1234.67);
var_dump($persona3);
$persona1=new Persona();
var_dump($persona1);
$persona2=new Persona("Juan", "Lopez");
var_dump($persona2);
