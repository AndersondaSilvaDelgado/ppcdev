<?php

require('./dao/AuditorDAO.class.php');

$auditorDAO = new AuditorDAO();

//cria o array associativo
$dados = array("dados"=>$auditorDAO->dados());

//converte o conteúdo do array associativo para uma string JSON
$json_str = json_encode($dados);

//imprime a string JSON
echo $json_str;
