<?php

class MCCategoryClass implements CategoryInterface
{
    protected $label = "Material de Construção"; // atributo
    protected $active;

    function getLabel(): string // metodo
    {
        return strtoupper($this->label);
    }

    function getActive(): boolean
    {
        return $this->active;
    }

    function setLabel(string $l): void
    {
        $this->label = $l;
    }

    function setActive(bool $act = true): void
    {        
        $this->active = $act;
    }

    function get(): CategoryInterface
    {
        return $this;
    }
}
