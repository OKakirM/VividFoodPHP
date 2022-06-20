<?php
    if(!empty($_GET['pedido']))
    {
        include_once('conexao.php');

        $pedido = $_GET['pedido'];

        $sqlSelect = "SELECT *  FROM produtos WHERE pedido=$pedido";

        echo "$sqlSelect";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM produtos WHERE pedido=$pedido";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: removeproduto.php');
   
?>