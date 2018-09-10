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
    <div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
      <ul class="details">
        <li class="author"><a href="#">John Doe</a></li>
        <li class="date">Aug. 24, 2015</li>
        <li class="tags">
          <ul>
            <li><a href="#">Learn</a></li>
            <li><a href="#">Code</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>Learning to Code</h1>
      <h2>Opening a door to the future</h2>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-2.jpg)"></div>
      <ul class="details">
        <li class="author"><a href="#">Jane Doe</a></li>
        <li class="date">July. 15, 2015</li>
        <li class="tags">
          <ul>
            <li><a href="#">Learn</a></li>
            <li><a href="#">Code</a></li>
            <li><a href="#">JavaScript</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>Mastering the Language</h1>
      <h2>Java is not the same as JavaScript</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  </div>
</section>
<section class="mdl-layout__tab-panel" id="fixed-tab-3">
  <div class="page-content">
  <!-- Explore -->
  <div class="mdl-cell mdl-cell--6-col infocus-img-card mdl-cell--4-col-tablet mdl-cell--12-col-mobile">
          
            
          <div class=" rw-card rw-card--media rw-card--media-full mdl-card mdl-shadow--2dp">
            <div class="rw-card__img-container bg-img-clickable" data-img="//lh3.googleusercontent.com/H-OFG3TFG4VaLZArWdzlCfU-6FHu7F03YJ5nAriNzvw7rUdpwYMroxfGnJ7gMaybwVKVm0tUjCN6OnH-ubX1rMg=w1614" alt="Great managers still matter: the evolution of Google’s Project Oxygen" data-href="/blog/the-evolution-of-project-oxygen/" style="background-image: url(&quot;//lh3.googleusercontent.com/H-OFG3TFG4VaLZArWdzlCfU-6FHu7F03YJ5nAriNzvw7rUdpwYMroxfGnJ7gMaybwVKVm0tUjCN6OnH-ubX1rMg=w1614&quot;);">
            </div>
            <div class="rw-card__content">
              <h2 class="rw-card__title">
                <a href="/blog/the-evolution-of-project-oxygen/">Great managers still matter: the evolution of Google’s Project Oxygen</a>
              </h2>
              <div class="rw-card__body">
                <a href="/blog/the-evolution-of-project-oxygen/">
                  Google has learned more about managers since the original Project Oxygen research study in 2008. As the company has grown, we found that Googlers r...
                </a>
              </div>
              <div class="rw-card__actions">
                <span class="rw-card__meta rw-card__meta--blogpost">
                  <i class="material-icons">create</i> Blog
                </span>
              </div>
            </div>
          </div>
          
                    
                  </div>
  </div>
</section>