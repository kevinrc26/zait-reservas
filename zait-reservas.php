<?php
/**
 * Plugin Name: Zait - Módulo Reservas (Fondo de Página)
 * Version: 1.1.0
 * Description: Cambia el fondo de la página de reservas de forma global.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_head', 'zait_cambiar_fondo_spa' );
function zait_cambiar_fondo_spa() {
    ?>
    <style type="text/css">
        /* Cambia el fondo del cuerpo de la página a un color crema relajante */
        body.page-template-default, .site-content {
            background-color: #red !important;
        }
    </style>
    <?php
}
