<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>Harmsteel</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/118a8dcb99.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <div class="header__bar">
            <div class="header__bar-logo">
                <img src="img/logo.png" alt="Logo" class="header__bar-logo-img">
            </div>
            <ul class="header__bar-list">
                <li class="header__bar-list-item header__bar-list-item--welding">Spawalnictwo</li>
                <li class="header__bar-list-item header__bar-list-item--constructions">Konstrukcje</li>
                <li class="header__bar-list-item header__bar-list-item--machining">Obróbka</li>
            </ul>
        </div>
        <h1 class="header__heading">
            Projektujemy dla przemysłu
        </h1>
    </header>
    <div class="about__container">
        <section class="about">
            <div class="about__item about__item--welding">
                <img src="img/welding.jpg" alt="Spawalnictwo" class="about__img">
                <h2 class="about__heading about__heading--welding">Spawalnictwo</h2>
                <p class="about__text">Specjalizujemy się we wsparciu technicznym i konsultacjach w obszarze wytwarzania
                    konstrukcji stalowych. Zapewniamy kompleksowy nadzór nad procedurą uzyskania technologii spawania
                    w/g wymaganych norm łącznie z przygotowaniem dokumentacji.</p>
            </div>
            <div class="about__item">
                <img src="img/projects.jpg" alt="Projektowanie" class="about__img">
                <h2 class="about__heading">Projektowanie</h2>
                <p class="about__text">Podstawową zasadą naszej firmy przy doborze i produkcji urządzeń jest zasada
                    starannego zaprojektowania według Państwa specyfikacji i wymagań. Wymagania te są od początku
                    centralnym punktem naszego działania. Służymy Państwu doradztwem w doborze materiału, kształtu i
                    wyposażenia urządzenia.</p>
            </div>
            <div class="about__item about__item--machining">
                <img src="img/lathe.jpg" alt="Obróbka mechaniczna" class="about__img">
                <h2 class="about__heading about__heading--machining">Obróbka mechaniczna</h2>
                <p class="about__text">Świadczymy usługi w zakresie obróbki skrawaniem (toczenie, frezowanie, wiercenie,
                    roztaczanie, szlifowanie) oraz obróbki cieplnej (hartowanie, nawęglanie, ulepszanie). Zajmujemy się
                    regeneracją, naprawą, wykonywaniem nowych części maszyn i linii produkcyjnych, przyrządów, elementów
                    konstrukcyjnych, a także niestandardowych detali.</p>
            </div>
            <div class="about__item about__item--constructions">
                <img src="img/constructions.jpg" alt="Podesty i lekkie konstrukcje" class="about__img">
                <h2 class="about__heading about__heading--constructions">Podesty i lekkie konstrukcje</h2>
                <p class="about__text">Realizujemy zamówienia według projektów własnych oraz dostarczonych nam przez
                    Klientów. W zależności od przeznaczenia podesty wykonujemy ze stali nierdzewnych, konstrukcyjnych
                    ocynkowanych lub lakierowanych proszkowo. Oferujemy lakierowanie proszkowe w dowolnie wybranym
                    kolorze z palety RAL</p>
            </div>
            <div class="about__item">
                <img src="img/tools.jpg" alt="Narzędzia specjalne" class="about__img">
                <h2 class="about__heading">Narzędzia specjalne</h2>
                <p class="about__text">Wykonujemy także narzędzia do zastosowań specjalnych, niestandardowych. Opieramy
                    się na specyfikacji klienta i proponujemy jak najlepsze rozwiązania konstrukcyjne.</p>
            </div>
        </section>
    </div>
    <div class="form__container">
        <h2 class="form__heading">Skontaktuj się z nami</h2>
        <form method="post" class="form">
            <div class="form__wrap">
                <div class="form__wrap-col1">
                    <input type="text" class="form__input" placeholder="&#xf007   Imię i nazwisko" name="name" id="name" required>
                    <label for="name" class="form__label">Imię i nazwisko</label>
                </div>
                <div class="form__wrap-col2">
                    <input type="email" class="form__input" placeholder="&#xf0e0   Twój adres e-mail" name="email" id="email" required>
                    <label for="email" class="form__label">Adres e-mail</label>
                </div>
                <div class="form__wrap-area">
                    <textarea name="area" class="form__input form__input--text" id="message" cols="25" rows="6" placeholder="&#xf5ad   Treść wiadomości" required></textarea>
                    <!-- <label for="message" class="form__label form__label--text">Treść wiadomości</label> -->
                </div>
                <input class="form__btn" type="submit" value="Wyślij">
            </div>
            
            <?php
                if (isset($_REQUEST['email']))  {
                
                $admin_email = "pawela89@gmail.com";
                $email = $_REQUEST['email'];
                $name = $_REQUEST['name']
                $area = $_REQUEST['area'];
                
                mail($admin_email, $name, $area, "From:" . $email);

                echo "Dziękujemy za kontakt z nami!";
                }
                
                else  {echo "coś poszło nie tak!";
                ?>

        </form>
        <footer class="footer">
            <ul class="footer__list">
                <li class="footer__item">Dąbrowa Górnicza</li>
                <li class="footer__item">tel: +48 513-970-862</li>
                <li class="footer__item">email: biuro@harmsteel.pl</li>
            </ul>
            <p class="footer__copy">Copyright &copy; Harmsteel 2020</p>
        </footer>
    </div>
    <script src="main.js"></script>
</body>

</html>