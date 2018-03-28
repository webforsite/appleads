

<?php
$role_admin = get_role('admin');

?>

<div class="lado-esquerdo">

<div class="sidebar-container-default sidebar-section">
<a style=""href="http://leads.epizy.com/sistema/consultor/<?php echo $user_info->user_login;?>/">
                <div class="media media-profile">
                    <div class="media-left media-top">
                        <div class="avatar avatar-image avatar-inline loaded">
                            
                        <?php  
                        $user_id = $user_info->id;
                        echo get_avatar( $user_id, 34 ); ?>
                        </a>
                 
                            <i class="avatar-status bg-success avatar-status-bottom"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading m-t-0 m-b-0"><span>
                            
                        <?php global $current_user; wp_get_current_user(); ?>
                <?php if ( is_user_logged_in() ) { 
                      echo $user_info->first_name . "\n"; echo  $user_info->last_name . "\n";  } 
                      else { wp_loginout(); } ?></span></h5>
                        <small><?php global $current_user; wp_get_current_user(); ?>
                <?php if ( is_user_logged_in() ) { 
                             echo $user_info->description ;} 
                             else { wp_loginout(); } ?>

</small>
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
                            echo "IP:" . $_SERVER['REMOTE_ADDR'];} 
                            else { wp_loginout(); } ?>

</small>
                            </div>
                            <div class="media-right">
                                <a href="http://leads.epizy.com/sistema/wp-admin/profile.php"><i class="fa fa-gear small"></i></a>
                            </div>
                        </div>
                        <!-- END Usage & Gaer Icon -->
                    </div>
                </div>
            </div>


<?php include 'nav.php'; ?>

  <!--MENU LATERAL -->
<ul class="side-menu">

<li class=" Dashboards nested-active primary-submenu has-submenu">
<a href="/#" title="Dashboards">
<i class="fa fa-th fa-lg"></i><span class="nav-label">Dashboard</span><i class="fa arrow"></i>
</a>
        <ul data-submenu-title="Tables" class="submenu-level-1" style="">
            <li class="">
                <a href="/">
                    <span class="nav-label">Painel</span>
                </a>
            </li>
           
            
        </ul>
    </li>


	  
	  <li class="primary-submenu has-submenu">
        <a href="#campanhas" title="Tables">
            <i class="fa fa-lg fa-th-list fa-fw"></i><span class="nav-label">Campanhas</span> <i class="fa arrow"></i>
        </a>
        <ul data-submenu-title="Tables" class="submenu-level-1" style="">
            <li class="">
                <a href="/sistema/cadastrar-campanha/">
                    <span class="nav-label">Add Nova Campanha</span>
                </a>
            </li>
            <li class="">
                <a href="http://leads.epizy.com/sistema/agenda/agenda-resultados/">
                    <span class="nav-label">Campanhas Enviadas</span>
                </a>
            </li>

            <li class="">
                <a href="http://leads.epizy.com/sistema/campanhas/">
                    <span class="nav-label">Visualizar Todas</span>
                </a>
            </li>

            <li class="">
                <a href="/sistema/filtrar-campanha/">
                    <span class="nav-label">Campanhas Aprovadas</span>
                </a>
            </li>

            <li class="">
                <a href="http://leads.epizy.com/sistema/wp-admin/edit.php?post_type=event_listing">
                    <span class="nav-label">Gerenciar</span>
                </a>
            </li>


            
        </ul>
    </li>

    <li class="primary-submenu has-submenu">
        <a href="javascript: void(0)" title="Tables">
            <i class="fa fa-suitcase fa-lg"></i><span class="nav-label">Vendas</span> <i class="fa arrow"></i>
        </a>
        <ul data-submenu-title="Tables" class="submenu-level-1" style="">
            <li class="">
                <a href="/sistema/cadastrar-campanha/">
                    <span class="nav-label">Add Nova Venda</span>
                </a>
            </li>
            <li class="">
                <a href="http://leads.epizy.com/sistema/campanhas/">
                    <span class="nav-label">Visualizar Todas</span>
                </a>
            </li>

            <li class="">
                <a href="/sistema/filtrar-campanha/">
                    <span class="nav-label">Vendas Aprovadas</span>
                </a>
            </li>

            <li class="">
                <a href="http://leads.epizy.com/sistema/wp-admin/edit.php?post_type=event_listing">
                    <span class="nav-label">Gerenciar</span>
                </a>
            </li>


            
        </ul>
    </li>


<?php 
$role_menu = $user_info->role;
?> 

<?php
switch ($role_menu) {
    case 'admin':
        # code...

        echo
        '<li class="primary-submenu has-submenu">
        <a href="javascript: void(0)" title="Tables">
            <i class="fa fa-flash fa-lg"></i><span class="nav-label">Vendedores</span> <i class="fa arrow"></i>
        </a>
        <ul data-submenu-title="Tables" class="submenu-level-1" style="">
            <li class="">
                <a href="http://leads.epizy.com/sistema/consulta/lista-de-vendedores/">
                    <span class="nav-label">Lista de Vendedores</span>
                </a>
            </li>
         

            <li class="">
                <a href="/sistema/filtrar-campanha/">
                    <span class="nav-label">Campanhas Aprovadas</span>
                </a>
            </li>

            <li class="">
                <a href="http://leads.epizy.com/sistema/agenda/agenda-resultados/">
                    <span class="nav-label">Visualizar Agenda</span>
                </a>
            </li>


            
        </ul>
    </li>

    '
;
    
        break;
    
    default:
        # code...
        break;
}

?>
    

<?php 

switch ($role_menu) {
    case 'admin':
    echo 
    '<li class="primary-submenu has-submenu">
    <a href="javascript: void(0)" title="Tables">
        <i class="fa fa-pie-chart fa-lg "></i><span class="nav-label">Relatórios</span> <i class="fa arrow"></i>
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
';

        break;
    
    default:
        # code...
        break;
}

?>

    


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