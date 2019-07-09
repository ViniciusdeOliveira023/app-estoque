<?php
    include "dados.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>ORÇAMENTO</title>
        <meta charset="UTF-8">
        <style>
            table {
                background: #666;
                color: #fff;
                border: 1px solid #111; 
                }
        </style>
    </head>
    <body>
        <div>
            <h2>ORÇAMENTO</h2>
             <table>
                 <tr>
                     <td>Item</td>
                     <td>Produto</td>
                     <td>Preço</td> 
                     <td>Quantidade</td>
                     <td>Valor Total</td>
                 </tr>
                <?php
                    foreach ($orcamento as &$item){
                        $total = total($item['preco'], $item['quantidade']);
        
                        echo "<tr>
                            <td></td>
                            <td>{$item['produto']}</td>
                            <td>{$item['preco']}</td> 
                            <td>{$item['quantidade']}</td>
                            <td>{$total}</td>
                        </tr>";
                    }
                ?>
             </table>
             <br/>
           <a href="index.php">Inserir novo produto</a>
        </div> 
    </body>
</html>