<?php

add_shortcode( 'hairdressers', 'hairdressers_shortcode' );
function hairdressers_shortcode( $atts ) {
  // create the html
  $html .= '<div id="root"></div>';

  return $html;
}
