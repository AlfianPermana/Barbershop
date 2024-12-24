<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Slider |Dev Mode</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        /* ------------ VARIABLES ------------ */
        :root {
            /* FONT */
            --font: 'Poppins', sans-serif;

            /* COLORS */
            --color: #9176FF;
            --bg-color: #f4f4f4;
        }

        /* ------------ BASE ------------ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

            background-color: var(--bg-color);
        }

        /* ----------- SLIDER ------------ */
        .swiper {
            width: 100%;
        }

        .swiper-wrapper {
            width: 100%;
            height: 35em;
            display: flex;
            align-items: center;
        }

        .card {
            width: 20em;
            height: 90%;
            background-color: #fff;
            border-radius: 2em;
            box-shadow: 0 0 2em rgba(0, 0, 0, .2);
            padding: 2em 1em;

            display: flex;
            align-items: center;
            flex-direction: column;

            margin: 0 2em;
        }

        .swiper-slide:not(.swiper-slide-active) {
            filter: blur(1px);
        }

        .card__image {
            width: 10em;
            height: 10em;
            border-radius: 50%;
            border: 5px solid var(--color);
            padding: 3px;
            margin-bottom: 2em;
        }

        .card__image img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .card__content {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .card__title {
            font-size: 1.5rem;
            font-weight: 500;
            position: relative;
            top: .2em;
        }

        .card__name {
            color: var(--color);
        }

        .card__text {
            text-align: center;
            font-size: 1.1rem;
            margin: 1em 0;
        }

        .card__btn {
            background-color: var(--color);
            color: #fff;
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: 600;
            border: none;
            padding: .5em;
            border-radius: .5em;
            margin-top: .5em;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <section class="swiper mySwiper">

        <div class="swiper-wrapper">

            <div class="card swiper-slide">
                <div class="card__image">
                    <img src="/images/user1.jpg" alt="card image">
                </div>

                <div class="card__content">
                    <span class="card__title">Web Designer</span>
                    <span class="card__name">Vanessa Martinez</span>
                    <p class="card__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore
                        provident non tempora odio est sunt, ipsum</p>
                    <button class="card__btn">View More</button>
                </div>
            </div>



        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 300,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>

</body>

</html>