<?php

    $contatos = file_get_contents("contatos.json");
    $contatos = json_decode($contatos, true);



$contato = [
   " id "      => uniqid(),
   " nome "    => "amon",
    "email "   => "julinha@gmail.com",
    "telefone" => "(47) 996666666"

];


    array_push($contatos, $contato);

$dados_json = json_encode($contatos, JSON_PRETTY_PRINT);

file_put_contents("contatos.json", $dados_json);

print_r($dados_json);

