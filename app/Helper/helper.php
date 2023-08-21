<?php
function cartArray(){
    $cartcollection=\Cart::getContent();
    return $cartcollection->toArray();
}