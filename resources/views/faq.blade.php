<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/e42df28727.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Privacy Policy - Boolean Careers</title>
</head>

<body>

</body>

</html>
<nav class="header navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Careers"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CORSO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">DOPO IL CORSO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">LEZIONE GRATUITA</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a track="Click-IscrizioneForm" class="btn-iscriviti" href="https://www.boolean.careers/iscriviti">Candidati ora</a>
        </form>
    </div>
</nav>
<div class="container-fluid">
    <h2>Prima del corso</h2>
    <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? <a href="https://www.boolean.careers/iscriviti">Contattaci</a> e saremo felici di darti una
        mano.</p>
</div>
<div class="faq_left">
    <?php
    foreach ($lista_faq_dx as $key => $value) {
        echo $value['q'];
        echo '<br>';
        echo $value['a'];
        echo "<br>";
    }
    ?>
</div>
<div class="faq_right">
    <?php
    foreach ($lista_faq_sx as $key => $value) {
        echo $value['q'];
        echo '<br>';
        echo $value['a'];
        echo "<br>";
    }
    ?>
</div>
<br>
<footer class="page-footer font-small blue pt-4">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="fleft col-md-6 mt-md-0 mt-3">
                <img src="https://www.boolean.careers/images/common/logo-white.png" alt="Logo White">
                <div class="footer_head_left_numbers">
                    <p>Sede Operativa</p>
                    <p>Via Carducci 12 - 20123 Milano</p>
                    <p>Tel: 02-36599712</p>
                </div>

            </div>
            <hr class="clearfix w-100 d-md-none pb-3">

            <div class="fright col-md-3 mb-md-0 mb-3">
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Lezione gratuita</a>
                    </li>
                    <li>
                        <a href="{{ route('pagina-faq') }}">Domande frequenti</a>
                    </li>
                    <li>
                        <a href="#!">Per le aziende</a>
                    </li>
                    <li>
                        <a href="{{ route('privacy') }}">Privacy policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="linea">
    <div class="footer_bottom_icons text-center">
        <a href="https://instagram.com/boolean.careers"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/boolean.careers"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.linkedin.com/school/boolean-careers/"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.youtube.com/channel/UCN0mktfmWySUg3OmvHKrdcQ"><i class="fab fa-youtube"></i></a>
    </div>
    <div class="footer-copyright text-center py-3">
        <p>Boolean SRL - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</p>
    </div>
</footer>
