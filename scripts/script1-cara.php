<?php
/**
 * Este script contiene funciones para realizar operaciones matemáticas y manipulación de palabras.
 * @author Delia Cara Rodríguez DAW 22/23
 * @version 1.0.1
 */

 /**
  * Función que comprueba si un número es par.
  * @param integer $numero el número a comprobar.
  * @return bool true si el número es par, false si el número es impar.
  * @since 1.0.0
  */
function esPar($numero){
    return $numero % 2 == 0;
}

/**
 * Función que calcula el área de un círculo.
 * @param float $radio el dato conocido del círculo.
 * @return float $area área calculada del círculo.
 * @since 1.0.0
 * @link https://www.gaussianos.com/demostracion-sin-palabras-de-la-formula-para-calcular-el-area-de-un-circulo/
 */
function calcularAreaCirculo($radio){
    $area = pi() * $radio * $radio;
    return $area;
}

/**
 * Función que comprueba si una palabra es un palíndromo.
 * @param string $palabra palabra que se va a comprobar.
 * @return bool true si la palabra es un palíndromo, false si no lo es.
 * @since 1.0.0
 */
function esPalindromo($palabra){
    $palabraInvertida = strrev($palabra);
    return strtolower($palabra) === strtolower($palabraInvertida);
}

?>
