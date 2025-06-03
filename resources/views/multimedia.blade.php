<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.global-style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Mouvement de reveil méthodiste - Multimédia</title>
</head>
<body>
    @include('partials.header')
    <main>
        <section class="container">
            <h2>
                Regarder en direct
            </h2>
            <div>
                <iframe class="live-iframe" src="https://www.youtube.com/embed/live_stream?channel=UCYLB6eCPQKjNwCyWbW_CFAQ" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>

        <section class="container">
            <h2>
                Catalogue de vidéos
            </h2>
            <div id="video-list">
                <p>Chargement des vidéos...</p>
            </div>
            <div>
                <a style="text-decoration: none; font-weight: bold;" href="https://www.youtube.com/@morevtv2258">Voir plus</a>
            </div>
        </section>
    </main>

    @include('partials.footer')

    <style>
        #video-list {
            margin-bottom: 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;           
        }

        #video-list > iframe {
            width: 100%;
            border: none;
            aspect-ratio: 16 / 9;
            border-radius: 8px;
        }
        main {
            min-height: 100vh;
        }

        h2 {
            margin-bottom: 20px;
            margin-top: 30px;
            font-size: 24px;
            color: var(--primary-color);
        }
        .live-iframe {
            width: 100%;
            aspect-ratio: 16 / 9;
            max-width: 600px;
            border: none;
            border-radius: 8px;
            display: block;
            margin: 0 auto;
        }
        @media (max-width: 768px) {
            #video-list {
                grid-template-columns: 1fr;
            }
            
        }
    </style>

    <script>
    const videoList = document.getElementById("video-list");

    fetch("/rss-videos")
        .then(response => {
            if (!response.ok) {
                throw new Error("Erreur HTTP : " + response.status);
            }
            return response.text();
        })
        .then(xmlText => {
            const parser = new DOMParser();
            const xml = parser.parseFromString(xmlText, "application/xml");

            const entries = xml.querySelectorAll("entry");

            if (entries.length === 0) {
                videoList.innerHTML = "<p>Aucune vidéo trouvée.</p>";
                return;
            }

            videoList.innerHTML = "";
            const YT_NS = "http://www.youtube.com/xml/schemas/2015";
            entries.forEach(entry => {
                const videoId = entry.getElementsByTagNameNS(YT_NS, "videoId")[0]?.textContent;
                console.log(entry, videoId);

                if (videoId) {
                    const iframe = document.createElement("iframe");
                    // iframe.width = "560";
                    // iframe.height = "315";
                    iframe.src = `https://www.youtube.com/embed/${videoId}`;
                    iframe.frameBorder = "0";
                    iframe.allowFullscreen = true;
                    console.log(iframe);

                    videoList.appendChild(iframe);
                }
            });
        })
        .catch(error => {
            console.error("Erreur de chargement du flux RSS :", error);
            videoList.innerHTML = "<p>Impossible de charger les vidéos.</p>";
        });
</script>


</body>
</html>
