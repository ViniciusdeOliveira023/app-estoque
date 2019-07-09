<?php

$orcamento = [];


// function add($form, $estoque)
// {
//     if ($form <= $estoque){
//         array_push($orcamento, $form);
//         $estoque -= $form['quantidade'];
//     }else{
//         echo "ERROR";
//     }
// }

function adicionaItem()
{
    $quantidade = buscaPorQuantidade($form);
    if ($form <= $quantidade){
        array_push($orcamento, $form);
    }
}

function editarItem()
{   
    
}

function removerItem()
{
    # code...
}

function total($preco, $quantidade) : float
{
    return $preco*$quantidade;
}