$html  ="<table class='table'>";
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
$html .= "<td>". $result[$i]->whatz/telefone ."</td>";
$html .= "<td>". $result[$i]->cep/bairro ."</td>";
$html .= "<td>". $result[$i]->Cidade ."</td>";
$html .= "<td>". $result[$i]->Interesse ."</td>";
$html .= "<td>". $result[$i]->Vendedor ."</td>";


$html .= "</tr>";
}
$html .= "</tbody>
</table>";
echo $html;