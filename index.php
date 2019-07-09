<?php

include_once('Interfaces/CategoryInterface.php');
include_once('Interfaces/ProductInterface.php');
include_once('Interfaces/StockInterface.php');
include_once('Interfaces/BudgetStockInterface.php');
include_once('Interfaces/BudgetInterface.php');

include_once('Classes/ProductClass.php');
include_once('Classes/CategoryClass.php');
include_once('Classes/StockClass.php');
include_once('Classes/BudgetStockClass.php');
include_once('Classes/BudgetClass.php');

$category = new CategoryClass;
$category->setLabel('Material de Construção');
$category->setActive(false);

$produto = new ProductClass;
$produto->setLabel('Martelo');
$produto->setCategory($category);

$produto = new ProductClass;
$produto->setLabel('Martelo');
$produto->setCategory($category);

$estoque = new StockClass;
$estoque->setPrice(25.5);
$estoque->setProduct($produto);

$OrcStock = new BudgetStockClass;
$OrcStock->setBudget();
$OrcStock->setStock();
$OrcStock->setAmount();
$OrcStock->setProduct();

$orcamento = new BudgetClass;
$orcamento->setNumber(0001);
$orcamento->setDate('08.07.2019');
$orcamento->setExpiration('08.07.2019');
$orcamento->setTotal();

print_r($produto);