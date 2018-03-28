<?php 
$pdo = new PDO("mysql:host=sql106.epizy.com; dbname=epiz_21528787_wp27", "epiz_21528787", "012714");
$pdo->exec("set names utf8"); 
$sql = "SELECT * FROM wpe4_dc_mv_events";
$result = $pdo->query( $sql );
$rows = $result->fetchAll( PDO::FETCH_ASSOC );
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ); // Retorna um array de objetos
$html  ="<table class='table'>";
$html .= "<thead>
<tr>
    <th>Id</th>
    <th>Data</th>
    <th>Título</th>
    <th>Local</th>
    <th>Descrição</th>

</tr>
</thead>";

$html .="<tbody>";
for($i = 0; $i < count($result); $i++){

$html .= "<tr>";
$html .= "<td>". $result[$i]->id ."</td>";
$html .= "<td>". $result[$i]->starttime ."</td>";
$html .= "<td>". $result[$i]->title ."</td>";
$html .= "<td>". $result[$i]->location ."</td>";
$html .= "<td>". $result[$i]->description ."</td>";





$html .= "</tr>";
}
$html .= "</tbody>
</table>";
echo $html;
?>


