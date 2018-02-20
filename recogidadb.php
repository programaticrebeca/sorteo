<?php

//Recoger los datos del formulario.
$nombre=$_POST['nombre'];
$localidad=$_POST['localidad'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];

// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'sorteo', 'sorteopsw');
mysql_select_db('sorteo');

//Realizar una inserción de datos
$query = "INSERT INTO concursantes VALUES (NULL, '".$nombre."', '".$localidad."', '".$email."', '".$telefono."')";
$result = mysql_query($query);

if($result){
// Mostrar por pantalla el resultado correcto.
echo '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mensaje de confirmaci&oacute;n</title>
</head>
<body>
 <div>
<p>Te has inscrito en el sorteo correctamente.<br/>Gracias por participar.<br/></p>
<a href="index.html"><p>Volver</p></a>
</div>
</body>
</html>';
    }
    else {
// Mostrar por pantalla el resultado fallido.
echo '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mensaje de confirmaci&oacute;n</title>
</head>
<body>
 <div>
<p>Tu inscripción ha fallado, vuelve a intentarlo.<br/></p>
<a href="index.html"><p>Volver</p></a>
</div>
</body>
</html>';
};


// Cerrar la conexión
mysql_close($link);

?>