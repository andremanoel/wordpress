<?php

/**
 * Cria a listagem dos cursos utilizando os paramêtros
 */
function courses_list($atts){
  extract(shortcode_atts(array("title" => "", "btn_compra" => "", "orderby" => ""), $atts));

  $btn_compra   = isset($btn_compra) ? $btn_compra : "";
  $orderby    = isset($orderby) ? $orderby : "name";
  
  echo '<ul>';
  
  echo '</ul>';
}
add_shortcode('lista_cursos', 'courses_list');