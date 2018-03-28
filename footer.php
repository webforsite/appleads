<div class="rodape">
      <style>.topo{background: #111; margin-left: 10%; margin-top: -19px}
      .novo_menu{display: inline}#setinha{margin-top: 35px}</style>
	  <div id="buscax" class="col-md-6"><div style="" class="input-group m-t-2 m-b-3 busca-rodape">
           
      </div>
           </div>
	  <div class="col-md-9">
      <div class="copy"><p>© 2017-2018 - Backleads - Sistema V 1.0 
       </p></div>
      </div>

      <div class="col-md-3" id="setinha">
      <a href="http://leads.epizy.com/sistema/#topo" class="scroll"><button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored topo">
  <i class="material-icons">&#xE316;</i>
		  </button></a>
</div>
    </div>
     

  <script>
      // Hide loader
      (function() {
          var bodyElement = document.querySelector('body');
          bodyElement.classList.add('loading');

          document.addEventListener('readystatechange', function() {
              if(document.readyState === 'complete') {
                  var bodyElement = document.querySelector('body');
                  var loaderElement = document.querySelector('#initial-loader');

                  bodyElement.classList.add('loaded');
                  setTimeout(function() {
                      bodyElement.removeChild(loaderElement);
                      bodyElement.classList.remove('loading', 'loaded');
                  }, 200);
              }
          });
      })();
  </script>


<script type='text/javascript'>
/* <![CDATA[ */
var zajax_data = {"zajax_main":"#main","zajax_main_mobile":"","zajax_ClassID":"","zajax_search":"#searchform","zajax_ignore":"","zajax_dolist":"","zajax_masonry":"","zajax_body":"1","zajax_back":"1","zajax_preload":null};
/* ]]> */
</script>

<script>
var urlAtual = window.location.href;
var urlMostrar = 'http://leads.epizy.com/sistema/';
var urlNova = 'http://leads.epizy.com/sistema/admin';
var urlNovaDois = 'http://leads.epizy.com/sistema/clientes';
if(urlAtual == urlMostrar || urlAtual == urlNova || urlAtual == urlNovaDois){
document.getElementById('buscax').style.display = 'block';
}else{
document.getElementById('buscax').style.display = 'none';

}
        </script>

<script>
var urlAtual = window.location.href;
var urlMostrar = 'http://leads.epizy.com/';
var urlNova = 'http://leads.epizy.com/sistema/leads';
var urlNovaDois = 'http://leads.epizy.com/sistema/clientes';
if(urlAtual == urlMostrar || urlAtual == urlNova || urlAtual == urlNovaDois){
document.getElementById('setinha').style.display = 'block';
}else{
document.getElementById('setinha').style.display = 'none';

}
        </script>

<script src="http://leads.epizy.com/sistema/js/jquery.dataTables.min.js"></script>
<script src="http://leads.epizy.com/sistema/js/dataTables.bootstrap.min.js"></script>
<script src="http://leads.epizy.com/sistema/js/app.min.13a3a368.js"></script>
<script src="http://leads.epizy.com/sistema/js/plugins-init.js"></script>
<script src="http://leads.epizy.com/sistema/js/switchery-settings.js"></script>
<script type="text/javascript" src="http://leads.epizy.com/sistema/js/vendor.cdb8fcb4b7ec3b99508a.js"></script>

</body>
</html>