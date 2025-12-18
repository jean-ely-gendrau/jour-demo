<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/app.css">
</head>
<body>
<header>
    <!-- Nav Bar -->
    <nav class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        
        <!-- Logo -->
        <div class="text-2xl font-bold">
            MonSite
        </div>
        
        <!-- Menu desktop -->
        <ul class="hidden md:flex gap-8">
            <li><a href="#" class="hover:underline">Accueil</a></li>
            <li><a href="#" class="hover:underline">Services</a></li>
            <li><a href="#" class="hover:underline">À propos</a></li>
            <li><a href="#" class="hover:underline">Contact</a></li>
        </ul>
        
        <!-- Bouton CTA -->
        <button class="hidden md:block bg-white text-blue-600
                       px-4 py-2 rounded-lg font-semibold
                       hover:bg-gray-100 transition">
            Connexion
        </button>
        
        <!-- Menu mobile (hamburger) -->
        <button class="md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" 
                      stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        
    </div>
</nav>
</header>

<!-- Hero -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white">
    <div class="container mx-auto px-4 py-24 text-center">
        
        <h1 class="text-6xl font-extrabold mb-6">
            Créez des sites web incroyables
        </h1>
        
        <p class="text-xl mb-10 max-w-3xl mx-auto">
            Tailwind CSS vous permet de créer des interfaces modernes
            et responsive en quelques minutes.
        </p>
        
        <div class="flex gap-4 justify-center">
            <button class="bg-white text-blue-600 px-8 py-4 rounded-lg
                           font-bold text-lg hover:bg-gray-100 transition
                           shadow-xl">
                Commencer gratuitement
            </button>
            <button class="border-2 border-white text-white px-8 py-4
                           rounded-lg font-bold text-lg
                           hover:bg-white hover:text-blue-600 transition">
                En savoir plus
            </button>
        </div>
        
    </div>
</section>

<!-- Card GRID -->
<div class="container mx-auto px-4 py-16">
    <h2 class="text-4xl font-bold text-center mb-12">Notre galerie</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Card 1 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden
                    hover:shadow-2xl hover:scale-105 transition duration-300">
            <img src="https://placehold.co/600x400?text=Projet\nHello\nWorld" 
                 class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">Projet 1</h3>
                <p class="text-gray-600">Description du projet...</p>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden
                    hover:shadow-2xl hover:scale-105 transition duration-300">
            <img src="https://placehold.co/600x400?text=Projet\nBoutique" 
                 class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">Projet 2</h3>
                <p class="text-gray-600">Description du projet...</p>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden
                    hover:shadow-2xl hover:scale-105 transition duration-300">
            <img src="https://placehold.co/600x400?text=Projet\nLa Plateforme_" 
                 class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">Projet 3</h3>
                <p class="text-gray-600">Description du projet...</p>
            </div>
        </div>
        
    </div>
</div>

<!-- Form CONTACT -->
<form class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-lg">
    <h2 class="text-3xl font-bold text-gray-900 mb-6">Contactez-nous</h2>
    
    <!-- Nom -->
    <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2">Nom</label>
        <input type="text" 
               class="w-full px-4 py-3 border-2 border-gray-300
                      rounded-lg focus:border-blue-500 focus:ring-2
                      focus:ring-blue-200 transition"
               placeholder="Votre nom">
    </div>
    
    <!-- Email -->
    <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2">Email</label>
        <input type="email" 
               class="w-full px-4 py-3 border-2 border-gray-300
                      rounded-lg focus:border-blue-500 focus:ring-2
                      focus:ring-blue-200 transition"
               placeholder="votre@email.com">
    </div>
    
    <!-- Message -->
    <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2">Message</label>
        <textarea rows="4"
                  class="w-full px-4 py-3 border-2 border-gray-300
                         rounded-lg focus:border-blue-500 focus:ring-2
                         focus:ring-blue-200 transition"
                  placeholder="Votre message..."></textarea>
    </div>
    
    <!-- Bouton -->
    <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white
                   font-bold py-3 rounded-lg transition">
        Envoyer
    </button>
</form>

<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            
            <!-- Colonne 1 : À propos -->
            <div>
                <h3 class="text-xl font-bold mb-4">MonSite</h3>
                <p class="text-gray-400">
                    Créez des sites web professionnels avec Tailwind CSS.
                    Rapide, moderne, responsive.
                </p>
            </div>
            
            <!-- Colonne 2 : Liens -->
            <div>
                <h3 class="text-xl font-bold mb-4">Navigation</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white
                              transition">Accueil</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white
                              transition">Services</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white
                              transition">Portfolio</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white
                              transition">Contact</a></li>
                </ul>
            </div>
            
            <!-- Colonne 3 : Contact -->
            <div>
                <h3 class="text-xl font-bold mb-4">Contact</h3>
                <p class="text-gray-400 mb-2">Email: contact@monsite.fr</p>
                <p class="text-gray-400 mb-4">Tel: 01 23 45 67 89</p>
                <div class="flex gap-4">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.6c-.9.4-1.8.7-2.8.8 1-.6 1.8-1.6 2.2-2.7-1 .6-2 1-3.1 1.2-.9-1-2.2-1.6-3.6-1.6-2.7 0-4.9 2.2-4.9 4.9 0 .4 0 .8.1 1.1C7.7 8.1 4.1 6.1 1.7 3.1c-.4.7-.6 1.6-.6 2.5 0 1.7.9 3.2 2.2 4.1-.8 0-1.6-.2-2.2-.6v.1c0 2.4 1.7 4.4 3.9 4.8-.4.1-.8.2-1.3.2-.3 0-.6 0-.9-.1.6 2 2.4 3.4 4.6 3.4-1.7 1.3-3.8 2.1-6.1 2.1-.4 0-.8 0-1.2-.1 2.2 1.4 4.8 2.2 7.5 2.2 9.1 0 14-7.5 14-14v-.6c1-.7 1.8-1.6 2.5-2.5z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
            © 2025 MonSite. Tous droits réservés.
        </div>
        
    </div>
</footer>
</body>
</html>
