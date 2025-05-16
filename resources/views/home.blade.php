<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.global-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Accueil</title>
</head>
<body>
    @include('partials.header')
    <main>
        <!-- Alert Widget -->
        <div class="container mb-4">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Nouveau :</strong> Retrouvez nos cultes en ligne chaque dimanche à 10h !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
            </div>
        </div>

        <!-- About Section -->
        <section id="about" class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('faith.jpg') }}" alt="Église" class="img-fluid rounded shadow-lg">
                </div>
                <div class="col-md-6">
                    <h2>Qui sommes-nous ?</h2>
                    <p>
                        Nous sommes une église accueillante, engagée à partager l'amour de Dieu et à servir notre communauté. 
                        Rejoignez-nous pour nos cultes, nos activités et nos moments de partage.
                    </p>
                    <a href="/about" class="btn btn-outline-secondary mt-2">Découvrir notre histoire</a>
                </div>
            </div>
        </section>

        <!-- Values Widget as Cards -->
        <section class="values-section py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Nos valeurs</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body">
                                <i class="bi bi-heart-fill icon-lg text-danger mb-2"></i>
                                <h5 class="card-title">Amour</h5>
                                <p class="card-text">Nous croyons que l'amour de Dieu transforme les vies et unit notre communauté.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body">
                                <i class="bi bi-people-fill icon-lg text-primary mb-2"></i>
                                <h5 class="card-title">Partage</h5>
                                <p class="card-text">Le partage et la solidarité sont au cœur de nos actions et de notre mission.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body">
                                <i class="bi bi-lightbulb-fill icon-lg text-warning mb-2"></i>
                                <h5 class="card-title">Espérance</h5>
                                <p class="card-text">Nous portons un message d'espérance pour tous, quels que soient les défis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Events Section with Accordion -->
        <section id="events" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Nos prochains événements</h2>
                <div class="accordion" id="eventsAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#event1" aria-expanded="true">
                                Culte du dimanche
                            </button>
                        </h2>
                        <div id="event1" class="accordion-collapse collapse show" data-bs-parent="#eventsAccordion">
                            <div class="accordion-body">
                                Chaque dimanche à 10h00. Venez vivre un temps de louange et d'enseignement.
                                <span class="badge bg-primary ms-2">Dimanche</span>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#event2">
                                Groupe de prière
                            </button>
                        </h2>
                        <div id="event2" class="accordion-collapse collapse" data-bs-parent="#eventsAccordion">
                            <div class="accordion-body">
                                Rejoignez notre groupe de prière chaque mercredi à 19h00.
                                <span class="badge bg-success ms-2">Mercredi</span>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#event3">
                                Atelier jeunesse
                            </button>
                        </h2>
                        <div id="event3" class="accordion-collapse collapse" data-bs-parent="#eventsAccordion">
                            <div class="accordion-body">
                                Des activités pour les jeunes chaque samedi après-midi.
                                <span class="badge bg-warning text-dark ms-2">Samedi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest Sermons Widget as Cards -->
        <section class="sermons-section py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Derniers messages</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card sermon-card h-100 shadow-sm">
                            <div class="card-body">
                                <h6 class="text-primary">La foi qui déplace les montagnes</h6>
                                <p class="small text-muted mb-1">Pasteur Jean, 12 mai 2025</p>
                                <p>Découvrez comment la foi peut transformer votre vie quotidienne.</p>
                                <a href="#" class="btn btn-link p-0">Écouter</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card sermon-card h-100 shadow-sm">
                            <div class="card-body">
                                <h6 class="text-primary">Vivre dans la paix</h6>
                                <p class="small text-muted mb-1">Pasteure Marie, 5 mai 2025</p>
                                <p>Un message inspirant sur la paix intérieure et la confiance en Dieu.</p>
                                <a href="#" class="btn btn-link p-0">Écouter</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card sermon-card h-100 shadow-sm">
                            <div class="card-body">
                                <h6 class="text-primary">L'espérance au quotidien</h6>
                                <p class="small text-muted mb-1">Pasteur Paul, 28 avril 2025</p>
                                <p>Comment garder l'espérance dans les moments difficiles.</p>
                                <a href="#" class="btn btn-link p-0">Écouter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('partials.footer')
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/hero-bg.jpg') }}') center/cover no-repeat;
        }
        .icon-lg {
            font-size: 2.5rem;
        }
        .sermon-card:hover, .card:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            transition: 0.2s;
        }
        .carousel-item {
            min-height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .carousel-inner {
            border-radius: 1rem;
            overflow: hidden;
        }
        @media (max-width: 767px) {
            .carousel-item {
                min-height: 200px;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>