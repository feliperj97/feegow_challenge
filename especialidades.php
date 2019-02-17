<?php

$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38";
$headers = array();
$headers[] = "x-access-token: $token";
$headers[] = 'Content-Type: application/json; charset=utf-8';
$curl = curl_init();
// Requisição de listar especialidades
curl_setopt($curl, CURLOPT_URL,"http://clinic5.feegow.com.br/components/public/api/specialties/list");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$reqEspec = curl_exec ($curl);
$dataEspec = json_decode($reqEspec);

//lista especialidades
/* for ($i=0; $i < count($dataEspec->content) ; $i++) { 
    echo $dataEspec->content[$i]->especialidade_id . ";" . $dataEspec->content[$i]->nome;
    echo "<br>";
} */

?>