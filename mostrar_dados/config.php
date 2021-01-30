<?php

$conexao = "mysql:dbname=test;host=localhost";
$usuario_do_banco_de_dados = "root";
$senha_do_banco_de_dados = "";

try
{
    $dados = new PDO(
        $conexao,
        $usuario_do_banco_de_dados,
        $senha_do_banco_de_dados
    );
}
catch(PDOException $excessao)
{
    echo "Falhou: ".$excessao->getMessage();
}

?>