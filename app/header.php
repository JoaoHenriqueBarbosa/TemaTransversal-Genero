<!DOCTYPE html>
<html>
  <head>
  	<title><?= APP_NAME ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Material Design Remoto -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-red.min.css">
    <!-- Fonte e icones Material Design -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
  </head>
  <body>
  <!-- Header com tabs fixadas -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
              mdl-layout--fixed-tabs">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Título -->
          <span class="mdl-layout-title"><?= APP_NAME ?></span>
          <div class="mdl-layout-spacer"></div>
	      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
	                  mdl-textfield--floating-label mdl-textfield--align-right">
	        <label class="mdl-button mdl-js-button mdl-button--icon"
	               for="waterfall-exp">
	          <i class="material-icons">search</i>
	        </label>
	        <div class="mdl-textfield__expandable-holder">
	          <input class="mdl-textfield__input" type="text" name="sample"
	                 id="waterfall-exp">
	        </div>
	      </div>
        </div>
        <?php if ($home): ?>
        <!-- Tabs -->
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
          <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Depoimentos</a>
          <a href="#fixed-tab-2" class="mdl-layout__tab">Profissionais</a>
          <a href="#fixed-tab-3" class="mdl-layout__tab">Explore</a>
        </div>
        <?php endif ?>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Menu</span>
        <nav class="mdl-navigation" >
          <ul class="lista-menu">
            <li>
              <a class="mdl-navigation__link" href="">
                <i class="material-icons">local_post_office</i> 
                &nbsp;Deixe seu depoimento
              </a>
            </li>
            <li>
              <a class="mdl-navigation__link" href="">
                <i class="material-icons">edit</i> 
                &nbsp;Responda a nossa pesquisa
              </a>
            </li>
            <li>
              <a class="mdl-navigation__link" href="">
                <i class="material-icons">share</i> 
                &nbsp;Compartilhe
              </a>
            </li>
            <li>
              <a class="mdl-navigation__link" href="">
                <i class="material-icons">home</i> 
                &nbsp;Univale
              </a>
            </li>
          </ul>
          
          
        </nav>
      </div>
      <main class="mdl-layout__content">