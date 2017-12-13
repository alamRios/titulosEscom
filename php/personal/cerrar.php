<!doctype html>
<html>
<head>
<<<<<<< HEAD
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tabla</title>
<link rel="stylesheet" type="text/css" href="../../css/estilospersonal.css">
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../js/index.js"></script>
=======
<meta charset="utf-8">
<title>Tabla</title>

<link rel="stylesheet" type="text/css" href="fontAwesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../css/hola.css">
<script src="js/jquery-3.2.1.min.js"></script>

<script src="js/index.js"></script>
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
</head>
	<body>
	<center>
		<table>
<<<<<<< HEAD
		<thead class="indigo">
=======
		<thead>
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
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
<<<<<<< HEAD
				<td>Grado</td>
=======
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
				<td>Nombre</td>
				<td colspan="2">Operaciones</td>
				
				
				</tr>
			
			<?php
				include("conexion.php");
<<<<<<< HEAD
				
=======
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
				$query="SELECT * FROM personal";
				$resultado=$conexion->query($query);
				while($row=$resultado->fetch_assoc()){
				
				?>
				
				<tr>
<<<<<<< HEAD
				<td><?php echo utf8_encode($row['idpersonal']); ?></td>
				<td><?php echo utf8_encode($row['personal_escuela']); ?></td>
				<td><?php echo utf8_encode($row['personal_puesto']); ?></td>
				<td><?php echo utf8_encode($row['personal_titulo']); ?></td>
				<td><?php echo utf8_encode($row['personal_nombre']); ?></td>
=======
				<td><?php echo $row['idpersonal']; ?></td>
				<td><?php echo $row['personal_titulo']; ?></td>
				<td><?php echo $row['personal_puesto']; ?></td>
				<td><?php echo $row['personal_nombre']; ?></td>
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
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