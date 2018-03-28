<section class="tabela">
<?php 
$pdo = new PDO("mysql:host=sql106.epizy.com; dbname=epiz_21528787_leads", "epiz_21528787", "012714");
$pdo->exec("set names utf8_general_ci"); 
$sql = "SELECT * FROM bk_01 where empresa like 'sky'";
$result = $pdo->query( $sql );
$rows = $result->fetchAll( PDO::FETCH_ASSOC );
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ); // Retorna um array de objetos
$html  ="<table class='striped'>";
$html .= "<thead>
<tr>
    <th>data</th>
    <th>empresa</th>
    <th>leads</th>

</tr>
</thead>";

$html .="<tbody>";
for($i = 0; $i < count($result); $i++){

$html .= "<tr>";
$html .= "<td>". $result[$i]->data ."</td>";
$html .= "<td>". $result[$i]->empresa ."</td>";
$html .= "<td>". $result[$i]->leads ."</td>";
$html .= "</tr>";
}
$html .= "</tbody>
</table>";
echo $html;
?>
</section>

