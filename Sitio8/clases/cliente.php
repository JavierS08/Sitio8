<?php

class Cliente{
    public String $nombre;
    public int $pedidos;
    public bool $activo;

    public function __construct(string $dato, int $compras, bool $activo){
        $this->nombre=$dato;
        $this->pedidos=$compras;
        $this->activo=$activo;

    }


    public function setNombre(string $nombre):void{
        $this->nombre=$nombre;
    }

    public function setPedidos(int $pedidos):void{
        $this->pedidos=$pedidos;
    }

    public function setActivo(bool $activo):void{
        $this->activo=$activo;
    }

    public function getNombre():string{
       return $this->nombre;
    }

    public function getPedidos():int{
        return $this->pedidos;
    }

    public function getActivo():bool{
        return $this->activo;
    }
}
?>