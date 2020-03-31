<?php
/**
 * Plugin Name:       Emojis everywhere
 * Plugin URI:        https://github.com/quicoto/wordpress-emojis
 * Description:       Turn on emojis in any environment
 * Version:           1.0.0
 * Requires at least: 5.1.4
 * Requires PHP:      7.2
 * Author:            Ricard Torres
 * Author URI:        https://ricard.blog/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

add_action( 'wp_head', function() {
        ob_start();
        print_emoji_detection_script();
        echo preg_replace( '/!function(.+?)window._wpemojiSettings\);/', '!function(e,t,a){function n(e){var a=t.createElement("script");a.src=e,a.defer=a.type="text/javascript",t.getElementsByTagName("head")[0].appendChild(a)}var o,d;a.supports={everything:!1,everythingExceptFlag:!1},a.DOMReady=!1,a.readyCallback=function(){a.DOMReady=!0},d=function(){a.readyCallback()},t.addEventListener?(t.addEventListener("DOMContentLoaded",d,!1),e.addEventListener("load",d,!1)):(e.attachEvent("onload",d),t.attachEvent("onreadystatechange",function(){"complete"===t.readyState&&a.readyCallback()})),(o=a.source||{}).concatemoji?n(o.concatemoji):o.wpemoji&&o.twemoji&&(n(o.twemoji),n(o.wpemoji))}(window,document,window._wpemojiSettings);', ob_get_clean() );
}, 7 );
