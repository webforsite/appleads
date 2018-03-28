<?php

function header_ajax()
{
$url_atual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$urlblock = "http://leads.epizy.com/sistema/cadastrar-campanha/";
$urlblock_2 = "http://leads.epizy.com/sistema/teste";
if($url_atual == $urlblock || $url_atual == $urlblock_2):
       echo '<!-- sem script -->';
else:
       echo wp_head();
endif;

}

// parte 2 do teste

function logo(){

$url_atual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url2 = "http://leads.epizy.com/sistema/cadastrar-campanha/";
$url3 = "http://leads.epizy.com/sistema/campanhas/";
if($url_atual == $url2 || $url_atual == $url3):
       echo ' "/#" ';
else:
       echo esc_url( home_url( '/' ) );
endif;
}

// iframe dashboard

function dash_grafico() {
    echo do_shortcode("[sc name="chart dark top"]");
}




