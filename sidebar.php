<div class="lado-esquerdo">

<div class="sidebar-container-default sidebar-section">
                <div class="media media-profile">
                    <div class="media-left media-top">
                        <div class="avatar avatar-image avatar-inline loaded">
                        <? echo get_avatar( get_the_author_meta('user_email'), $size = '34'); ?>
                            <i class="avatar-status bg-success avatar-status-bottom"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading m-t-0 m-b-0"><span><?php global $current_user; wp_get_current_user(); ?>
<?php if ( is_user_logged_in() ) { 
 echo $user_info->first_name . "\n"; echo  $user_info->last_name . "\n";  } 
else { wp_loginout(); } ?></span></h5>
                        <small><?php global $current_user; wp_get_current_user(); ?>
<?php if ( is_user_logged_in() ) { 
 echo $user_info->description;} 
else { wp_loginout(); } ?></small>
                        <div class="progress h-3 m-t-1 m-b-0">
                            <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                <span class="sr-only"></span>
                            </div>
                        </div>

                        <!-- START Usage & Gaer Icon -->
                        <div class="media m-t-1">
                            <div class="media-body  media-middle">
                                <small class="text-left"><?php global $current_user; wp_get_current_user(); ?>
<?php if ( is_user_logged_in() ) { 
 echo $user_info->user_registered;} 
else { wp_loginout(); } ?></small>
                            </div>
                            <div class="media-right">
                                <i class="fa fa-gear small"></i>
                            </div>
                        </div>
                        <!-- END Usage & Gaer Icon -->
                    </div>
                </div>
            </div>


      <nav class="navigation">
          <!-- START Navbar -->
<div class="navbar-inverse navbar navbar-fixed-top">
     <div class="container-fluid">

         <div class="navbar-header">
          
          <button class="action-right-sidebar-toggle navbar-toggle collapsed" data-target="#navdbar" data-toggle="collapse" type="button" data-original-title="" title="">
              <i class="fa fa-fw fa-align-right text-white"></i>
          </button>
          <button class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button">
              <i class="fa fa-fw fa-user text-white"></i>
          </button>
          <button class="action-sidebar-open navbar-toggle collapsed" type="button">
              <i class="fa fa-fw fa-bars text-white"></i>
          </button>
        </div>

      <div class="collapse navbar-collapse" id="navbar">

          <!-- START Search Mobile -->
          <div class="form-group hidden-lg hidden-md hidden-sm">
              <div class="input-group hidden-lg hidden-md">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                      <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-search"></i></button>
                  </span>
              </div>
          </div>
          <!-- END Search Mobile -->

          <!-- START Left Side Navbar -->
          <ul class="nav navbar-nav navbar-left clearfix yamm">

              

              <!-- START Menu Only Visible on Navbar -->
              <li id="top-menu-switch" class="dropdown">
                  <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Menu <i class="fa fa-fw fa-caret-down"></i></a>
                  
                  
                  <ul class="dropdown-menu">
                      <li>
                          <div class="yamm-content">
                              <div class="row">

                                      <!-- START Start, Widgets Navbar Menu -->
                                      <ul class="col-sm-2 list-unstyled">
                                          <li>
                                              <p class="text-muted small text-uppercase"><strong>Leads</strong></p>
                                          </li>
                                          <li class="m-l-1 ">
                                              <a href="http://backleads.com.br/start/overview.html" class="text-gray-lighter">
                                                  <span class="nav-label">Overview</span>
                                              </a>
                                          </li>
                                          
                                
                                      </ul>
                                      <!-- END Pages Navbar Menu -->

                              </div>
                          </div>
                      </li>
                  </ul>
                  
              </li>
              <!-- END Menu Only Visible on Navbar -->


          </ul>
    
         
      </div>

      
  </div>
</div>
<!-- END Navbar -->

  <!-- START Sidebars -->
