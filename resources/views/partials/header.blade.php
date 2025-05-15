<header>
    <div class="container">
        <div class="logo-box">
            <img src="{{ asset('logo.jpg') }}" alt="Logo" class="logo">
            <button class="menu-toggle" id="menu-toggle">
                <i class='bx  bx-menu'  ></i> 
            </button>
        </div>
        <nav class="mobile-hidden">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a></li>
                <li><a href="{{ route('community') }}" class="{{ request()->routeIs('community') ? 'active' : '' }}">Communauté</a></li>
                <li><a href="{{ route('meditation') }}" class="{{ request()->routeIs('meditation') ? 'active' : '' }}">Méditation</a></li>
                <li><a href="{{ route('multimedia') }}" class="{{ request()->routeIs('multimedia') ? 'active' : '' }}">Multimédia</a></li>
            </ul>
        </nav>
    </div>
</header>

<style>
    header {
        background-color: var(--primary-color);
        color: var(--background-color);
        position: sticky;
        top: 0;
    }

    header > .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    header nav ul {
        list-style: none;
        display: flex;
        gap: 20px;
    }

    header nav ul li a {
        color: var(--background-color);
        text-decoration: none;
        padding-bottom: 3px
    }

    header nav ul li a.active {
        font-weight: bold;
        border-bottom: 2px solid var(--secondary-color);
    }

    header .logo-box {
        height: 70px;
    }

    header .logo {
        height: 100%;
        width: auto;
    }

    header .menu-toggle {
        display: none;
        background: none;
        border: solid 1px var(--background-color);
        border-radius: 5px;
        aspect-ratio: 1;
        font-size: 24px;
        color: var(--background-color);
        transition: background-color 0.3s ease;
    }

    header .menu-toggle:hover {
        background-color: var(--secondary-color);
        color: var(--primary-color);
        transition: background-color 0.3s ease;
    }

    header nav {
        transition: height 0.3s ease;
    }

    @media (max-width: 768px) {
        header > .container {
            flex-direction: column;
            align-items: flex-start;
        }

        header nav ul {
            flex-direction: column;
            gap: 10px;
        }
        header .menu-toggle {
            display: block;
        }

        header .logo-box {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 10px 0;
        }

        header nav ul li {
            margin-bottom: 10px;
        }

        header nav.mobile-hidden {
            height: 0;
            overflow: hidden;
            transition: height 0.3s ease;
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
    });
</script>