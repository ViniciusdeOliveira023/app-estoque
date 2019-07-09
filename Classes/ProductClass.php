<?php

class ProductClass implements ProductInterface
{
    protected $category;
    protected $label;

    public function setLabel(string $lbl) : void
    {
        $this->label = $lbl;
    }

    public function setCategory(CategoryInterface $cat)
    {
        $this->category = $cat;
    }

    public function getCategory(): CategoryInterface
    {
        return $this->category;
    }

    public function getLabel() : string
    {
        return $this->label;
    }

}
