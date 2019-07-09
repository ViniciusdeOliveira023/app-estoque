<?php

interface BudgetInterface
{
    function getNumber() : int;

    function setNumber(int $number) : void;

    function getDate() : string;

    function setDate(string $date) : void;

    function getExpiration() : string;

    function setExpiration(string $expiration) : void;

    function getTotal() : float;

    function setTotal(float $total) : void;
}