
<?php
$data = $_POST['data'];
$empresa = $_POST['empresa'];
$leads = $_POST['leads'];
$strcon = mysqli_connect('sql106.epizy.com','epiz_21528787','012714','epiz_21528787_leads') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO bk_01 VALUES ";
$sql .= "('$data', '$empresa', '$leads')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
?>
<?php include 'header.php';?>
<h4><?php echo "Cliente cadastrado com sucesso!";?></h4>
<a href="index.php"><button class="waves-effect waves-light btn">Voltar</button></a>
