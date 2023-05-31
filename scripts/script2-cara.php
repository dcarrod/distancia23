<?php
/**
 * Este script contiene una clase Persona, su constructor y dos métodos de la clase.
 * @author Delia Cara Rodríguez - Despliegue aplicaciones web 2022/2023
 * @version 1.1.1
 */

 /**
  * Clase Persona que representa a una persona con un nombre.
  * @since 1.0.0
  */
class Persona{
    /**
     * @var string el nombre de la persona.
     */
    private $nombre;

    /**
     * Constructor de la clase Persona.
     * @param string $nombre el nombre de la persona.
     * @internal añadir en un futuro apellidos u otra información.
     * @since 1.0.0
     */
    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    /**
     * Método que obtiene el nombre de la persona.
     * @return string el nombre de la persona.
     * @since 1.0.0
     */
    public function getNombre(){
        return $this->nombre;
    }

    /**
     * Método para saludar (DEPRECATED).
     * @deprecated desde la versión 1.1.0 utiliza el método saludarFormal().
     * @since 1.0.0
     */
    public function saludar(){
        echo "¡Hey!, soy " . $this->nombre . ".";
    }

    /**
     * Método para saludar de manera formal.
     * @return string el saludo con el nombre de la persona.
     * @since 1.1.0
     */
    public function saludarFormal(){
        echo "Hola, me llamo " . $this->nombre . ", encantado de conocerle.";
    }
}

?>
