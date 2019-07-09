<?php

//banco de dados
$estoque = [
    ['nome' => 'tijolo',     'preco' => 0, 'qtd' => 5000],
    ['nome' => 'telha',      'preco' => 0, 'qtd' => 5000],
    ['nome' => 'cimento',    'preco' => 0, 'qtd' => 1000],
    ['nome' => 'prego',      'preco' => 0, 'qtd' => 1000],
    ['nome' => 'lajota',     'preco' => 0, 'qtd' => 3000],
    ['nome' => 'argamassa',  'preco' => 0, 'qtd' => 500],
    ['nome' => 'azulejo',    'preco' => 0, 'qtd' => 1000],
    ['nome' => 'martelo',    'preco' => 0, 'qtd' => 200],
];

function busca($parametro)
{
    global $estoque;
    foreach ($estoque as $item) {
        $resultado =  array_search($parametro, $item);
        return $resultado;
    }
}

function buscaPorProduto($produto)
{
    busca($produto);
}

function buscaPorQuantidade($quantidade)
{
    busca($quantidade);
}

function buscaPorPreco($preco)
{
    busca($preco);
}

function adicionaProduto(array $produto)
{
    global $estoque;
    
    if(is_null($produto['nome'])){
        return false;
    }

    if(is_null($produto['preco'])){
        $produto['preco'] = 0;
    }

    if(is_null($produto['qtd'])){
        $produto['qtd'] = 0;
    }

    array_push($estoque, $produto);

}

function editarProduto($id, array $produto)
{
    global $estoque;

    if(!is_null($produto['nome'])){
        $estoque[$id-1]['nome'] = $produto['nome'];
    }

    if(!is_null($produto['preco'])){
        $estoque[$id-1]['preco'] = $produto['preco'];
    }

    if(!is_null($produto['qtd'])){
        $estoque[$id-1]['qtd'] = $produto['qtd'];
    }
}

function removerProduto($id)
{
    global $estoque;
    unset($estoque[$id-1]);
}
