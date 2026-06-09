<?php
/**
 * Plugin Name: Zait - Redirección de Reservas (Amelia Free)
 * Version: 1.0.0
 * Description: Componente CI/CD 2: Redirige automáticamente al paciente tras agendar con éxito una cita en el formulario de Amelia.
 * Author: Tu Nombre
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_footer', 'zait_redireccion_amelia_js' );
function zait_redireccion_amelia_js() {
    ?>
    <script type="text/javascript">
    window. AmeliaActions = window.AmeliaActions || {};
    window.AmeliaActions.onBookingSuccessful = function (obj) {
        // REEMPLAZA esta URL con la página a donde quieres enviar al paciente al terminar su reserva
        window.location.href = "https://fenixestrategiadigital.com";
    };
    </script>
    <?php
}
