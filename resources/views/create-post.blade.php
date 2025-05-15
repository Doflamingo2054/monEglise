<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.global-style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Donation</title>
</head>
<body>
    @include('partials.header')
    <main>
        <section class="container">
            <h1>
                Créer un post
            </h1>
            <form action="{{ route('store-post') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Contenu</label>
                    <textarea id="content" name="content" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" accept="image/*">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class='bx bxs-plus-circle'></i>
                        Créer le post
                    </button>
                </div>
            </form>
        </section>
    </main>
    @include('partials.footer')
    <style>
        CSS ICI
    </style>
</body>
</html>