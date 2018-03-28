<?php include 'header.php';?>
<body>
<header> 
    <div class="topo">
      <div class="botao_cadastrar">
        <a class="waves-effect waves-light btn red cadastrar" href="cadastrar.php">
        <?php echo "Cadastrar";?></a>
    </div>

<div class="logo"><a href="index.php">
    <img src="img/logo_01.png" width="55px" alt=""></a>
</div>
   </header>
<?php require_once 'tabela.php';?>
<div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">insert_chart</i></a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">format_quote</i></a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">publish</i></a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i></a></li>
    </ul>
</div>




