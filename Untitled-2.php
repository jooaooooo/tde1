<?php

$capacidade_cabine = 12;
$quantidade_alunos = 55;

$capacidade_real = $capacidade_cabine - 1;

$quantidade_viagens = floor(($quantidade_alunos + $capacidade_real - 1) / $capacidade_real);

echo $quantidade_viagens;