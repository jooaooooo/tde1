<?php

$capacidade_cabine = 12;
$quantidade_alunos = 55;

$capacidade_real = $capacidade_cabine - 1;

$quantidade_viagens = floor(($quantidade_alunos + $capacidade_real - 1) / $capacidade_real);

echo $quantidade_viagens;


<?php

$numero_brinquedos = 1;
$altura_carlitos = 100;
$alturas_briquedos = [100];

$quantidade_brinquedos_carlinhos = 0;

for ($i = 0; $i < $numero_brinquedos; $i++){
    if($altura_carlitos >= $alturas_briquedos[$i]){
        $quantidade_brinquedos_carlinhos++;
    }
}

echo $quantidade_brinquedos_carlinhos;
