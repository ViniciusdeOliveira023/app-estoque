<?php

interface CategoryInterface
{
    // set -> entrada || input
    // get -> saida   || output

    function getLabel(): string;

    function getActive(): boolean;

    function setLabel(string $label): void;

    function setActive(bool $active): void;

    function get(): CategoryInterface;

}