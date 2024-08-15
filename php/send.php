<? php
include("php/conexion.php");
if (isset($_POST['send'])) {
	if (
		strlen($_POST['name'])>=1 &&
		strlen($_POST['email'])>=1 &&
		strlen($_POST['phone'])>=1 
	) {
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$phone = trim($_POST['phone']);
		$fecha = trim("d/m/y");
		$consulta ="INSERT INTO dato(nombre, contraseña, email, telefono, fecha) VALUES('$name','$password','$email','$phone','$fecha')";
		$resultado = mysqli_connect($conex,$consulta);
		if ($consulta) {
		?>	
			<h2 class="text">Su mensaje a sido enviado</h2>
		<? php
		}else{
			?>
			<h3 class="error">Verifique su formulario</h3>
			<? php
		}
	}else{
		?>
		<h3 class="error">Llenar todos los campos</h3>
	}
}
?>
