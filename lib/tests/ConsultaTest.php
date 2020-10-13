<?php

use PHPUnit\Framework\TestCase;
require "src/Consulta.php";

final class ConsultaTest extends TestCase{

    public function testConsultaEsValida()
    {
        $fecha = "20/02/2020";
        $objFecha = new Fecha($fecha);
        return $this->assertTrue($objFecha->fechaEsValida($fecha));
    } 

} 

?> 