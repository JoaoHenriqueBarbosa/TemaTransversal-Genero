<?php 

$router = new AltoRouter();
$router->map('GET','/', 'home', 'home');
$router->map('POST','/api/[a:acao]', 'api', 'api');
// $router->map('GET','/sair', 'sair', 'sair');
// $router->map('GET','/login', 'login', 'login');
// $router->map('POST','/auth', 'auth', 'auth');
// $router->map('GET','/config', 'config', 'config');
// $router->map('GET','/novousuario', 'novousuario', 'novousuario');
// $router->map('POST','/novousuario', 'novousuario', 'novousuario_post');
// $router->map('GET','/numeracoes', 'numeracoes', 'numeracoes');
// $router->map('POST','/numeracoes', 'numeracoes', 'numeracoes_post');
// $router->map('GET','/novodocumento', 'novodocumento', 'novodocumento');
// $router->map('POST','/novodocumento', 'novodocumento', 'novodocumento_post');
// $router->map('GET','/listar/[a:acao]', 'listar', 'listar');
// $router->map('GET','/novonumero/[a:acao]', 'novo', 'novo');
// $router->map('POST','/novonumero/[a:acao]', 'novo', 'novo_post');