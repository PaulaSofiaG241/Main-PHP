<?php

class Menu {
    public $arrayItems;
    

    function __construct(array $menuItems) {
    $this->arrayItems = $menuItems;
    

}
    function getMenu() {
    return $this->arrayItems;
}

}