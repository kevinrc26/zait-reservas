<?php
/**
 * Plugin Name: Zait - Redirección de Reservas
 * Version: 1.0.0
 * Description: Componente CI/CD 2: Redirige al cliente automáticamente a la plataforma de agendamiento tras un pago exitoso.
 * Author: Tu Nombre
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_filter( 'woocommerce_get_return_url', 'zait_redireccion_post_pago', 10, 2 );
function zait_redireccion_post_pago( $return_url, $order ) {
    // URL del botón "Reservar Cita" del Spa de Zait Sebastián
    $url_sistema_citas = 'https://fenixestrategiadigital.com'; 
    
    if ( $order ) {
        return $url_sistema_citas;
    }
    return $return_url;
}
