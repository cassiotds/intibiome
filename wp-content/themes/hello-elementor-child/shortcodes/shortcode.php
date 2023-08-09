<?php

function custom_produtos_shortcode( $atts ){
  $atts = shortcode_atts(array(
      'number' => 3,
    ), $atts);

    $args = array(
        'post_type' => 'produtos',
        'categorias'=> 'destaques'
    );

    $query = new WP_Query($args);

    $html = '';

    $html .= '<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">';
    $html .= '<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>';

    if ($query->have_posts()) {
      $html .= '<div class="lista-produtos">';
      while ($query->have_posts()) {
          $query->the_post();
          $html .= '<div class="produto"><div class="img">'.get_the_post_thumbnail(get_the_ID()).'</div><div class="descricao">'.get_the_excerpt().'</div><div class="titulo" style="background-color:'.get_field('cor').';""><a href="' . get_permalink() . '">' . get_the_title() . '</a></div></div>';
      }
      $html .= '</div>';
      wp_reset_postdata();
    } else {
      $html = 'Nenhum post encontrado.';
    }

    return $html;
}

add_shortcode( 'custom_produtos', 'custom_produtos_shortcode' );


function custom_post_shortcode( $atts ){
  $atts = shortcode_atts(array(
      'number' => 3,
    ), $atts);

    $args = array(
        'post_type' => 'post',
    );

    $query = new WP_Query($args);

    $html = '';

    $html .= '<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">';
    $html .= '<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>';

    if ($query->have_posts()) {
      $html .= '<div class="lista-posts">';
      while ($query->have_posts()) {
          $query->the_post();
          $html .= '<div class="produto"><div class="img">'.get_the_post_thumbnail(get_the_ID()).'</div><div class="titulo"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div></div>';
      }
      $html .= '</div>';
      wp_reset_postdata();
    } else {
      $html = 'Nenhum post encontrado.';
    }

    return $html;
}

add_shortcode( 'custom_posts', 'custom_post_shortcode' );