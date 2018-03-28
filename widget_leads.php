<?php 
$pdo = new PDO("mysql:host=sql106.epizy.com; dbname=epiz_21528787_leads", "epiz_21528787", "012714");
$pdo->exec("set names utf8_general_ci"); 
$sql = "select * from bk_01 where empresa like 'sky' ORDER BY data ASC ";
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
}

?>



<div class="row m-t-1">

            <!-- START Revenue -->
            <div class="col-lg-3 col-md-4">
                <div class="panel panel-default b-a-0 bgpanel">
                    <div class="panel-heading b-b-0">Leads <span class="label label-white label-outline pull-right">45</span></div>
                    <div class="panel-body text-center p-t-0">
                        <h1 class="m-t-0 m-b-0 f-w-300 dashpanel"><?php echo $meta; ?></h1>
                        <p class="text-white">Novos Leads</p>
                    </div>
                    <div class="panel-footer text-center"><a href="javascript: void(0)" class="text-muted"><?php echo $metai ; ?> <i class="m-l-1 fa fa-angle-right"></i></a></div>
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
                        <h1 class="m-t-0 m-b-0 f-w-300 dashpanel">245</h1>
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