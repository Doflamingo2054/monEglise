<header>
    <div class="container">
        <div class="logo-box">
            <a href="{{ route('home') }}" class="logo-link" aria-label="Accueil">
                <img src="{{ asset('logo.jpg') }}" alt="Logo de l'église" class="logo">
                <span class="church-name">Église Espoir & Lumière</span>
            </a>
        </div>
        <form class="header-search" action="{{ route('search') }}" method="GET">
            <input type="text" name="q" placeholder="Rechercher..." aria-label="Recherche">
            <button type="submit" aria-label="Rechercher"><i class='bx bx-search'></i></button>
        </form>
        <nav class="mobile-hidden" aria-label="Navigation principale">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"><i class='bx bx-home'></i> Accueil</a></li>
                <li><a href="{{ route('community') }}" class="{{ request()->routeIs('community') ? 'active' : '' }}"><i class='bx bx-group'></i> Communauté</a></li>
                <li><a href="{{ route('meditation') }}" class="{{ request()->routeIs('meditation') ? 'active' : '' }}"><i class='bx bx-book-open'></i> Méditation</a></li>
                <li><a href="{{ route('multimedia') }}" class="{{ request()->routeIs('multimedia') ? 'active' : '' }}"><i class='bx bx-play-circle'></i> Multimédia</a></li>
            </ul>
        </nav>
        <div class="header-social">
            <a href="#" aria-label="Facebook"><i class='bx bxl-facebook'></i></a>
            <a href="#" aria-label="Instagram"><i class='bx bxl-instagram'></i></a>
            <a href="#" aria-label="YouTube"><i class='bx bxl-youtube'></i></a>
        </div>
        <button class="menu-toggle" id="menu-toggle" aria-label="Ouvrir le menu">
            <i class='bx bx-menu'></i>
        </button>
    </div>
</header>

<style>
    @import url('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css');

    :root {
        --primary-color: #3a5a40;
        --secondary-color: #a3b18a;
        --accent-color: #f9f9f9;
        --background-color: #fff;
        --shadow-color: rgba(60, 60, 60, 0.08);
        --header-gradient: linear-gradient(90deg, #3a5a40 60%, #a3b18a 100%);
    }

    header {
        background: #3a5a40;
        color: var(--background-color);
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 8px var(--shadow-color);
    }

    header > .container {
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 90px;
        gap: 18px;
    }

    .logo-box {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .logo-link {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
    }

    .logo {
        height: 56px;
        width: 56px;
        object-fit: contain;
        border-radius: 50%;
        background: var(--accent-color);
        box-shadow: 0 2px 8px var(--shadow-color);
        border: 2px solid var(--secondary-color);
    }

    .church-name {
        font-family: 'Segoe UI', 'Arial', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--accent-color);
        letter-spacing: 1px;
        text-shadow: 0 1px 4px rgba(0,0,0,0.08);
    }

    .header-search {
        display: flex;
        align-items: center;
        background: #fff;
        border-radius: 24px;
        box-shadow: 0 1px 4px var(--shadow-color);
        padding: 2px 8px;
        margin: 0 12px;
    }
    .header-search input {
        border: none;
        outline: none;
        padding: 7px 10px;
        border-radius: 24px;
        font-size: 1rem;
        background: transparent;
        color: #333;
        width: 120px;
        transition: width 0.3s;
    }
    .header-search input:focus {
        width: 180px;
    }
    .header-search button {
        background: none;
        border: none;
        color: var(--primary-color);
        font-size: 1.3rem;
        cursor: pointer;
        padding: 0 6px;
    }

    nav {
        transition: height 0.3s ease;
    }

    nav ul {
        list-style: none;
        display: flex;
        gap: 28px;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        display: flex;
        align-items: center;
    }

    nav ul li a {
        color: var(--accent-color);
        text-decoration: none;
        font-size: 1.08rem;
        font-weight: 500;
        padding: 8px 0;
        border-bottom: 2px solid transparent;
        transition: color 0.2s, border-bottom 0.2s;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    nav ul li a.active,
    nav ul li a:hover,
    nav ul li a:focus {
        color: var(--secondary-color);
        border-bottom: 2px solid var(--secondary-color);
        outline: none;
    }

    .header-social {
        display: flex;
        gap: 10px;
    }
    .header-social a {
        color: var(--accent-color);
        font-size: 1.4rem;
        transition: color 0.2s;
    }
    .header-social a:hover {
        color: #ffe066;
    }

    .menu-toggle {
        display: none;
        background: var(--secondary-color);
        border: none;
        border-radius: 6px;
        padding: 8px 12px;
        font-size: 28px;
        color: var(--primary-color);
        cursor: pointer;
        transition: background 0.2s, color 0.2s;
        margin-left: 10px;
    }
    .menu-toggle:hover, .menu-toggle:focus {
        background: var(--accent-color);
        color: var(--secondary-color);
        outline: none;
    }

    @media (max-width: 1100px) {
        .header-search { display: none; }
        nav ul { gap: 16px; }
        .church-name { font-size: 1.1rem; }
    }
    @media (max-width: 900px) {
        header > .container {
            padding: 0 10px;
            gap: 8px;
        }
        .header-social { display: none; }
    }
    @media (max-width: 768px) {
        header > .container {
            flex-direction: column;
            align-items: stretch;
            height: auto;
            padding: 0 8px;
            gap: 0;
        }
        .logo-box {
            justify-content: space-between;
            width: 100%;
            height: 70px;
        }
        .menu-toggle {
            display: block;
        }
        nav {
            width: 100%;
        }
        nav ul {
            flex-direction: column;
            gap: 0;
            width: 100%;
            background: var(--header-gradient);
            box-shadow: 0 2px 8px var(--shadow-color);
            border-radius: 0 0 12px 12px;
            margin-top: 0;
        }
        nav ul li {
            width: 100%;
        }
        nav ul li a {
            display: block;
            width: 100%;
            padding: 14px 18px;
            font-size: 1.08rem;
            border-bottom: 1px solid var(--secondary-color);
        }
        nav ul li:last-child a {
            border-bottom: none;
        }
        nav.mobile-hidden {
            height: 0;
            overflow: hidden;
            padding: 0;
            border: none;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menu-toggle');
        const nav = document.querySelector('nav');
        menuToggle.addEventListener('click', function() {
            nav.classList.toggle('mobile-hidden');
        });
        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                if (!nav.contains(e.target) && !menuToggle.contains(e.target)) {
                    nav.classList.add('mobile-hidden');
                }
            }
        });
    });
</script>