<aside class="navbar-default sidebar affix-top ps-container ps-theme-default" data-ps-id="bc70c707-4203-1565-c141-840d5e749ac2">
  <div class="sidebar-overlay-head">
      <img src="" alt="Logo" width="90">
      <a href="javascript: void(0)" class="sidebar-switch action-sidebar-close">
          <i class="fa fa-times"></i>
      </a>
  </div>
  <div class="sidebar-logo">
      <img class="logo-default" src="" alt="Logo" width="53">
      <img class="logo-slim" src="" alt="Logo" height="13">
  </div>

  <div class="sidebar-content">
      <div class="p-y-3 avatar-container">
          <img src="" width="50" alt="Avatar" class="spin-avatar img-circle">
          <div class="text-center">
              <h6 class="m-b-0">Michelle Baez</h6>
              <small class="text-muted">Help Desk</small>
              <p class="m-t-1 m-b-2">
                  <span id="sidebar-avatar-chart" style="display: none;">5,3,2,-1,-3,-2,2,3,5,2</span><svg class="peity" height="16" width="32"><rect fill="#4D89F9" x="0.32" y="0" width="2.56" height="10"></rect><rect fill="#4D89F9" x="3.5200000000000005" y="4" width="2.5599999999999996" height="6"></rect><rect fill="#4D89F9" x="6.720000000000001" y="6" width="2.5599999999999987" height="4"></rect><rect fill="#4D89F9" x="9.92" y="10" width="2.5600000000000005" height="2"></rect><rect fill="#4D89F9" x="13.12" y="10" width="2.5600000000000023" height="6"></rect><rect fill="#4D89F9" x="16.32" y="10" width="2.5600000000000023" height="4"></rect><rect fill="#4D89F9" x="19.52" y="6" width="2.5600000000000023" height="4"></rect><rect fill="#4D89F9" x="22.72" y="4" width="2.5600000000000023" height="6"></rect><rect fill="#4D89F9" x="25.919999999999998" y="0" width="2.5600000000000023" height="10"></rect><rect fill="#4D89F9" x="29.119999999999997" y="6" width="2.5600000000000023" height="4"></rect></svg>
              </p>
          </div>
      </div>
  

  <!-- START Tree Sidebar Common -->
<ul class="side-menu">

  <li class="Dashboards nested-active primary-submenu has-submenu expanded active nested-active expanded">
  <a href="javascript: void(0)" title="Dashboards">
  <i class="fa fa-pie-chart fa-lg"></i><span class="nav-label">Dashboard</span><i class="fa arrow"></i>
  </a>
  <ul data-submenu-title="Start" class="submenu-level-1">
         
         <li class="">
          <a href="/sistema/clientes">
              <span class="nav-label">Clientes</span>
          </a>
          
      </li>
	  
	  <li class="">
          <a href="/sistema/vendedores">
              <span class="nav-label">Vendedores</span>
          </a>
          
      </li>
	  
</ul>
	  
	  <li class="primary-submenu has-submenu">
        <a href="javascript: void(0)" title="Tables">
            <i class="fa fa-trello fa-lg"></i><span class="nav-label">Relatórios</span> <i class="fa arrow"></i>
        </a>
        <ul data-submenu-title="Tables" class="submenu-level-1" style="">
            <li class="">
                <a href="../tables/pricing-tables.html">
                    <span class="nav-label">Administrativo</span>
                </a>
            </li>
            <li class="">
                <a href="../tables/tables.html">
                    <span class="nav-label">Roi </span>
                </a>
            </li>
            <li class="">
                <a href="../tables/datatables.html">
                    <span class="nav-label">Desempenho</span>
                </a>
            </li>

            <li class="">
                <a href="../tables/datatables.html">
                    <span class="nav-label">Analítico de Vendas</span>
                </a>
            </li>

            
        </ul>
    </li>
<!-- END Tree Sidebar Common  -->


  <div class="sidebar-default-visible">
      <hr>
  </div>

	  <div class="sidebar-default-visible sidebar-section m-b-2">
      <span class="small text-muted text-uppercase p-b-2 block">
          <strong>Status</strong>
      </span>
      <br>
      <br>
      <a href="http://leads.epizy.com/sistema/#pendentes" class="scroll"><p><i class="fa fa-circle-thin text-danger m-r-1"></i> Pendentes</p></a>
      <a href="http://leads.epizy.com/sistema/#resultados" class="scroll"><p><i class="fa fa-circle-thin text-info m-r-1"></i> Resultados</p></a>
      <a href="http://leads.epizy.com/sistema/#vendidos" class="scroll"><p><i class="fa fa-circle-thin text-muted m-r-1"></i> Vendidos</p></a>
 
    </div>
  </div>
