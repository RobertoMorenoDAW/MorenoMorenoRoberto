<?php
/**
 * Proyecto de práctica para el módulo DAW.
 *
 * @package TareaFFEOE
 * @author Roberto Moreno Moreno
 * @version 1.0.0
 */

/**
 * Calcula el área de un rectángulo.
 *
 * @param float $base La medida de la base.
 * @param float $altura La medida de la altura.
 * @return float El área calculada.
 */
function calcularAreaRectangulo($base, $altura) {
    return $base * $altura;
}

/**
 * Genera un saludo para el usuario.
 *
 * @param string $nombre Nombre del usuario.
 * @return string Saludo formateado.
 */
function generarSaludoUsuario($nombre) {
    return "Bienvenido, " . $nombre;
}

/**
 * Función de mantenimiento del sistema.
 *
 * @internal Esta anotación y función solo son visibles para los desarrolladores.
 * @return void
 */
function funcionDeMantenimientoInterno() {
    // Lógica interna oculta al público
    
}
?>