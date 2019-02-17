<?php

$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38";
$headers = array();
$headers[] = "x-access-token: $token";
$headers[] = 'Content-Type: application/json; charset=utf-8';
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "http://clinic5.feegow.com.br/components/public/api/professional/list");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$reqProf = curl_exec($curl);
    
$dataProf = json_decode($reqProf);

for ($i=0; $i < count($dataProf->content) ; $i++) { 
    if(isset($dataProf->content[$i]->nome)){
    echo $dataProf->content[$i]->nome . " - " . $dataProf->content[$i]->documento_conselho . " - " . $dataProf->content[$i]->especialidade_id;
        echo "<br>";
    }
   
}

?>