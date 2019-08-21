
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Patrimonios Web</title>
</head>
<body>
	<center>	
		<img src="/img/marca_bolivia.png">
		<h2>Hola {{ $name }}, bienvenido al Registro de Patrimonios </h2>
		<p>Por Favor confirma tu correo electrónico con este mail.</p>
		<p>Simplemente debes hacer click en el siguiente enlace:</p>

		<a href="{{url('activacion/'.$code)}}"> Click para confirmar tu correo</a>
	</center>

</body>
</html>

