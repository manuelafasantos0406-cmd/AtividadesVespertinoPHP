<?php 
$aprovados = 0;
$reprovados = 0;
$candidatos= [
 

(object)["Nome"=> "Manu", "nota" => 85],
(object)["Nome"=> "Geovanna", "nota" => 70],
(object)["Nome"=> "Ana clara", "nota" => 90],
(object)["Nome"=> "Rebeca", "nota" => 60],


];
foreach($candidatos as $candidatos) {
if($candidatos -> nota >=80) {

    $aprovados++;

}

}

echo "O total de aprovados é : $aprovados"; 

?>

