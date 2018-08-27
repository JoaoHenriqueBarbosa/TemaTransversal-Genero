<?php 
header("Access-Control-Allow-Origin: *");
header('Cache-Control: no-cache, must-revalidate'); 

if (($acao == 'ACAO-PROTEGIDA')) { //VERIFICA TOKEN
	$dados = json_decode(file_get_contents("php://input"), true);

	if ($dados['token'] == md5('janx')) {
		unset($dados['token']);
		require_once(__DIR__.'/'.$acao.'.php');
	} else {
		header("HTTP/1.1 401 Unauthorized"); 
		echo "Erro 401 - Token de acesso inválido.";
	}
} else {
	require_once(__DIR__.'/'.$acao.'.php');
}

