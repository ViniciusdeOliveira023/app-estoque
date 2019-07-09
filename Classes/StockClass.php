<?php

class StockClass implements StockInterface
{
    protected $price;
    protected $product;
    protected $amount;

    function setProduct(ProductInterface $prodId) : void
    {
        $this->product = $prodId;
    }

    function setPrice(float $prc) : void
    {
        $this->price = $prc;
    }

    function getprice() : float
    {
        return $this->price;
    }

    function getProduct(): ProductInterface
    {
        return $this->product;
    }

    function getAmount() : int
    {
        return $this->amount;
    }

}
