<?php
    if (isset($_POST["inserir"]))
    {
        $a = addslashes($_POST["LastName"]);
        $b = addslashes($_POST["FirstName"]);
        $c = addslashes($_POST["AAddress"]);
        $d = addslashes($_POST["City"]);

        $comando = "INSERT INTO persons SET LastName = '$a', FirstName = '$b', AAddress = '$c', City = '$d'";

        /*A variavel dados tem que estar definido como objeto(POO).*/
        $dados->query($comando);

        header("Location: cadastro.php");
    }
?>