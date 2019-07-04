<?php
    $estoque = [
        ['Produto1' => 'tijolo', 'quant' => 5000],
        ['Produto2' => 'telha', 'quant' => 5000],
        ['Produto3' => 'cimento', 'quant' => 1000],
        ['Produto4' => 'prego', 'quant' => 1000],
        ['Produto5' => 'lajota', 'quant' => 3000],
        ['Produto6' => 'argamassa', 'quant' => 500],
        ['Produto7' => 'azulejo', 'quant' => 1000],
        ['Produto8' => 'martelo', 'quant' => 200],
    ];
    $orcamento = [
        ['produto' => 'tijolo', 'preco' => 10, 'quantidade' => 5],
        ['produto' => 'telha', 'preco' => 10, 'quantidade' => 7],
        ['produto' => 'cimento', 'preco' => 10, 'quantidade' => 9],
        ['produto' => 'argamassa', 'preco' => 10, 'quantidade' => 6],
        ['produto' => 'prego', 'preco' => 10, 'quantidade' => 3],
    ];

    if ($_POST){
        $form['produto'] = $_POST['produto'];
        $form['preco'] = $_POST['preco'];
        $form['quantidade'] = $_POST['quantidade'];
        array_push($orcamento, $form);
    }
    
    function total($preco, $quantidade) : int
    {
        return $preco*$quantidade;
    }
?>