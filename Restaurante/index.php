<?php

require_once("classItem.php");
require_once("classMenu.php");
require_once("classPedido.php");
require_once("classCliente.php");

$objCliente = new Cliente("Paula");
echo $objCliente->getCliente();

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
$pedidos= array(

    $objItem1->getNombre()=> $objItem1->getPrecio(),
    $objItem2->getNombre()=>$objItem2->getPrecio(),
    $objItem3->getNombre()=>$objItem3->getPrecio(),
    $objItem4->getNombre()=>$objItem4->getPrecio(),
    $objItem5->getNombre()=>$objItem5->getPrecio(),

);


$objMenu = new Menu($menu);
echo"<h1> Menu</h1>";
foreach ($objMenu->getMenu() as $identifi=>$valor){
    echo "<pre>";
    echo $identifi."<br>";
    echo $valor."<br>";
    echo "</pre>";
}


$objPedido = new Pedido($pedidos); 
echo"<h1> Pedido</h1>";
foreach ($objPedido->getPedido() as $identifi=>$valor){
    echo "<pre>";
    echo $valor."<br>";
    echo $identifi."<br>";
    echo "</pre>";
}
echo $objPedido->getCalcularTotal();






