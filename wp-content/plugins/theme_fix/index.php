<?php
/**
 * Plugin Name: Theme fix
 * Description: Fix theme error message
 * Author: Romez1990
 */

add_action('init', 'fix_theme');
function fix_theme() {
	fix_theme_error_message();
	add_address_and_phone();
}
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
function add_address_and_phone() {
	?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const $ = jQuery;
            const siteDescription = $('.site-description');
            const address = 'ул. 30 лет Победы, 18а';
            const phone = 'тел./факс: 8 (8639) 27 53 79';
            siteDescription.html(`${siteDescription.text()
            }<br>${address}<br>${phone}`)
        });
    </script>
	<?php
}
