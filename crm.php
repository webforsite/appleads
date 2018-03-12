<section class="tabela">
<?php 
$pdo = new PDO("mysql:host=sql106.epizy.com; dbname=epiz_21528787_leads", "epiz_21528787", "012714");
$pdo->exec("set names utf8_general_ci"); 
$sql = "SELECT * FROM streak ";
$result = $pdo->query( $sql );
$rows = $result->fetchAll( PDO::FETCH_ASSOC );
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ); // Retorna um array de objetos
$html  ="<table class='striped'>";
$html .= "<thead>
<tr>
    <th>data</th>
    <th>id</th>
    <th>nome</th>
    <th>whats</th>
    <th>cep</th>
    <th>cidade</th>
    <th>interesse</th>
    <th>vendedor</th>
    

</tr>
</thead>";

$html .="<tbody>";
for($i = 0; $i < count($result); $i++){

$html .= "<tr>";
$html .= "<td>". $result[$i]->data ."</td>";
$html .= "<td>". $result[$i]->id ."</td>";
$html .= "<td>". $result[$i]->nome ."</td>";
$html .= "<td>". $result[$i]->whats ."</td>";
$html .= "<td>". $result[$i]->cep ."</td>";
$html .= "<td>". $result[$i]->cidade ."</td>";
$html .= "<td>". $result[$i]->interesse ."</td>";
$html .= "<td>". $result[$i]->vendedor ."</td>";


$html .= "</tr>";
}
$html .= "</tbody>
</table>";
echo $html;
?>
</section>

