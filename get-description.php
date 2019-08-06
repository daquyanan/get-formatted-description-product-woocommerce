<?php
// After using hours to search, with a lot of keywords =))
// I finally found an useful function: wpautop
// That's really hard to find, because I started to developing my own theme, without knowing much about Wordpress, woocommerce, even about PHP
// It's easy, just following the bellow code


echo wp_kses_post(wpautop($product->get_description()));

// wp_kses_post to filter something unneed in html code, like script
// what we actually need here is: wpautop, you can find and read document here: https://codex.wordpress.org/Function_Reference/wpautop
?>
