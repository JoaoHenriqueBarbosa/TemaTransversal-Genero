<?php
ob_start();

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

date_default_timezone_set('America/Sao_Paulo');

require __DIR__.'/vendor/altorouter/AltoRouter.php';

require __DIR__.'/app/rotas.php';

require __DIR__.'/global.php';

$basepath = '';
$router->setBasePath($basepath);

try {
    // $pdo = Conexao::novaConexao();
} catch (Exception $e) {
    Erro::trataErro($e);
}

// chamando a view da rota
$match = $router->match();

if ($match['target'] == 'api') {
    $acao = $match['params']['acao'];
    require_once(__DIR__.'/REST/api.php');
} else {
    $caminhoView = __DIR__.'/views/'.$match['target'].'.php';
    require_once(__DIR__.'/app/header.php');
    if (!file_exists($caminhoView))
      echo 'erro 404';
    else
      require_once($caminhoView); 
    require_once(__DIR__.'/app/footer.php');
}


?>