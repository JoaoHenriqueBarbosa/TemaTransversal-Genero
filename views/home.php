<section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
  <div class="page-content">
    <!-- Depoimentos -->
    <div class="config mdl-card section--center mdl-grid mdl-grid--no-spacing">
      <form action="">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
          <input type="radio" id="option-1" class="mdl-radio__button" name="filtro" value="relevancia">
          <span class="mdl-radio__label">Relevância</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2" style="margin-left: 10px;">
          <input type="radio" id="option-2" class="mdl-radio__button" name="filtro" value="data">
          <span class="mdl-radio__label">Data</span>
        </label>
        <input type="submit" value="Filtrar" style="margin-left: 10px;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
        </form>
    </div>
    <?php for ($i=0; $i < 6; $i++): ?>
    <div class="janx-card-wide mdl-card section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h1 class="mdl-card__title-text">Depoimento</h1>
      </div>
      <div class="mdl-card__subtitle">
        <p class="datahora">Segunda-Feira, 27 de agosto de 2018</p>
      </div>
      <div class="mdl-card__supporting-text">
        Este é um depoimento, ao lado você pode classificar como mais ou menos relevante.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
        Compartilhar
        </a>
      </div>
      <div class="mdl-card__menu">
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">arrow_upward</i>
        </button>
        <div>152</div>
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">arrow_downward</i>
        </button>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</section>
<section class="mdl-layout__tab-panel" id="fixed-tab-2">
  <div class="page-content">
    <!-- Profissionais -->
    <div class="config mdl-card section--center mdl-grid mdl-grid--no-spacing">
      <form action="">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
          <input type="radio" id="option-1" class="mdl-radio__button" name="filtro" value="relevancia">
          <span class="mdl-radio__label">Relevância</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2" style="margin-left: 10px;">
          <input type="radio" id="option-2" class="mdl-radio__button" name="filtro" value="data">
          <span class="mdl-radio__label">Data</span>
        </label>
        <input type="submit" value="Filtrar" style="margin-left: 10px;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
        </form>
    </div>
    <?php for ($i=0; $i < 6; $i++): ?>
    <div class="janx-card-wide mdl-card section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h1 class="mdl-card__title-text">Artigo</h1>
      </div>
      <div class="mdl-card__subtitle">
        <h2 class="mdl-card__subtitle-text">por <a href="">Profissional</a></h2>
        <p class="datahora">Segunda-Feira, 27 de agosto de 2018</p>
      </div>
      <div class="mdl-card__supporting-text">
        Este é um artigo, ao lado você pode classificar como mais ou menos relevante.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
        Compartilhar
        </a>
      </div>
      <div class="mdl-card__menu">
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">arrow_upward</i>
        </button>
        <div>152</div>
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">arrow_downward</i>
        </button>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</section>
<section class="mdl-layout__tab-panel" id="fixed-tab-3">
  <div class="page-content">
  <!-- Explore -->

  </div>
</section>