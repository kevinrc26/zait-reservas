<?php
/**
 * Plugin Name: Zait - Módulo Reservas (Estilos Inyectados)
 * Version: 1.0.6
 * Description: Rompe el bloqueo de Amelia y cambia el color del botón Continuar.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_head', 'zait_estilos_reservas_spa', 9999 );
function zait_estilos_reservas_spa() {
    ?>
    <style type="text/css">
        /* 1. SELECCIÓN ULTRAAGRESIVA PARA AMELIA */
        html body .am-button-wrapper button.el-button--primary,
        html body .amelia-app-id button.el-button--primary,
        html body [class*="am-"] button,
        html body .el-button--primary,
        #amelia-app button {
            background-color: #a47c5c !important; 
            border-color: #a47c5c !important;
            color: #ffffff !important;
            border-radius: 25px !important;
        }

        /* 2. EFECTO AL PASAR EL MOUSE (HOVER) */
        html body .am-button-wrapper button.el-button--primary:hover,
        html body .amelia-app-id button.el-button--primary:hover,
        html body [class*="am-"] button:hover,
        html body .el-button--primary:hover,
        #amelia-app button:hover {
            background-color: #8c6646 !important;
            border-color: #8c6646 !important;
        }
    </style>
    <?php
}