<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></aside>
<!-- END Sidebars -->
 
<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></aside>
<!-- END Sidebars -->

      </nav>
  </div>

  <?php
  global $current_user;
$current_user = wp_get_current_user();
$user_info = get_userdata($current_user->ID);
$first_name = $user_info->first_name;
$last_name = $user_info->last_name;
$user_email = $user_info->user_email;
?>

  
  <!--
  
  
  <div class="profile-esquerdo">

        <ul class="demo-list-icon mdl-list ">
                
                    <li class="mdl-list__item">
                
                        <span class="mdl-list__item-primary-content">
                
                        <i class="material-icons mdl-list__item-icon">person</i>
                
                        <?php global $current_user; wp_get_current_user(); ?>
<?php if ( is_user_logged_in() ) { 
 echo $user_info->first_name . "\n"; echo  $user_info->last_name . "\n";  } 
else { wp_loginout(); } ?>
                    </span>
                    </li>
            
        </ul>
   
  </div>
-->
  <div class="mdl-layout__header-row right-sidebar">
            
        
                  <!-- Add spacer, to align navigation to the right in desktop -->
        
                  <div class="android-header-spacer mdl-layout-spacer"></div>
        
                  <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width is-upgraded" data-upgraded=",MaterialTextfield">
    
                  <div class="mdl-textfield__expandable-holder">
        
            </div>
        
                </div>
        
                    <nav class="android-navigation mdl-navigation mdl-typography--text-uppercase">
                    
        
                    <button type="button" class="mdl-button show-modal mdl-button--raised atualizar">Atualizar</button>
                    
            <div id="demo-snackbar-example" class="mdl-js-snackbar mdl-snackbar" data-upgraded=",MaterialSnackbar">
        
                <div class="mdl-snackbar__text"></div>
        
                <button class="mdl-snackbar__action" type="button" aria-hidden="true"></button>
        
            </div>
        
            </nav>
        
                  </div>

             
  <div class="chat-esquerdo-online">
  <script type="text/javascript">
function exibeDataHora(div){

   /*
   *
   * Funcao para exibicao de data e hora
   * Uso: basta chama-la ao carregar a pagina
   * e passar a div onde sera exibida a data 
   * e hora como parametro.
   *
   */

   //cria um objeto do tipo date
   var data = new Date();
   
   // obtem o dia, mes e ano
   dia = data.getDate();
   mes = data.getMonth() + 1;
   ano = data.getFullYear();
   
   //obtem as horas, minutos e segundos
   horas = data.getHours();
   minutos = data.getMinutes();
   segundos = data.getSeconds();
   
   //converte as horas, minutos e segundos para string
   str_horas = new String(horas);
   str_minutos = new String(minutos);
   str_segundos = new String(segundos);
   
   //se tiver menos que 2 digitos, acrescenta o 0
   if (str_horas.length < 2)
      str_horas = 0 + str_horas;
   if (str_minutos.length < 2)
      str_minutos = 0 + str_minutos;
   if (str_segundos.length < 2)
      str_segundos = 0 + str_segundos;
   
   //converte o dia e o mes para string
   str_dia = new String(dia);
   str_mes = new String(mes);
   
   //se tiver menos que 2 digitos, acrescenta o 0
   if (str_dia.length < 2) 
      str_dia = 0 + str_dia;
   if (str_mes.length < 2) 
      str_mes = 0 + str_mes;
   
   //cria a string que sera exibida na div
   data = str_dia + '/' + str_mes + '/' + ano + ' - ' + str_horas + ':' + str_minutos + ':' + str_segundos;
   
   //exibe a string na div
   document.getElementById(div).innerHTML = data;
   
   //executa a funcao com intervalo de 1 segundo
   setTimeout("exibeDataHora('hora')", 1000);
   
}
</script>

<div class="mdl-cell mdl-cell--12-col" id="hora"></div>

  </div>
