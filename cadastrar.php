
<?php include 'header.php';?>

<div class="form">
<form action="envio.php" method="post">
 <p>Data: <input type="text" name="data" required="required"/></p>
 <p>Empresa: <input type="text" name="empresa" required="required"/></p> 
 <p>Leads: <input type="text" name="leads" /></p>
 <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
        
 </div>
</form>
<div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
