<?php
/*
Plugin Name: Inversor Plugin
Description: Este es un plugin es un Cotizador.
Version: 1.0
Author: Juan Sebastian Bautista Diaz - Harry
*/

// Función para cargar scripts y estilos
// función para el menú
function inversor_menu() {
    // Ruta de la imagen
    $icon_path = plugin_dir_url( __FILE__ ).'imagenes/icono.png';

    // Agrega el menú con la imagen como icono
    add_menu_page(
        'inversor plugin',
        'inversor',
        'manage_options',
        'Inversor-plugin',
        'inversor_admin_page',
        $icon_path, // Ruta de la imagen
        99
    );
}
add_action('admin_menu', 'inversor_menu');

// funció para la muestra del BackOffice
function inversor_admin_page() {

    echo '<h1> HOLA ESTO ES EL BACKOFFICE </h1>';

    // Lee y devuelve el contenido HTML del archivo
    //include(plugin_dir_path(__FILE__) . 'templates/pokedex-template.php');

    //Prueba para realizar un formulario
     /*// Verifica los permisos del usuario actual antes de mostrar la página
     if (!current_user_can('manage_options')) {
        wp_die('Acceso denegado.');
    }

    // Comprueba si se ha enviado un formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Procesa y guarda la configuración aquí si tienes un formulario
        // Por ejemplo, puedes guardar opciones en la base de datos utilizando update_option()
    }

    // Muestra la página de configuración
    ?>
    <div class="wrap">
        <h2>Configuración de Pokedex</h2>
        <form method="post" action="">
            <!-- Aquí agrega los elementos del formulario que necesites -->
            <label for="opciones_pokedex">Opciones de Pokedex:</label>
            <input type="text" id="opciones_pokedex" name="opciones_pokedex" value="<?php echo esc_attr(get_option('opciones_pokedex')); ?>" />

            <input type="submit" class="button-primary" value="Guardar cambios" />
        </form>
    </div>
    <?php*/
}

/*
// Incluir las funciones register y enqueue fuera de la función pokedex_admin_page
function agregar_scripts() {
    // Registrar el script de SweetAlert2 desde CDN
    wp_register_script('sweet-alert', 'https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.all.min.js', array(), '11.0.17', true);
    
    // Registrar el script main.js (asegúrate de que la ruta sea correcta)
    wp_register_script('main', get_template_directory_uri() . '/src/main.js', array(), '1.0', true);
    
    // Registrar el script 'secrets.js' si es necesario
    wp_register_script('secrets', get_template_directory_uri() . '/src/secrets.js', array(), '1.0', true);
}

// Llamar a la función agregar_scripts en el hook 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'agregar_scripts');

function cargar_scripts(){
    // Cargar los scripts registrados
    wp_enqueue_script('sweet-alert');
    wp_enqueue_script('main');
    wp_enqueue_script('secrets'); // Si deseas cargar este script
}

// Llamar a la función cargar_scripts en el hook 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'cargar_scripts');

// Agregar shortcode
function pokedex_shortcode($atts) {
    // Lee y devuelve el tem contenido HTML
    ob_start();
    include(plugin_dir_path(__FILE__) . 'templates/pokedex-template.php');
    return ob_get_clean();
}
add_shortcode('pokedex', 'pokedex_shortcode');

// Cargar estilos y scripts
function load_pokedex_scripts() {
    wp_enqueue_style('pokedex-style', plugins_url('styles/app.css', __FILE__));
    wp_enqueue_script('pokedex-main', plugins_url('src/main.js', __FILE__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_pokedex_scripts'); */