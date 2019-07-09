<?php

interface BudgetStockInterface
{
    function getBudget() : int;

    function setBudget(int $budget) : void;

    function getStock() : int;

    function setStock(int $stockId) : void;

    function getAmount() : int;

    function setAmount(int $amount) : void;

    function getProduct() : int;

    function setProduct(int $product) : void;
}