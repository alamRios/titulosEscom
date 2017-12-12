<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tabla</title>

<link rel="stylesheet" type="text/css" href="fontAwesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../css/hola.css">
<script src="js/jquery-3.2.1.min.js"></script>

<script src="js/index.js"></script>
</head>
	<body>
	<center>
		<table>
		<thead>
			<tr>
			    <th colspan="1"><a href="regist.php">Nuevo</a></th>
				<th colspan="5">Listado del personal</th>
		    </tr>
	     </thead>
			
			<tbody>
			<tr>
				<td>Id</td>
				<td>Tipo</td>
				<td>Cargo</td>
				<td>Nombre</td>
				<td colspan="2">Operaciones</td>
				
				
				</tr>
			
			<?php
				include("conexion.php");
				$query="SELECT * FROM personal";
				$resultado=$conexion->query($query);
				while($row=$resultado->fetch_assoc()){
				
				?>
				
				<tr>
				<td><?php echo $row['idpersonal']; ?></td>
				<td><?php echo $row['personal_titulo']; ?></td>
				<td><?php echo $row['personal_puesto']; ?></td>
				<td><?php echo $row['personal_nombre']; ?></td>
					<td><a href="modificar.php?idpersonal=<?php echo $row['idpersonal']; ?>">Modificar</a></td>
					<td><a href="eliminar.php?idpersonal=<?php echo $row['idpersonal']; ?>">Eliminar</a></td>
				
				</tr>
				<?php
				}
					?>
				
				
			
			</tbody>
		
		
		</table>
		
		
		
		
		</center>
	
	
	
	
	
	
	
	</body>

</html>