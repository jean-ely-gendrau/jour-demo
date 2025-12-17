<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Découvrez Tailwind CSS</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 min-h-screen">

    <!-- Header -->
    <header class="bg-white/10 backdrop-blur-md border-b border-white/20">
      <div class="container mx-auto px-4 py-6">
        <h1 class="text-4xl md:text-5xl font-bold text-white text-center">
          Découvrez Tailwind CSS
        </h1>
        <p class="text-gray-300 text-center mt-2">
          Le framework CSS moderne pour créer des interfaces rapidement
        </p>
      </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">

      <!-- Image Slider Section -->
      <section class="mb-16">
        <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl p-8 border border-white/20">
          <h2 class="text-3xl font-bold text-white mb-6 text-center">
            Galerie d'images
          </h2>

          <!-- Slider Container -->
          <div class="relative max-w-4xl mx-auto">
            <!-- Slides -->
            <div id="slider" class="relative overflow-hidden rounded-xl shadow-2xl aspect-video">
              <div class="slide active">
                  <img src="assets/img/histoire.png"
                     alt="Histoire de Tailwind CSS"
                     class="w-full h-full object-contain bg-white">
              </div>
              <div class="slide">
                  <img src="assets/img/bootstrap-vs-tailwindcss.png"
                     alt="Bootstrap vs Tailwind CSS"
                     class="w-full h-full object-contain bg-white">
              </div>
              <div class="slide">
                  <img src="assets/img/pourquoi-tailwindcss.png"
                     alt="Pourquoi Tailwind CSS"
                     class="w-full h-full object-contain bg-white">
              </div>
            </div>

            <!-- Navigation Buttons -->
            <button id="prevBtn"
                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 rounded-full p-3 shadow-lg transition-all duration-300 hover:scale-110 z-10">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
              </svg>
            </button>

            <button id="nextBtn"
                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 rounded-full p-3 shadow-lg transition-all duration-300 hover:scale-110 z-10">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </button>

            <!-- Indicators -->
            <div class="flex justify-center gap-2 mt-6">
              <button class="indicator active" data-slide="0"></button>
              <button class="indicator" data-slide="1"></button>
              <button class="indicator" data-slide="2"></button>
            </div>
          </div>
        </div>
      </section>

      <!-- Features Grid -->
      <section class="mb-16">
        <h2 class="text-3xl font-bold text-white mb-8 text-center">
          Pourquoi choisir Tailwind CSS ?
        </h2>

        <div class="grid md:grid-cols-3 gap-6">
          <!-- Card 1 -->
          <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105">
            <div class="text-4xl mb-4">⚡</div>
            <h3 class="text-xl font-bold text-white mb-2">Rapide</h3>
            <p class="text-gray-300">
              Développez vos interfaces en un temps record grâce aux classes utilitaires.
            </p>
          </div>

          <!-- Card 2 -->
          <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105">
            <div class="text-4xl mb-4">🎨</div>
            <h3 class="text-xl font-bold text-white mb-2">Personnalisable</h3>
            <p class="text-gray-300">
              Adaptez chaque aspect du design à vos besoins spécifiques.
            </p>
          </div>

          <!-- Card 3 -->
          <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105">
            <div class="text-4xl mb-4">📱</div>
            <h3 class="text-xl font-bold text-white mb-2">Responsive</h3>
            <p class="text-gray-300">
              Créez des designs adaptatifs pour tous les écrans facilement.
            </p>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="text-center">
        <div class="bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl p-8 shadow-2xl">
          <h2 class="text-3xl font-bold text-white mb-4">
            Prêt à commencer ?
          </h2>
          <p class="text-white/90 mb-6 text-lg">
            Rejoignez des milliers de développeurs qui utilisent Tailwind CSS
          </p>
          <button class="bg-white text-blue-600 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition-all duration-300 hover:scale-105 shadow-lg">
            Commencer maintenant
          </button>
        </div>
      </section>

    </main>

    <!-- Footer -->
    <footer class="bg-white/10 backdrop-blur-md border-t border-white/20 mt-16">
      <div class="container mx-auto px-4 py-6 text-center text-gray-300">
        <p>Créé avec Tailwind CSS - Exemple de démonstration</p>
      </div>
    </footer>

    <!-- Slider JavaScript -->
    <script>
      let currentSlide = 0;
      const slides = document.querySelectorAll('.slide');
      const indicators = document.querySelectorAll('.indicator');
      const totalSlides = slides.length;

      // Show specific slide
      function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(ind => ind.classList.remove('active'));

        slides[index].classList.add('active');
        indicators[index].classList.add('active');
      }

      // Next slide
      function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
      }

      // Previous slide
      function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
      }

      // Event listeners
      document.getElementById('nextBtn').addEventListener('click', nextSlide);
      document.getElementById('prevBtn').addEventListener('click', prevSlide);

      // Indicator clicks
      indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
          currentSlide = index;
          showSlide(currentSlide);
        });
      });
    </script>

    <style>
      .slide {
        display: none;
        animation: fadeIn 0.5s;
      }

      .slide.active {
        display: block;
      }

      @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
      }

      .indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        border: none;
        cursor: pointer;
        transition: all 0.3s;
      }

      .indicator.active {
        background-color: white;
        width: 32px;
        border-radius: 6px;
      }

      .indicator:hover {
        background-color: rgba(255, 255, 255, 0.8);
      }
    </style>

  </body>
</html>