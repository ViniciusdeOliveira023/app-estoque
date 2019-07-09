<?php

class BudgetStockClass implements BudgetStockInterface
{
    protected $budget;
    protected $stockId;
    protected $amount;
    protected $product;

    function setBudget(int $bget) : void
    {
        $this->budget = $bget;
    }

    function setStock(int $sId) : void
    {
        $this->stockId = $sId;
    }

    function setAmount(int $amt) : void
    {
        $this->amount = $amt;
    }

    function setProduct(ProductInterface $pdt) : void
    {
        $this->product = $pdt;
    }

    function getBudget() : int
    {
        return $this->budget;
    }


    function getStock() : int
    {
        return $this->stockId;
    }


    function getAmount() : int
    {
        return $this->amount;
    }


    function getProduct() : ProductInterface
    {
        return $this->total;
    }

}