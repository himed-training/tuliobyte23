<?php

use PHPUnit\Framework\TestCase;
require 'src/Paciente.php';


final class PacienteTest extends TestCase{
    
    public function testPacienteEsValido()
    {
        $id = '115454';
        $nombre = 'Prueba Nombre';
        $apellido = 'Prueba Apellido';

        $objPaciente = new Paciente($id, $nombre, $apellido);
        $this->assertTrue($objPaciente->pacienteEsValido($id, $nombre, $apellido));
    } 
}
?>