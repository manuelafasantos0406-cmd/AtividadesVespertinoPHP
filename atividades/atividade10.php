<?php 
$aprovados = 0;
$reprovados = 0;
$candidatos= [
 

(object)["Nome"=> "Manu", "nota" => 50],
(object)["Nome"=> "Geovanna", "nota" => 100],
(object)["Nome"=> "Ana clara", "nota" => 90],
(object)["Nome"=> "Rebeca", "nota" => 70],
(object)["Nome"=> "Arthur", "nota" => 60]

];


foreach($candidatos as $candidatos) {
if($candidatos -> nota >=80) {

    $aprovados++;

 }else {
    $reprovados++;
 } 


}

echo "O total de aprovados é : $aprovados <br>";
 echo "O total de reprovados é : $reprovados"; 

?>

