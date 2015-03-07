<?php
//Recibiendo Datos
$Nom = $_POST['Nom'];
$Dni = $_POST['Dni'];
$Monto= $_POST['Monto'];
$Cant=$_POST['CantiLetras'];;
$Inicio= strtolower($_POST['InicioPago']);
//Motrar Datos Obtenidos del usuario
echo "<br/>   Datos Obtenidos del Cliente: ";
echo "<br/>   El nombre del Cliente es: ". $Nom;
echo "<br/>   El dni del Cliente es   : ". $Dni;
echo "<br/>   El monto del Cliente es: ". $Monto;
echo "<br/>   La cantidad de letras del Cliente es: ". $Cant;
//Calculando las letras:
//Se crea un array con un rango de n letras solicitadas.
$array = array(range(0,$Cant));
//Se crea un array que contenga todos los meses.
$Meses= array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
//Contador que nos permite cambiar al sgte mes.
$IniciarMes=0;
//Obtener Con que mes se inicia.
for ($i = 0; $i <= 12; $i++) {
		if ($Meses[$i]==$Inicio) {
				$IniciarMes=$i;
		//Una vez encontrado el mes inicial se cierra el for.
				break;
}
}
for ($i = 0; $i < $Cant; $i++) {

			//Si el mes llega al maximo se reincia al primero.
   			if ($IniciarMes>=12) {
   				$IniciarMes=0;
   			}
   			//Dividimos la cantidad en "n" partes solicitadas:
   			$array[$i]=($Monto/$Cant);
   			//Se imprime El resultado final para cada mes.
   			echo "<br/>   Pago Mes de ".$Meses[$IniciarMes]. " " . $array[$i];
   			//Cambiamos al sgte mes.
   			$IniciarMes=$IniciarMes+1;
}
