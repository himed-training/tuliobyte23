<?php
/* require "Fecha.php";
require "Paciente.php"; */

//require "../tests/FechaTest.php";

class Consulta{
	private $fecha;
	private $tipoPaciente;	

	public function __construct($tipoPaciente)
    {        
        $consultaFecha = date('dd/mm/yyyy');
        $this->fecha = new Fecha($consultaFecha);
        $this->tipoPaciente = $tipoPaciente;

    }

/*     public function getPacientePrueba(){
        $objFecha = new Fecha();
    	return $objFecha->fechaEsValida($fecha);
    } */

/*     public function getPaciente(){
    	return $this->objPaciente;
    } */

    /* public function getFechaConsulta($fechaConsulta){
    	return $this->;
    }
 */
/*     public function ConsultaEsValida()
    {
        $fecha = '10/01/2020';
        $objFecha = new Fecha($fecha);
    	return $objFecha->fechaEsValida($fecha);
    }  */


}
?>