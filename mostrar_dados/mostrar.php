<?php

$comando = "SELECT * from persons WHERE codigo=2";

$resultado = $dados->query($comando);

$rows = $resultado->fetchAll(PDO::FETCH_ASSOC);

#print_r($rows)

foreach($rows as $usuario) {
    $LastName = $usuario['LastName'];
    $FirstName = $usuario['FirstName'];
    $AAddress = $usuario['AAddress'];
    $City = $usuario['City'];
}

?>