<?php
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function mytheme_script() {
    wp_enqueue_script( 'my-custom-js', get_stylesheet_directory_uri() . '/custom.js', [], null, true );
}
add_action( 'wp_enqueue_scripts', 'mytheme_script' );

function say_hi() {
    ?>
    <script type="text/javascript">
        alert("Hi!");
    </script>
    <?php
}
add_action( 'wp_head', 'say_hi' );
?>