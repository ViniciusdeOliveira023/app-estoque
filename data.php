<?php

include('estoque.php');

if ($_POST){
    $form['produto'] = $_POST['produto'];
    $form['preco'] = $_POST['preco'];
    $form['quantidade'] = $_POST['quantidade'];
    
}
