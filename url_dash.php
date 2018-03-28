 <?php
# usuários
$dados_id = get_current_user_id();
$rogerio = "net.sales0001@gmail.com";
$rogerio_dados = 3;
$liane = "lia@webforsite.com.br";
$liane_dados = 2;
$liane_sqli =  "select * from bk_01 where empresa like 'NET' ORDER BY data ASC ";
$admin ="admin@leads.epizy.com";
$admin_dados = 1;
$usuarios = array($rogerio_dados, $liane_dados, $admin_dados);


                            global $current_user;
                            $current_user = wp_get_current_user();
                            $user_info = get_userdata($current_user->ID);
                            $first_name = $user_info->first_name;
                            $last_name = $user_info->last_name;
                            $user_email = $user_info->user_email;
                         
                            ?>


<?php 
$pdo = new PDO("mysql:host=sql106.epizy.com; dbname=epiz_21528787_leads", "epiz_21528787", "012714");
$pdo->exec("set names utf8_general_ci"); 
# definir condições dinamicas para todos usuários > 
if ( $dados_id == 1){
$sql = "select * from bk_01 where empresa like 'sky' ORDER BY data ASC ";
}else{
    $sql = "select id from streak where Vendedor like 'netaa02' ORDER BY data ASC ";
}

$sqli = "select * from streak ";
$result = $pdo->query( $sql );
$resulti = $pdo->query( $sql );
$rows = $result->fetchAll( PDO::FETCH_ASSOC );
$rowsi = $resulti->fetchAll( PDO::FETCH_ASSOC );
$stmt = $pdo->prepare($sql);
$stmti = $pdo->prepare($sqli);
$stmt->execute();
$stmti->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ); // Retorna bk_01
$resulti = $stmti->fetchAll(PDO::FETCH_OBJ); // Retorna streak
for($i = 0; $i < count($result); $i++){
$meta =  $result[$i]->leads;
}

for($is = 0; $is < count($resulti); $is++){
$metai =  $resulti[$i]->nome;
$id = $resulti[$i]->id;
}

?>


<div class="row m-t-1">

            <!-- START Revenue -->
            <div class="col-lg-3 col-md-4">
                <div class="panel panel-default b-a-0 bgpanel">
                    <div class="panel-heading b-b-0">Leads <span class="label label-white label-outline pull-right"><?php echo $meta; ?></span></div>
                    <div class="panel-body text-center p-t-0">
                        <h1 class="m-t-0 m-b-0 f-w-300 dashpanel">
                        
                        <?php 
if($usuarios){
    
switch ($dados_id) {
    case $rogerio_dados:
        # code...
        echo $meta;
        break;

    case $liane_dados:
    echo $id;
    break;

    case $admin_dados;
    echo $id;
    break;
    
    default:
        # code...
        echo "Email não cadastrado";
        break;
}

}

?>


</h1>
                        <p class="text-white">Novos Leads</p>
                    </div>
                    <div class="panel-footer text-center"><a href="javascript: void(0)" class="text-muted">
    
                    Ver Relatório<i class="m-l-1 fa fa-angle-right"></i></a></div>
                </div>
            </div>
            <!-- END Revenue -->

            <!-- START Total Item Sold -->
            <div class="col-lg-3 col-md-4">
                <div class="panel panel-default b-a-0 bg-gray-dark bgpanel">
                    <div class="panel-heading b-b-0">Vendas <span class="label label-white label-outline  pull-right">12</span></div>
                    <div class="panel-body text-center p-t-0">
                        <h1 class="m-t-0 m-b-0 f-w-300 dashpanel">91</h1>
                        <p class="text-white">Novas Vendas</p>
                    </div>
                    <div class="panel-footer text-center"><a href="javascript: void(0)" class="text-muted">Ver Relatório<i class="m-l-1 fa fa-angle-right"></i></a></div>
                </div>
            </div>
            <!-- END Total Item Sold -->

            <!-- START Total Visitor -->
            <div class="col-lg-3 col-md-4">
                <div class="panel panel-default b-a-0 bg-gray-dark bgpanel">
                    <div class="panel-heading b-b-0">Negociações <span class="label label-white label-outline pull-right">3</span></div>
                    <div class="panel-body text-center p-t-0">
                        <h1 class="m-t-0 m-b-0 f-w-300 dashpanel">
                        
                        <?php 

echo 50;

                       
                        
                        ?>
                        
                        </h1>
                        <p class="text-white">Novas Negociações</p>
                    </div>
                    <div class="panel-footer text-center"><a href="javascript: void(0)" class="text-muted">Ver Relatório<i class="m-l-1 fa fa-angle-right"></i></a></div>
                </div>
            </div>
            <!-- END Total Visitor -->

            <!-- START Total Visitor -->
            <div class="col-lg-3 col-md-4">
                <div class="panel panel-default b-a-0 bg-gray-dark bgpanel">
                    <div class="panel-heading b-b-0">Não Vendas<span class="label label-white label-outline  pull-right">68</span></div>
                    <div class="panel-body text-center p-t-0">
                        <h1 class="m-t-0 m-b-0 f-w-300 dashpanel">88</h1>
                        <p class="text-white">Lista de Reprovados</p>
                    </div>
                    <div class="panel-footer text-center"><a href="javascript: void(0)" class="text-muted">Ver Relatório<i class="m-l-1 fa fa-angle-right"></i></a></div>
                </div>

            </div>
            <!-- END Total Visitor -->

        </div>
            
                                   
                                   
                                    
                