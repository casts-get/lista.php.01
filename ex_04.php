<?php

function gerarSenha($quantidade){

    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%&*?";

    $senha = "";

    for($i = 0; $i < $quantidade; $i++){

        $posicao = rand(0, strlen($caracteres)-1);

        $senha .= substr($caracteres, $posicao, 1);

    }

    return $senha;
}

echo gerarSenha(8);

?>