<?php 
$pdo = new PDO("mysql:host=sql106.epizy.com; dbname=epiz_21528787_leads", "epiz_21528787", "012714");
$pdo->exec("set names utf8"); 
$sql = "SELECT * FROM streak ";
$result = $pdo->query( $sql );
$rows = $result->fetchAll( PDO::FETCH_ASSOC );
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ); // Retorna um array de objetos

// conexão com banco de dados // usar requere_once e tabelas da qual quer extrair o resultado 

?>


