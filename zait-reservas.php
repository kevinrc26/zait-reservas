<?php
/**
 * Plugin Name: Zait - Módulo Reservas (Título Automatizado)
 * Version: 1.2.0
 * Description: Modifica el título global de la pestaña del sitio web mediante Git.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_filter( 'pre_get_document_title', 'zait_cambiar_titulo_pestana', 9999 );
function zait_cambiar_titulo_pestana( $title ) {
    return "🌿 Spa Zait Sebastián | Pipeline Activo ✔️";
}
