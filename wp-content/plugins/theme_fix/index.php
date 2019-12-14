<?php
/**
 * Plugin Name: Theme fix
 * Description: Fix theme error message
 * Author: Romez1990
 */

add_action('init', 'fix_theme_error_message');
function fix_theme_error_message() {
	?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const $ = jQuery;
            $('.main-header .row div:nth-child(2) b, .main-header .row div:nth-child(2) br').detach();
            const form = $('.main-header .row div:nth-child(2) form');
            const col = $('.main-header .row div:nth-child(2)');
            col.text('');
            col.append(form);
        });
    </script>
	<?php
}
