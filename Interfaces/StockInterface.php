<?php

interface StockInterface
{
    function getprice() : float;

    function setPrice(float $price) : void;

    function getProduct(): ProductInterface;

    function setProduct(ProductInterface $product) : void;

    function getAmount() : int;
}