<?php

class BudegetClass implements BudgetInterface
{
    protected $number;
    protected $date;
    protected $expiration;
    protected $total;

    function setNumber(int $num) : void
    {
        $this->number = $num;
    }

    function setDate(string $dt) : void
    {
        $this->date = $dt;
    } 

    function setExpiration(string $exp) : void
    {
        $this->expiration = $exp;
    }

    function setTotal(float $ttl) : void
    {
        $this->total = $ttl;
    }

    function getNumber() : int
    {
        return $this->number;
    }

    function getDate() : string
    {
        return $this->date;
    }

    function getExpiration() : string
    {
        return $this->expiration;
    }

    function getTotal() : float
    {
        return $this->total;
    }

}