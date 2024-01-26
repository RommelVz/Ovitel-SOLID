<?php 
	require_once '../../admin/class.php';
	require_once '../../admin/constante.php';
	
	// Crear una instancia de la clase "constante" para realizar la conexión a la base de datos
	$class = new constante($host, $username, $password, $database);
	$class->consulta();

	//LLena combo proveedor
	if (isset($_POST['llenar_proveedor'])) {
		$resultado = $class->consulta("SELECT id, empresa FROM proveedores WHERE estado = '1'");
		print'<option value="">&nbsp;</option>';
		while ($row = $class->fetch_array($resultado)) {
			print '<option value="'.$row['id'].'">'.$row['empresa'].'</option>';
		}
	}
	// fin
?>