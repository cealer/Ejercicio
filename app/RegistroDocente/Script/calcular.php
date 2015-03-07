<?php

namespace RegistroDocente\Script;

class calcular{

	public function Cuotas($monto,$num){
		$cuotas=array(range(0,$num));
		for ($i=0; $i <$num ; $i++) { 
		$cuotas[$i]=$monto/$num;
	}
	return $cuotas;
	}

	public function Mes($IniciarMes,$num){
		$MaxMes=12;
		$pagoarray=(range(0,$num));
		for ($i=0; $i <$num ; $i++) { 
			
			if ($IniciarMes>$MaxMes) {
			$IniciarMes=1;
						}	
	
		$pagoarray[$i]=$IniciarMes;
		$IniciarMes=$IniciarMes+1;
	}
	return $pagoarray;
	}

	public function ImprimirMes($mes){
		switch ($mes) {
			case 1:
				return "Enero";
				break;
			case 2:
				return "Febrero";
				break;
			case 3:
				return "Marzo";
				break;
			case 4:
				return "Abril";
				break;
			case 5:
				return "Mayo";
				break;
			case 6:
				return "Junio";
				break;
			case 7:
				return "Julio";
				break;
			case 8:
				return "Agosto";
				break;
			case 9:
				return "Septiembre";
				break;
			case 10:
				return "Octubre";
				break;
			case 11:
				return "Noviembre";
				break;
			case 12:
				return "Diciembre";
				break;

			
			default:
				return "Mes no valido";
				break;
		}
	}
}