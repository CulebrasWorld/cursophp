<?php

	$galletas = true;
	$hay_galletas;

	if($galletas == true){
		$hay_galletas = 'Hay galletas hoy';
	}
	else{
		$hay_galletas = 'No hay galletas hoy';
	}

	

	echo ("<html>");
	echo ("<head>");
	echo ("<title>Prueba echo</title>");
	echo ('<meta charset="utf-8">');
	echo ('<link rel="stylesheet" href="css/style.css?p2">');
	echo ("</head>");
	echo ("<body>");

	echo ("<div id='left' class='leftPart'>");
	
	echo ("<h1>Prueba de html medinate 'echo'</h1>");

	echo ("$hay_galletas<br/>");
	
	$A=5; $B=3; $C=-7; $D=5;
	$msg = '';

	$A == 5 ? $msg = 'A es 5<br/>' :  'A no es 5<br/>';
	echo $msg;

	$A<$B ? $msg = 'A es menor que B<br/>' : $msg = 'A es mayor que B<br/>';
	echo $msg;

	$B<$C ? $msg = '<B es menor que C<br/>' : $msg = 'B es mayor que C<br/>';
	echo $msg;

	$tipo = 'Rueda de camión';
	$grosor = 0.33;
	$diametro = 1.25;
	$marca = 'Kimashuki';

	if($diametro > 1.4){
		echo 'La rueda es de un vehiculo grande';
	}
	elseif ($diametro < 1.4) {
		echo 'La rueda es de un vehículo pequeño';
	}
	else{
		echo "no existe un tamaño de rueda válido";
	}

	echo "<br/>-----------------------------------------<br/>";

	$valor = 1;
	$resultado;

	switch ($valor) {
		case 1:
			$resultado = "El valor de es 1";
			break;
		case 2:
			$resultado = "El valor de es 2";
			break;
		case 3:
			$resultado = "El valor de es 3";
			break;
		case 4:
			$resultado = "El valor de es 4";
			break;
		default:
			$resultado = "El valor de no es ni 1 ni 2 ni 3 ni 4.";
			break;
	}

	echo "$resultado<br/>";
	echo "--------------------------------------------<br/>";

	echo "<h2>Concatenando cadenas</h2>";

	$cadena = "Tucán pico loco pica pero pica poco";

	$_1 = substr($cadena, 0,7);
	$_2 = substr($cadena, 7,5);
	$_3 = substr($cadena, 12,5);
	$_4 = substr($cadena, 17,5);
	$_5 = substr($cadena, 22,5);
	$_6 = substr($cadena, 27,5);
	$_7 = substr($cadena, 32,4);
	
	$result = $_1.$_2.$_3.$_4.$_5.$_6.$_7;
	echo $result;

	echo "<br/>--------------------------------------------<br/>";

	$i = 50;
	$limite = 500;

	while ( $i <= $limite) {
		
		$i = $i + 25;
		echo "$i, ";	
		
	}

	echo "<h2>Arrays</h2>";

	$coches = array(32, 11, 45, 22, 78, -3, 9, 66, 5);
	echo "$coches[5]<br/>";

	for ($i=0; $i < count($coches); $i++) { 
		echo "$coches[$i]<br/>";
	}

	echo "<h2>Matrices</h2>";

	

	$cursos['Nivel1']['Ingles'] = 1;
	$cursos['Nivel2']['Ingles'] = 6;
	$cursos['Nivel3']['Ingles'] = 3;
	$cursos['Nivel1']['Frances'] = 14;
	$cursos['Nivel2']['Frances'] = 19;
	$cursos['Nivel3']['Frances'] = 13;
	$cursos['Nivel1']['Chino'] = 8;
	$cursos['Nivel2']['Chino'] = 7;
	$cursos['Nivel3']['Chino'] = 4;
	$cursos['Nivel1']['Ruso'] = 3;
	$cursos['Nivel2']['Ruso'] = 2;
	$cursos['Nivel3']['Ruso'] = 1;

	echo $cursos['Nivel1']['Ingles']."&nbsp;&nbsp;&nbsp;".$cursos['Nivel1']['Frances']."&nbsp;&nbsp;&nbsp;".$cursos['Nivel1']['Chino']."&nbsp;&nbsp;&nbsp;".$cursos['Nivel1']['Ruso'];
	echo "<br/>";
	echo $cursos['Nivel2']['Ingles']."&nbsp;&nbsp;&nbsp;".$cursos['Nivel2']['Frances']."&nbsp;&nbsp;&nbsp;".$cursos['Nivel2']['Chino']."&nbsp;&nbsp;&nbsp;".$cursos['Nivel2']['Ruso'];
	echo "<br/>";
	echo $cursos['Nivel3']['Ingles']."&nbsp;&nbsp;&nbsp;".$cursos['Nivel3']['Frances']."&nbsp;&nbsp;&nbsp;".$cursos['Nivel3']['Chino']."&nbsp;&nbsp;&nbsp;".$cursos['Nivel3']['Ruso'];
	
	echo "<br/>";
	
	echo ("</div>");

	echo ("<div id='right' class='rightPart'>");

	echo "<h2>Cadenas de texto</h2>";

	$texto = 'Cuando el grajo vuela bajo...';

	echo str_replace('a', 'x',$texto).'<br/>';

	$texto = strtoupper($texto);
	echo $texto.'<br/>';

	$texto = strtolower($texto).'<br/>';
	echo "$texto";

	$cadena = 'comomolo';

	$miArray = count_chars ( $cadena, 1);
	echo "$cadena<br/>";

	foreach ($miArray as $indiceNum => $veces) {

  		 echo 'Letra: '.chr($indiceNum).' , encontrada '.  $veces.' veces<br/>';

	}

	echo "<br/>--------------------------------------------<br/>";
	echo "<h2>Horas y fechas</h2>";

	$time = time();
	echo date("d-m-Y (H:i:s)", $time).'<br/>';

	echo $time.'<br/>';

	echo '<br/>';
	echo '<br/>';
	echo '<br/>';

	echo ("<div class='calendar'>");
	echo ("  <div class='head'><span>Febrero 2018</span></div>");

	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");
	echo ("    <div class='dia'>1</div>");

	echo ("  </div>");



	echo ("</div>");


	echo ("</body>");
	echo ("</html>");



















?>