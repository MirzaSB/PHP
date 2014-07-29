<?php

interface Chargeable {
    public function getPrice();
}

class ShopProduct implements Chargeable {
    //...
    public function getPrice() {
        return($this->price - $this->discount);
    }
    //...
}

?>