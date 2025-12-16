  <!DOCTYPE html>
  <html>

  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body class="brown lighten-5">
    <header>
      <nav class="brown darken-3">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">Café Délice</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="./parallax-template">Stater-Template</a></li>
            <li><a href="./starter-template">Parallax-Template</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <main class="container">
      <!-- section + row suffisent ; Materialize gère les gutters -->
      <section class="section">
        <div class="row">

          <!-- Deux grandes cartes en premier -->
          <article class="col s12 m6">
            <div class="card hoverable large">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator responsive-img" src="assets/img/pexels-chevanon-302899.jpg" alt="Tasse de café expresso">
              </div>
              <div class="card-content">
                <span class="card-title activator brown-text text-darken-4">
                  Expresso Artisanal
                  <i class="material-icons right" aria-hidden="true">more_vert</i>
                </span>
                <p><a href="#" class="brown-text text-darken-2">En savoir plus</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title brown-text text-darken-4">
                  Expresso Artisanal
                  <i class="material-icons right" aria-hidden="true">close</i>
                </span>
                <p>Un café expresso intense et aromatique, préparé avec des grains fraîchement moulus pour une expérience authentique.</p>
              </div>
            </div>
          </article>

          <article class="col s12 m6">
            <div class="card hoverable large">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator responsive-img" src="assets/img/pexels-chevanon-302896.jpg" alt="Cappuccino avec latte art">
              </div>
              <div class="card-content">
                <span class="card-title activator brown-text text-darken-4">
                  Cappuccino Crémeux
                  <i class="material-icons right" aria-hidden="true">more_vert</i>
                </span>
                <p><a href="#" class="brown-text text-darken-2">En savoir plus</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title brown-text text-darken-4">
                  Cappuccino Crémeux
                  <i class="material-icons right" aria-hidden="true">close</i>
                </span>
                <p>Un délicieux cappuccino avec une mousse de lait onctueuse et un latte art soigné pour ravir vos papilles.</p>
              </div>
            </div>
          </article>

          <!-- 1 par ligne en mobile, 2 en tablette, 3 en desktop, 4 en très grand écran -->
          <article class="col s12 m6 l4 xl3">
            <div class="card hoverable">
              <div class="card-image waves-effect waves-block waves-light">
                <!-- alt + responsive-img pour accessibilité et responsive -->
                <img class="activator responsive-img" src="assets/img/pexels-jayoke-851555.jpg" alt="Café latte macchiato">
              </div>

              <div class="card-content">
                <span class="card-title activator brown-text text-darken-4">
                  Latte Macchiato
                  <i class="material-icons right" aria-hidden="true">more_vert</i>
                </span>

                <p><a href="#" class="brown-text text-darken-2">Découvrir</a></p>
              </div>

              <div class="card-reveal">
                <span class="card-title brown-text text-darken-4">
                  Latte Macchiato
                  <i class="material-icons right" aria-hidden="true">close</i>
                </span>
                <p>Un latte macchiato onctueux avec ses trois couches distinctes de lait, café et mousse.</p>
              </div>
            </div>
          </article>

          <article class="col s12 m6 l4 xl3">
            <div class="card hoverable">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator responsive-img" src="assets/img/pexels-igor-haritanovich-814387-1695052.jpg" alt="Café americano">
              </div>
              <div class="card-content">
                <span class="card-title activator brown-text text-darken-4">
                  Café Americano
                  <i class="material-icons right" aria-hidden="true">more_vert</i>
                </span>
                <p><a href="#" class="brown-text text-darken-2">Découvrir</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title brown-text text-darken-4">
                  Café Americano
                  <i class="material-icons right" aria-hidden="true">close</i>
                </span>
                <p>Un café americano allongé, parfait pour ceux qui apprécient un café plus doux et moins concentré.</p>
              </div>
            </div>
          </article>

          <article class="col s12 m6 l4 xl3">
            <div class="card hoverable">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator responsive-img" src="assets/img/pexels-goumbik-317377.jpg" alt="Café moka">
              </div>
              <div class="card-content">
                <span class="card-title activator brown-text text-darken-4">
                  Moka Chocolaté
                  <i class="material-icons right" aria-hidden="true">more_vert</i>
                </span>
                <p><a href="#" class="brown-text text-darken-2">Découvrir</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title brown-text text-darken-4">
                  Moka Chocolaté
                  <i class="material-icons right" aria-hidden="true">close</i>
                </span>
                <p>Un délicieux moka alliant café expresso et chocolat noir pour une expérience gourmande.</p>
              </div>
            </div>
          </article>

          <article class="col s12 m6 l4 xl3">
            <div class="card hoverable">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator responsive-img" src="assets/img/pexels-chevanon-302899.jpg" alt="Café flat white">
              </div>
              <div class="card-content">
                <span class="card-title activator brown-text text-darken-4">
                  Flat White
                  <i class="material-icons right" aria-hidden="true">more_vert</i>
                </span>
                <p><a href="#" class="brown-text text-darken-2">Découvrir</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title brown-text text-darken-4">
                  Flat White
                  <i class="material-icons right" aria-hidden="true">close</i>
                </span>
                <p>Un flat white australien avec un équilibre parfait entre café et lait micro-moussé.</p>
              </div>
            </div>
          </article>

        </div>
      </section>
    </main>

    <!-- ===== FOOTER : Pied de page avec infos et liens ===== -->
    <footer class="page-footer brown darken-3"> <!-- page-footer = style Materialize avec padding -->
      <div class="container">
        <div class="row">
          <!-- Colonne gauche : Présentation (50% desktop, 100% mobile) -->
          <div class="col l6 s12">
            <h5 class="white-text">Café Délice</h5>
            <p class="brown-text text-lighten-4">Découvrez notre sélection de cafés artisanaux préparés avec passion et savoir-faire.</p>
          </div>

          <!-- Colonne droite : Navigation (33% desktop décalée, 100% mobile) -->
          <div class="col l4 offset-l2 s12"> <!-- offset-l2 = décalage de 2 colonnes sur desktop -->
            <h5 class="white-text">Navigation</h5>
            <ul>
              <li><a class="brown-text text-lighten-4" href="index.php">Notre Carte</a></li>
              <li><a class="brown-text text-lighten-4" href="index.php">Nos Origines</a></li>
              <li><a class="brown-text text-lighten-4" href="index.php">Barista's Choice</a></li>
              <li><a class="brown-text text-lighten-4" href="index.php">Torréfaction</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Barre copyright (fond plus foncé) -->
      <div class="footer-copyright brown darken-4">
        <div class="container">
          © 2025 Café Délice - Tous droits réservés
          <a class="brown-text text-lighten-3 right" href="index.php">Accueil</a>
        </div>
      </div>
    </footer>

    <!-- ===== SCRIPTS : jQuery + Materialize JS pour les animations ===== -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>

  </html>