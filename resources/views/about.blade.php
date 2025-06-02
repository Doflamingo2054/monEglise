<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.global-style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>About</title>
</head>
<body>
    @include('partials.header')
    <main>
        <section class="container">
            <h2 class="font-bold">
                HISTORIQUE
            </h2>
            <div class="fontb">
                <p>Historiquement, l’Eglise Méthodiste est née du réveil de quatre (4) jeunes gens au plus fort de la décadence des mœurs en Angleterre, au 18e Siècle.</p> <br>
                <p>En Côte d’Ivoire, ce renouveau spirituel est marqué par le passage de <strong>Williams Wade HARRIS en 1914</strong>. L’Eglise protestante méthodiste connaitra plus tard des épiphénomènes au travers des chorales dans la région du sud. Dans les années 80, lors des différents camps bibliques Accepcistes qui avaient comme aumônier <strong>le Pasteur Benjamin BONI</strong>, ce réveil se fera sentir au travers des charismes (1 Corinthiens12). A la suite donc, on passera progressivement des camps bibliques à quelques églises de l’ancien circuit d’Abidjan-Nord (Yopougon, Adjamé, Cocody, Abobo, Attécoubé).</p><br>
                <p>Des églises telles que 220 Logements, avec des doyens comme Eugène KOUADIO Jacob Koutouan ; Yopougon Horeb avec MELESS Bernardin seront les églises phares. C’est avec <strong>le Pasteur feu FATTOH</strong> qu’on assistera à la formation d’un groupe de prière à <strong>Adjamé-Ebenezer</strong>.</p><br>
                <p>Le besoin et la soif des protestants méthodistes favoriseront la formation de plusieurs groupes, échappant au contrôle de l’Eglise. On parlera de mouvements charismatiques. Ces mouvements mal compris seront combattus. On dira par exemple « Nouveau Dieu », « ça ce n’est pas méthodiste ». Loin d’un découragement, ce mouvement va connaitre une ascension fulgurante, attirera plusieurs frères des autres communautés et suscitera plusieurs vocations en dehors de l’Eglise dans les années 90.</p><br>
                <p>Face à la nécessité et à la réalité, le corps pastoral se réunira à Bouaké en l’an 2000 et jettera les bases officielles du mouvement charismatique. On parlera alors de réveil méthodiste.</p><br>
                <p>Plusieurs pasteurs se sont succédé, <strong>les Révérends DIARRAH, NDE Moïse, Isaac AKA, GBATTE Koudou et dépuis Octobre 2013 , l'Aumonier est le Rev Pasteur BECKEN KOKOBE</strong>.</p><br>
            </div>
        </section>
        <section class="container">
            <h2 class="font-bold">PRÉSENTATION</h2>
            <div class="fontb">
                <p>Pour une meilleure exécution du cahier de charges, le Mouvement de Réveil au plan National se dote des structures suivantes :</p><br>
                <ul class="list-disc pl-5 text-gray-700 space-y-2 px-5">
                    <li>Le secrétariat</li>
                    <li>La cellule de communication</li>
                    <li>La cellule d'intercession</li>
                    <li>La cellule de délivrance</li>
                    <li>La cellule de cure d’âme</li>
                    <li>La cellule de la relation d’aide</li>
                    <li>La cellule affermissement</li>
                    <li>La cellule gestion des talents et dons spirituels</li>
                    <li>La cellule formation et évaluation</li>
                    <li>La cellule des commandos</li>
                    <li>La cellule louange</li>
                    <li>La cellule organisation</li>
                    <li>La cellule trésorerie et assistance social</li>
                    <li>La cellule de suivi des âme</li>
                </ul> 
                <br>
                <p>Ces différentes structures doivent permettre à chaque fidèle méthodiste d’aimer son église et de trouver ce dont il a besoin pour son épanouissement spirituel au sein de son église.</p>
            </div>
        </section>
    </main>

    @include('partials.footer')

    <style>
        main {
            min-height: 100vh;
        }

        h2 {
            margin-bottom: 20px;
            margin-top: 30px;
            font-size: 24px;
            color: var(--primary-color);
        }
    
    </style>

    <script>
    </script>


</body>
</html>
