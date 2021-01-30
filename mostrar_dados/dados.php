<?php
    require 'config.php';
    require 'mostrar.php';
?>

<form method="post">
    LastName
    <input type="text" value="<?php echo $LastName; ?>" /></br></br>
    FirstName
    <input type="text" value="<?php echo $FirstName; ?>"/></br></br>
    Address
    <input type="text" value="<?php echo $AAddress; ?>"/></br></br>
    City
    <input type="text" value="<?php echo $City; ?>"/></br></br>
</form>