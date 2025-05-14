<style>
    :root {
        /* Couleurs principales */
        --primary-color: #1E3A8A;       /* Bleu profond */
        --secondary-color: #FACC15;     /* Jaune doré */
        --accent-color: #10B981;        /* Vert émeraude */

        /* Couleurs de fond et de texte */
        --background-color: #FFFFFF;    /* Blanc */
        --text-color: #1F2937;          /* Gris foncé */
        --muted-text-color: #6B7280;    /* Gris moyen */

        /* Couleurs supplémentaires */
        --light-gray: #F3F4F6;
        --dark-gray: #111827;
        --error-color: #DC2626;         /* Rouge vif */
    }
    
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        background-color: var(--background-color);
        color: var(--text-color);
        font-family: 'Helvetica Neue', sans-serif;
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

</style>