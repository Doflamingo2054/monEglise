<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    :root {
        /* Couleurs principales */
        --primary-color: #493BA2;     /* Bleu profond */
        --secondary-color: #FACC15;     /* Jaune doré */
        --accent-color: #10B981;        /* Vert émeraude */

        /* Couleurs de fond et de texte */
        --background-color: #FFFFFF;    /* Blanc */ /* Vert foncé */
        --primary-color-hover: #7C6FD1; /* Version plus claire de #493BA2 */
        --text-color: #1F2937;          /* Gris foncé */
        --muted-text-color: #6B7280;    /* Gris moyen */

        /* Couleurs supplémentaires */
        --light-gray: #F3F4F6;
        --dark-gray: #111827;
        --error-color: #DC2626;         /* Rouge vif */

        
        --secondary-color: #ffe066;
        --accent-color: #f9f9f9;
        --background-color: #fff;
        --shadow-color: rgba(60, 60, 60, 0.08);
    }
    
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        background-color: var(--background-color);
        color: var(--text-color);
        font-family: 'Open Sans', sans-serif;
        font-size: 14px
    }

    main {
        padding: 40px 0;
        min-height: 100vh;
    }

    a {
    color: var(--secondary-color);
    }

    a:hover {
    color: var(--accent-color);
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .btn-outline-custom {
    display: inline-block;
    padding: 0.5rem 1rem;
    border: 2px solid #3a5a40;
    color: #3a5a40;
    font-size: 14px;
    border-radius: 0.375rem; /* 6px, équivalent de Tailwind rounded */
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
    }

    .btn-outline-custom:hover {
        background-color: #3a5a40;
        color: #fff;
    }

    h1 {
        color: var(--primary-color);
        font-size: 2rem;
        font-weight: 700;
    }

</style>