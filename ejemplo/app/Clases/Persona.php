<?php namespace App\Clases;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author faranzabe
 */
class Persona {
    private $nombre;
    private $edad;
    
    function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setEdad($edad): void {
        $this->edad = $edad;
    }

        
    public function __toString() {
        return 'Persona: '.$this->nombre.' '.$this->edad.'<br>';
    }


}
