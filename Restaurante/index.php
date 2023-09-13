<?php

require_once("classItem.php");
require_once("classMenu.php");
require_once("classPedido.php");
require_once("classCliente.php");
require_once("classMesa.php");





$objCliente1 = new Cliente("Cliente 1");
$objCliente2 = new Cliente("Cliente 1");
$objCliente3 = new Cliente("Cliente 3");
$objCliente4 = new Cliente("Cliente 4");
$objCliente5 = new Cliente("Cliente 5");

/* echo $objCliente->getCliente(); */

$objItem1 = new Item("Cafe", 3000);
$objItem2 = new Item("Helado", 10000);
$objItem3 = new Item("Hamburguesa", 15000);
$objItem4 = new Item("Limonada", 5000);
$objItem5 = new Item("Pizza", 8000);

$menu= array(
    $objItem1->getPrecio()=>$objItem1->getNombre(),
    $objItem2->getPrecio()=>$objItem2->getNombre(),
    $objItem3->getPrecio()=>$objItem3->getNombre(),
    $objItem4->getPrecio()=>$objItem4->getNombre(),
    $objItem5->getPrecio()=>$objItem5->getNombre(),

);
$pedidos1= array(
    $objItem1->getNombre()=> $objItem1->getPrecio(),
    $objItem4->getNombre()=>$objItem4->getPrecio(),
    $objItem5->getNombre()=>$objItem5->getPrecio(),
    $objItem3->getNombre()=>$objItem3->getPrecio(),


);

$pedidos2= array(
    $objItem2->getNombre()=> $objItem2->getPrecio(),
    $objItem4->getNombre()=>$objItem4->getPrecio(),
   

);


$objMenu = new Menu($menu);
echo"<h1> Menu</h1>";
foreach ($objMenu->getMenu() as $identifi=>$valor){
    echo "<pre>";
    echo $identifi."<br>";
    echo $valor."<br>";
    echo "</pre>";
}

 
/* $objPedido = new Pedido($pedidos); 
echo"<h1> Pedido</h1>";
foreach ($objPedido->getPedido() as $identifi=>$valor){
    echo "<pre>";
    echo $valor."<br>";
    echo $identifi."<br>";
    echo "</pre>";
} 
 */



$objMesa1= new Mesa($pedidos1, 1);
echo"<h1> Pedido 1</h1>";
foreach ($objMesa1->getPedido() as $identifi=>$valor){
    echo "<pre>";
    echo $valor."<br>";
    echo $identifi."<br>";
    echo "</pre>";
} 

echo"<h1> Factura 1 </h1>";
$objPedido1 = new Pedido($pedidos1);
echo $objPedido1->getCalcularTotal();






$objMesa2= new Mesa($pedidos2, 2);
echo"<h1> Pedido2 </h1>";
foreach ($objMesa2->getPedido() as $identifi=>$valor){
    echo "<pre>";
    echo $valor."<br>";
    echo $identifi."<br>";
    echo "</pre>";
} 

echo"<h1> Factura2 </h1>";
$objPedido2 = new Pedido($pedidos2);
echo $objPedido2->getCalcularTotal();


/* $objMesa2= new Mesa($pedidos2,2);
$objMesa3= new Mesa($pedidos3,3);
$objMesa4= new Mesa($pedidos4,4);
$objMesa5= new Mesa($pedidos5,5);
$objMesa6= new Mesa($pedidos6,6);  */


$objMesa1 -> setAgregarCliente(array(
    $objCliente1,$objCliente2,$objCliente3
)
);
print_r($objMesa1 -> getAgregarCliente());
"<br>";
$objMesa2 -> setAgregarCliente(array(
    $objCliente2,$objCliente5
)
);
print_r($objMesa2 -> getAgregarCliente());


/* $mesa1 -> getPedido($pedidos); */






