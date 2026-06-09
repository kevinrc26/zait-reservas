<?php
/**
 * Plugin Name: Zait - Personalización Visual del Spa (Amelia)
 * Version: 1.0.1
 * Description: Controla los estilos visuales, botones y fuentes de la agenda de Amelia mediante Git y WP Pusher.
 * Author: Zait Sebastián Spa
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

// Inyectar personalizaciones de CSS directo en la página del Spa
add_action( 'wp_head', 'zait_estilos_personalizados_spa' );

function zait_estilos_personalizados_spa() {
    ?>
    <!-- Estilos controlados por Git para la agenda Amelia del Spa -->
    <style type="text/css">
        
        /* 1. CAMBIO DE COLOR DEL BOTÓN CONTINUAR DE AMELIA */
        /* Cambia el color por defecto de Amelia para que combine con el estilo de tu Spa */
        .am-button-wrapper button.el-button--primary,
        .amelia-app-id button.el-button--primary {
            background-color: #a47c5c !important; /* Reemplaza por el color exacto de tu logo (Ej: Marrón/Dorado) */
            border-color: #a47c5c !important;
            border-radius: 25px !important; /* Botones más redondeados y elegantes para Spa */
            transition: all 0.3s ease;
        }

        /* Efecto al pasar el mouse por encima (Hover) */
        .am-button-wrapper button.el-button--primary:hover,
        .amelia-app-id button.el-button--primary:hover {
            background-color: #8c6646 !important;
            border-color: #8c6646 !important;
            transform: scale(1.02); /* Pequeño efecto de expansión */
        }

        /* 2. MEJORAR LOS CAMPOS DE TEXTO (INPUTS) */
        /* Hace que las cajas donde el cliente escribe su nombre o alergias sean más finas */
        .amelia-app-id .el-input__inner,
        .amelia-app-id .el-textarea__inner {
            border: 1px solid #e0e0e0 !important;
            border-radius: 8px !important;
            font-family: inherit !important;
        }
        
        /* Resaltado cuando el cliente hace clic para escribir */
        .amelia-app-id .el-input__inner:focus,
        .amelia-app-id .el-textarea__inner:focus {
            border-color: #a47c5c !important;
        }

        /* 3. BORRAR SOMBRAS EXCESIVAS DEL CONTENEDOR */
        /* Hace que el formulario de Amelia se integre limpiamente con el fondo de Blossom Spa */
        div[id^="amelia-step-booking"] {
            box-shadow: 0px 10px 30px rgba(0,0,0,0.05) !important;
            border-radius: 15px !important;
        }

    </style>
    <?php
}
