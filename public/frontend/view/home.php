<?php
require_once 'components/head.php';
?>
<main>
        <style>
        .slider {
            margin: auto;
            position: relative;
            max-width: 70%;
            overflow: hidden;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
        }

        .slide {
            min-width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
        }

        .slider-buttons {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .slider-buttons button {
            background: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            padding: 0 1rem;
        }
    </style>
   <section class="slider">
        <div class="slides" id="slides">
            <div class="slide" style="background-image: url('frontend/image/slider/Frame 1 1.png');"></div>
            <div class="slide" style="background-image: url('frontend/image/slider/Frame 3 1.png');"></div>
            <div class="slide" style="background-image: url('frontend/image/slider/Frame 4 1.png');"></div>
            <div class="slide" style="background-image: url('frontend/image/slider/Frame 2 1.png');"></div>
        </div>
        <div class="slider-buttons">
            <button onclick="prevSlide()">❮</button>
            <button onclick="nextSlide()">❯</button>
        </div>
    </section>

    <section class="about">
        <h1>О нас</h1>
        <img src="frontend\image\ph25.png" alt="" class="about" id="about-mini">
        <p>
            ПАС — это современная онлайн-платформа для любителей и начинающих спортсменов, где собраны лучшие
            видео-тренировки по футболу,
            настольному теннису и волейболу. Мы объединяем спорт, технологию и персональный подход, чтобы помочь
            тебе прогрессировать в
            любимом виде спорта независимо от уровня подготовки и места проживания.
        </p>
        <p>
            Каждое видео — это не просто набор упражнений, а полноценное пошаговое руководство от опытных тренеров.
            А если возникнут вопросы —
            у тебя всегда есть связь с тренером, чтобы получить совет, уточнение или персональную рекомендацию.
        </p>
        <img src="frontend\image\ph26.png" alt="" class="about" id="about-mini">
    </section>

    <!-- Портфолио -->
    <a href="/about" class="main_button">О нас</a>

    <!-- Отзывы -->
    <section class="about">
        <h2>Отзывы</h2>
        <article>
            <h3>Алексей Громов</h3>
            <p>Занимаюсь футболом с детства, но только с «ПАС» начал понимать тактику и правильно развивать физику.
                Видеоуроки понятные, а советы от тренера реально работают. Очень удобно!</p>
        </article>
        <article>
            <h3>Мария Белова</h3>
            <p>Спасибо за тренировки по настольному теннису! Думала, что это просто хобби, но сейчас уже выступаю на
                соревнованиях. Платформа реально помогает расти.</p>
        </article>
        <article>
            <h3>Игорь Чащин</h3>
            <p>Волейбол — моя страсть, но с тренером лично заниматься не получалось. Сайт «ПАС» стал идеальным
                решением. Уроки профессиональные, а обратная связь — на высоте!</p>
        </article>
        <article>
            <h3>Дарья Трунова</h3>
            <p>У меня не было времени на спортзал, но с «ПАС» всё изменилось. Видео можно смотреть в любое время,
                тренировки чёткие, а результат — уже видно через пару недель.</p>
        </article>
    </section>
    <a href="/train" class="main_button">Перейти к тренировкам</a>
</main>



<?php
require_once "components/foot.php";
?>
<script>
    let currentSlide = 0;
    const slides = document.getElementById("slides");

    function showSlide(index) {
        const totalSlides = slides.children.length;
        currentSlide = (index + totalSlides) % totalSlides;
        slides.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    setInterval(nextSlide, 5000); // автоматическая прокрутка
</script>

</html>