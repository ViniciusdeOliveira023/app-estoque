<?php

interface ProductInterface
{
    function getCategory(): CategoryInterface;

    function setCategory(CategoryInterface $category);

    function getLabel() : string;

    function setLabel(string $lbl) : void;
}