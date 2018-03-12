<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
  <title><?php wp_title();?></title>
	<head id="jsx">
        <?php require_once 'app.php';?>
        <?php echo header_ajax(); ?>
	</head>
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <meta name="viewport" content="initial-scale=1.0">
  <link rel="stylesheet" href="http://leads.epizy.com/sistema/css/standardize.css">
  <link rel="stylesheet" href="http://leads.epizy.com/sistema/css/index-grid.css">
  <link rel="stylesheet" href="http://leads.epizy.com/sistema/css/index.css">
  <link rel="stylesheet" href="http://leads.epizy.com/sistema/css/style.css">
  <link rel="stylesheet" href="http://leads.epizy.com/sistema/css/app.min.e0bb64e7.css">
  <link rel="stylesheet" href="http://leads.epizy.com/sistema/css/media.css">
  <link rel="stylesheet" href="http://leads.epizy.com/sistema/css/font-awesome.css">
  <link rel="stylesheet" href="http://leads.epizy.com/sistema/css/chartist.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="http://leads.epizy.com/sistema/css/material.grey-deep_orange.min.css" />
  

  <script defer src="http://leads.epizy.com/sistema/js/material.min.js"></script>
  <script src="http://leads.epizy.com/sistema/js/jquery-3.2.1.min.js"></script>
  <script src="http://leads.epizy.com/sistema/js/lib.min.js"></script>
  <script defer src="/static/fontawesome/fontawesome-all.js"></script>
  <script src="http://leads.epizy.com/sistema/js/chartist.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">     </script>
	
  <script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
  <script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
  <script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/black.js"></script>
	

  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  <!--START Loader -->
  <style>
      #initial-loader{display:flex;align-items:center;justify-content:center;flex-wrap:wrap;width:100%;background:#212121;position:fixed;z-index:10000;top:0;left:0;bottom:0;right:0;transition:opacity .2s ease-out}#initial-loader .initial-loader-top{display:flex;align-items:center;justify-content:space-between;width:200px;border-bottom:1px solid #2d2d2d;padding-bottom:5px}#initial-loader .initial-loader-top > *{display:block;flex-shrink:0;flex-grow:0}#initial-loader .initial-loader-bottom{padding-top:10px;color:#5C5C5C;font-family:-apple-system,"Helvetica Neue",Helvetica,"Segoe UI",Arial,sans-serif;font-size:12px}@keyframes spin{100%{transform:rotate(360deg)}}#initial-loader .loader g{transform-origin:50% 50%;animation:spin .5s linear infinite}body.loading {overflow: hidden !important} body.loaded #initial-loader{opacity:0}
      <style>
@import url('https://fonts.googleapis.com/css?family=Righteous');
  </style>
  <!--END Loader-->
</head>
<body onload="javascript:exibeDataHora('hora');" class="body page-index clearfix ">
   

 <div id="initial-loader">
        <div>
            <div class="initial-loader-top">
                leadsback
                <div class="loader loader--style1">
                    <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewbox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
                        <g>
                            <path fill="#ff2c26" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/>
                            <path fill="#fff" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0C22.32,8.481,24.301,9.057,26.013,10.047z"/>
                            
                        </g>
                    </svg>
                </div>
            </div>
    
            <div class="initial-loader-bottom">
                Carregando... Aguarde... <i class="fa fa-cricle" style="opacity: 0"></i>
            </div>
        </div>
    </div>


  
  <?php include 'menu-topo.php'; ?>

  <div class="header-topo">
  <!-- //// informações do topo ////////////// -->
  
  </div>
<a href=<?php echo logo(); ?>

  <div id="home" class="logo-bl js-logo" alt="bacleads-logo" <?php the_custom_logo(); ?></div></a>
	  
<!-- /final header -->

<!-- SIDEBAR LADO ESQUERDO -->

  <?php include 'sidebar.php'; ?>

  <div class="meio_centro" id="main">


            <dialog style="margin-left: 40%;"class="mdl-dialog">
                <div class="mdl-dialog__content">
                  <p>

                  Vamos testar algumas páginas?


                  <?php if ( get_theme_mod( 'menu_center' ) ) {
				?>


			<div class="site-navigation centered" role="navigation">
				<div class="container">
				<a class="toggle-nav" href="javascript:void(0);"><span></span></a>
				<?php wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'clearfix',
						'fallback_cb'    => 'trusted_primary_menu_fallback',
					)
				); ?>
				</div>
			

			<?php } else {
				?>
			<div class="site-navigation" role="navigation">
				<a class="toggle-nav" href="javascript:void(0);"><span></span></a>
				<?php wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'clearfix',
						'fallback_cb'    => 'trusted_primary_menu_fallback',
					)
				); ?>
			</div>
	
			<?php
				} ?>

                  </p>
                </div>
                
                <div class="mdl-dialog__actions mdl-dialog__actions--full-width">
                  <button type="button" class="mdl-button">Entrar</button>
                  <button type="button" class="mdl-button closea">Sair</button>
                </div>
              </dialog>
              <script>
                var dialog = document.querySelector('dialog');
                var showModalButton = document.querySelector('.show-modal');
                if (! dialog.showModal) {
                  dialogPolyfill.registerDialog(dialog);
                }
                showModalButton.addEventListener('click', function() {
                  dialog.showModal();
                });
                dialog.querySelector('.closea').addEventListener('click', function() {
                  dialog.close();
                });
              </script>
	  
	         <script type="text/javascript">
             jQuery(document).ready(function($) { 
             $(".scroll").click(function(event){        
             event.preventDefault();
              $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
             });
             });
             </script>

