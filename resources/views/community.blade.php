<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.global-style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Communauté</title>
</head>
<body>
    @include('partials.header')
    <main>
        <section class="container">
            <div class="posts">
                <article>
                    <div class="author">
                        <img src="{{ asset('images/user.png') }}" alt="User Avatar" class="avatar">
                        <div class="author-info">
                            <h3>Nom de l'utilisateur</h3>
                            <p>Il y a 2 heures</p>
                        </div>
                    </div>
                    <div class="post-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus pariatur maxime reprehenderit, atque a tempora accusantium asperiores magnam doloribus quas numquam libero. Deleniti, praesentium aliquam accusamus ex repudiandae molestias quae?
                    </div>
                    <div class="post-actions">
                        <a href="#">
                            <i class='bx bx-like'></i>
                            Commentaires (10)
                        </a>
                    </div>
                </article>
            </div>
        </section>
        <a id="create-post-button" href="{{ route('create-post') }}" class="btn btn-primary">
            <i class='bx bxs-plus-circle'></i>
            Créer un post
        </a>
    </main>
    @include('partials.footer')
    <style>
        .posts {
            margin-top: 20px;
        }
        .posts article {
            background-color: var(--light-gray);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .posts {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .post-text {
            background-color: var(--light-gray);
            padding: 20px;
            border-radius: 8px;
            font-size: 16px;
        }

        .post-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .post-actions a {
            text-decoration: none;
            color: var(--primary-color);
        }

        .post-actions a:hover {
            color: var(--accent-color);
        }

        #create-post-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            padding: 10px 20px;
            border: solid 2px var(--background-color);
            text-decoration: none;
            display: flex;
            gap: 4px;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #create-post-button:hover {
            background-color: var(--secondary-color);
            border-color: var(--primary-color);
        }
    </style>
</body>
</html>