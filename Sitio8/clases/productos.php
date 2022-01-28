<?php
class Producto{
    public int $id;
    public String $nombre;
    public int $unidades;
    public float $precio;
    protected float $iva=1.21;
    
    public function __construct(int $id, string $nombre, int $unidades,float $precio,){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->unidades=$unidades;
        $this->precio=$precio;

    }
    
public function setId(int $id):void{
    $this->id=$id;
}
public function setNombre(string $nombre):void{
    $this->nombre=$nombre;
}

public function setUnidades(int $unidades):void{
    $this->unidades=$unidades;
}

public function setprecio(float $precio):void{
    $this->precio=$precio;
}

public function getId():int{
    return $this->id;
}

public function getNombre():string{
   return $this->nombre;
}

public function getUnidades():int{
    return $this->unidades;
}

public function getprecio():float{
    return $this->precio;
}

public function total():string{
    return "El total de la factura es ".($this->unidades*$this->precio*$this->iva)."€";
}
}
