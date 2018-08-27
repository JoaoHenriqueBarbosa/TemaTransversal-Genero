<?php 
// EXEMPLO DE API
header("Content-Type: text/plain; charset=UTF-8");

try {
	$views = mt_rand(38, 557);

	$stmt = $pdo->prepare('INSERT INTO noticias VALUES(null, :nome, :texto, :link, :imagem, :idfonte, :datahora, :views, :slug)');
	$stmt->execute(array(
		':nome' => $dados['nome'],
		':texto' => $dados['texto'],
		':link' => $dados['link'],
		':imagem' => $dados['imagem'],
		':idfonte' => $dados['idfonte'],
		':datahora' => $dados['datahora'],
		':views' => $views,
		':slug' => $dados['slug']
	));

	header("HTTP/1.1 201 Created"); 
	echo $pdo->lastInsertId();

} catch(PDOException $e) {

	$termo = 'Integrity constraint violation';

	$pattern = '/' . $termo . '/';

	if (preg_match($pattern, $e->getMessage())) {
	  echo 'Noticia já cadastrada.';
	} else {
	  echo $e->getMessage();
	}

	//header("HTTP/1.1 304 Not Modified");
}