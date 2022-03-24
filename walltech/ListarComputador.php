<?php
        
        include "computador.php";
        $dados = Computador::ListarTodos();
        $json = json_encode($dados);
                header("Content_Type:aplication/json;charset=UTF-8");
                echo $json;