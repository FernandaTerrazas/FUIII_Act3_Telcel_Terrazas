<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['email']) >= 1 
	&& strlen($_POST['telefono']) >= 1) {
	    $name = trim($_POST['name']);
		$apellido = trim($_POST['apellido']);
	    $email = trim($_POST['email']);
		$telefono = trim($_POST['telefono']);
	    $consulta = "INSERT INTO `empleados`(`Id`, `Nombre`, `Apellido`, `E-mail`, `Telefono`)
		 VALUES (NULL,'$name','$apellido','$email','$telefono')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>