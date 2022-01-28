<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>POO en PHP</h2>
   <?php
   echo"<h3>Clases y objetos</h3>";
   require('./clases/clase1.php');
   require('./clases/cliente.php');
   require('./clases/productos.php');
   $objeto=new ClasePropiedades();//instanciar
   echo $objeto->ciudad;

   echo"<br>";
    $cliente1=new Cliente("indra",5,true);
    echo $cliente1->getnombre();
    //modifica el nombre del cliente
    $cliente1->setNombre("Repsol");
    //consulta el nombre de nuevo para ver el cambio
    echo"<br>";
    echo $cliente1->getNombre();

    echo"<br>";
    $producto1=new Producto(100,"camisa",5,7.99);
    echo $producto1->getnombre();
    $producto1->setprecio(7.95);
    echo"<br>";
    echo $producto1->getprecio();
    echo"<br>";
    echo $producto1->total();
   ?>
</body>
</html>