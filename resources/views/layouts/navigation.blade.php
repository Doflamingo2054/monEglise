<nav class="bg-white shadow">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center h-16">
      <!-- Gauche : Logo / Nom de l'app -->
      <div class="flex-shrink-0">
        <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600">
          Logo
        </a>
    </div>
      <!-- Partie droite -->
    <div class="flex items-center space-x-4">
      
      @guest
      <div class="hidden sm:flex space-x-4">
       <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
      <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
      </svg>
      Accueil
      </a>

        <!-- Agenda -->
        <a href="{{ route('events.index') }}" 
          class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
          <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
          Agenda
        </a>

        <!-- Espace Méditation dropdown -->
        <div class="relative group">
          <button class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v.01M12 12v.01M12 16v.01M9 20h6M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Méditation
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg z-50 hidden group-hover:block">
            <a href="{{ route('prayers.index') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Mur des prières</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Verset du jour</a>
          </div>
        </div>

        <!-- Communauté dropdown -->
        <div class="relative group">
          <button class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Communauté
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg z-50 hidden group-hover:block">
            <a href="{{ route('testimonies.index') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Témoignages</a>
            <a href="{{ route('multimedia.index') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Médias</a>
          </div>
        </div>

         <!-- Faire un don -->
        <a href="https://ta-api-paymoney..." 
          class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
          <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          Faire un don
        </a>

        <a href="/contact" 
          class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
          <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
          </svg>
          Contact
        </a>

        <div class="flex space-x-4">
          <a href="{{ route('login') }}" class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
            </svg>
            Connexion
          </a>  

          <a href="{{ route('register') }}" class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
            </svg>
            Inscription
          </a>
        </div>
      @endguest
      </div>
      <!-- Déconnexion -->
    @auth
    <div class="hidden sm:flex space-x-4">
       <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
      <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
      </svg>
      Accueil
      </a>

        <!-- Agenda -->
        <a href="{{ route('events.index') }}" 
          class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
          <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
          Agenda
        </a>

        <!-- Espace Méditation dropdown -->
        <div class="relative group">
          <button class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v.01M12 12v.01M12 16v.01M9 20h6M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Méditation
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg z-50 hidden group-hover:block">
            <a href="{{ route('prayers.index') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Mur des prières</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Verset du jour</a>
          </div>
        </div>

        <!-- Communauté dropdown -->
        <div class="relative group">
          <button class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Communauté
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg z-50 hidden group-hover:block">
            <a href="{{ route('testimonies.index') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Témoignages</a>
            <a href="{{ route('multimedia.index') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Médias</a>
          </div>
        </div>

         <!-- Faire un don -->
        <a href="https://ta-api-paymoney..." 
          class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
          <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          Faire un don
        </a>

        <a href="/contact" 
          class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
          <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
          </svg>
          Contact
        </a>

        <div class="flex space-x-4">
          <a href="{{ route('login') }}" class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
            </svg>
            Connexion
          </a>  

          <a href="{{ route('register') }}" class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
            </svg>
            Inscription
          </a>
        </div>
    <form method="POST" action="{{ route('logout') }}" class="inline">
      @csrf
      <button type="submit" 
             class="px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 transition-colors flex items-center">
        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
        </svg>
        Déconnexion
      </button>
    </form>
    @endauth

      </div>

      <!-- Centre : Liens de navigation -->
      <div class="hidden md:flex space-x-4">
        @auth
          <a href="{{ route(auth()->user()->role === 'admin' ? 'admin.dashboard' : 'dashboard') }}"
             class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-100">
            Accueil
          </a>
          @if(auth()->user()->role === 'admin')
            <a href="{{ route('admin.events.index') }}"
               class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-100">
              Événements
            </a>
            <a href="{{ route('admin.prayers.index') }}"
               class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-100">
              Gestion Prières
            </a>
            <a href="{{ route('admin.testimonies.index') }}"
               class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-100">
              Gestion Témoignages
            </a>
          @else
            <a href="{{ route('prayers.index') }}"
               class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-100">
              Mur des Prières
            </a>
            <a href="{{ route('testimonies.index') }}"
               class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-100">
              Témoignages
            </a>
            <a href="{{ route('multimedia.index') }}"
               class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-100">
              Médias
            </a>
          @endif
        @endauth
        @guest
          <a href="{{ route('login') }}"
             class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-100">
            Connexion
          </a>
          <a href="{{ route('register') }}"
             class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-100">
            Inscription
          </a>
        @endguest
      </div>

      <!-- Droite : Utilisateur & Déconnexion -->
      @auth
      <div class="hidden md:flex items-center space-x-4">
        <span class="text-sm">{{ auth()->user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit"
                  class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-100">
            Déconnexion
          </button>
        </form>
      </div>
      @endauth

    <!-- Mobile menu -->
    <div class="md:hidden hidden" id="nav-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        @auth
          <a href="{{ route(auth()->user()->role === 'admin' ? 'admin.dashboard' : 'dashboard') }}"
             class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">
            Accueil
          </a>

           <a href="{{ route('events.index') }}"
             class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-100">
            Agenda
          </a>
          
          @if(auth()->user()->role === 'admin')
            <a href="{{ route('admin.events.index') }}" class="block px-3 py-2 rounded-md">Événements</a>
            <a href="{{ route('admin.prayers.index') }}" class="block px-3 py-2 rounded-md">Gestion Prières</a>
            <a href="{{ route('admin.testimonies.index') }}" class="block px-3 py-2 rounded-md">Gestion Témoignages</a>
          @else
            <a href="{{ route('prayers.index') }}" class="block px-3 py-2 rounded-md">Mur des Prières</a>
            <a href="{{ route('testimonies.index') }}" class="block px-3 py-2 rounded-md">Témoignages</a>
            <a href="{{ route('multimedia.index') }}" class="block px-3 py-2 rounded-md">Médias</a>
          @endif
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left px-3 py-2 rounded-md">Déconnexion</button>
          </form>
        @endauth
        @guest
          <a href="{{ route('login') }}" class="block px-3 py-2 rounded-md">Connexion</a>
          <a href="{{ route('register') }}" class="block px-3 py-2 rounded-md">Inscription</a>
        @endguest
      </div>
    </div>
  </div>
</nav>
