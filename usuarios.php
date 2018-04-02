<?php

$pdo = new PDO("mysql:host=sql106.epizy.com; dbname=epiz_21528787_wp27", "epiz_21528787", "012714");
$pdo->exec("set names utf8"); 
$sql = "SELECT * FROM wpe4_users ";
$result = $pdo->query( $sql );
$rows = $result->fetchAll( PDO::FETCH_ASSOC );
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ);
$html  ="<table class='table'>";
$html .= "<thead>
<tr>
    <th>ID</th>
    <th>USER_LOGIN</th>
    <th>USER_NICENAME</th>
    <th>USER_EMAIL</th>
    <th>USER_REGISTERED</th>
    <th>DISPLAY_NAME</th>
    
</tr>
</thead>";

$html .="<tbody>";
for($i = 0; $i < count($result); $i++){

$html .= "<tr>";
$html .= "<td>". $result[$i]->ID ."</td>";
$html .= "<td>". $result[$i]->user_login ."</td>";
$html .= "<td>". $result[$i]->user_nicename ."</td>";
$html .= "<td>". $result[$i]->user_email ."</td>";
$html .= "<td>". $result[$i]->user_registered ."</td>";
$html .= "<td>". $result[$i]->display_name ."</td>";


$html .= "</tr>";
}
$html .= "</tbody>
</table>";
echo $html;

?>