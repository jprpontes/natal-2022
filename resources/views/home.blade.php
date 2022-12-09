<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Natal Em Família</title>

        <script src="https://kit.fontawesome.com/0dba2633e9.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #F2F2F2;
            }

            .j-header {
                height: 18rem;
                display: flex;
                flex-direction: column;
                background-image: url(img/estrelas.png);
            }

            .j-header-img-detail-left, .j-header-img-detail-right {
                height: 15%;
                position: absolute;
                top: 0;
            }

            .j-header-img-detail-left {
                transform: scaleX(-1);
            }

            .j-header-img-detail-right {
                right: 0;
            }

            .j-title {
                font-family: 'Mountains of Christmas', cursive;
                color: #9F2E32;
                margin: auto;
                font-size: 5rem;
                text-align: center;
            }

            .j-title > small > span {
                color: #674845;
            }

            .j-timer-section {
                background-color: #9F2E32;
                width: 100%;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            .j-timer-value {
                font-size: 3rem;
                text-align: center;
                color: #F2F2F2;
            }

            .j-timer-text {
                font-size: 1.5rem;
                text-align: center;
                margin-right: 12px;
                color: #F2F2F2;
            }

            .j-timer-label {
                margin-right: 1rem;
            }

            .j-message-section {

            }

            .j-message {
                display: flex;
                flex-direction: column;
                padding: 3rem;
            }

            .j-message-box-1 {
                max-width: 23rem;
                align-self: flex-end;
                display: flex;
                flex-direction: column;
            }

            .j-message-title {
                font-weight: 700;
                font-size: 1.5rem;
                margin-bottom: 0.7rem;
                color: #9F2E32;
            }

            .j-message-text {
                font-size: 1.3rem;
                color: #674845;
            }

            .j-message-image {
                height: 100%;
                text-align: center;
                margin: 0;
                padding: 20px 10px 10px 10px;
            }

            .j-message-image img {
                width: 55%;
            }

            .j-body-subtitles {
                color: #674845;
            }

            .j-plans-section {

            }

            .j-plan-cards {
                display: flex;
                justify-content: center;
            }

            .card {
                margin: 0.5rem;
                padding: 0;
            }

            .card-body {
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
            }

            .j-people-section {

            }

            .j-people-cards {
                display: flex;
                justify-content: center;
            }

            .j-people-cards .img-thumbnail {
                height: 15rem;
            }

            .j-people-cards div {
                display: flex;
                flex-direction: column;
                text-align: center;
            }

            .j-footer {
                height: 10rem;
            }

            .mapouter{
                position:relative;
                text-align:right;
            }

            .gmap_canvas {
                overflow:hidden;
                background:none!important;
            }

            #gmap_canvas {
                width: 100%;
                height: 20rem;
            }

            @media screen and (max-width: 900px) {
                .j-title {
                    font-size: 3rem;
                }

                .j-timer-value {
                    font-size: 2rem;
                    display: block;
                }

                .j-timer-text {
                    font-size: 1rem;
                }

                .j-message-image img {
                    width: auto;
                }
            }

            @media screen and (max-width: 600px) {
                .j-header-img-detail-left, .j-header-img-detail-right {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <div>
            <div class="j-header">
                <img src="/img/folhas.png" class="j-header-img-detail-left" alt="Folhas Detalhe">
                <img src="/img/folhas.png" class="j-header-img-detail-right" alt="Folhas Detalhe">
                <span class="j-title">
                    Natal em Família 2022
                    <br>
                    <small><span>Dias</span> 23<span>, </span>24<span>, </span>25</small>
                </span>
            </div>
            <div class="j-timer-section container-fluid">
                <div class="row align-items-center">
                    <span class="j-timer-text j-timer-label col-12 col-md-auto">Faltam</span>
                    <div class="col col-md-auto text-center">
                        <span id="timer-day" class="j-timer-value">00</span>
                        <span class="j-timer-text">dias</span>
                    </div>
                    <div class="col col-md-auto text-center">
                        <span id="timer-hour" class="j-timer-value">00</span>
                        <span class="j-timer-text">hor</span>
                    </div>
                    <div class="col col-md-auto text-center">
                        <span id="timer-min" class="j-timer-value">00</span>
                        <span class="j-timer-text">min</span>
                    </div>
                    <div class="col col-md-auto text-center">
                        <span id="timer-sec" class="j-timer-value">00</span>
                        <span class="j-timer-text">seg</span>
                    </div>
                </div>
            </div>
            <div class="j-message-section container-fluid">
                <div class="row" style="height: 100%">
                    <div class="j-message col-12 col-md">
                        <div class="j-message-box-1">
                            <span class="j-message-title">
                                Feliz Natal!!!
                            </span>
                            <span class="j-message-text">
                                É tempo de união, paz e reflexão... É tempo de acreditar e transformar o mundo num lugar onde todos os nossos sonhos se realizem. Que Deus, em sua infinita bondade, abençoe e encha de paz todos os corações.
                            </span>
                        </div>
                    </div>
                    <div class="j-message-image col-12 col-md">
                        <img src="/img/presepio.png" class="img-fluid" alt="Presepio">
                    </div>
                </div>
            </div>
            <div class="j-location-section">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h3 class="mt-5 mb-3 j-body-subtitles">Localização da festa</h3>
                        </div>
                    </div>
                    <div class="j-location">
                        <div class="row">
                           <div class="col">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Recanto%20Lopes%20-%20Corrego%20do%20Bamb%C3%BA,%20Caratinga%20-%20MG&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="j-plans-section">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h3 class="mt-5 mb-3 j-body-subtitles">Garanta sua vaga</h3>
                        </div>
                    </div>
                    <div class="j-plan-cards container">
                        <div class="row justify-content-center">
                            <div class="card col-12 col-md-4" style="width: 18rem;">
                                <img src="/img/plano-1.jpg" class="card-img-top" alt="Plano 1">
                                <div class="card-body">
                                    <h5 class="card-title">Plano INDIVIDUAL</h5>
                                    <p class="card-text">Para 1 pessoa.</p>
                                    <a href="https://nubank.com.br/cobranca/CfsG92hjIJ1nb489" class="btn btn-outline-success btn-lg mb-2"><i class="fa-brands fa-pix"></i><span> Pagar com pix</span></a>
                                    <a href="https://mpago.la/2tbLWvo" class="btn btn-outline-success btn-lg"><i class="fa-regular fa-credit-card"></i><span> Pagar com cartão</span></a>
                                </div>
                            </div>
                            <div class="card col-12 col-md-4" style="width: 18rem;">
                                <img src="/img/plano-2.jpg" class="card-img-top" alt="Plano 3">
                                <div class="card-body">
                                    <h5 class="card-title">Plano DUPLA</h5>
                                    <p class="card-text">Para 2 pessoas.</p>
                                    <a href="https://nubank.com.br/cobranca/eHl6iQoR621nb489" class="btn btn-outline-success btn-lg mb-2"><i class="fa-brands fa-pix"></i><span> Pagar com pix</span></a>
                                    <a href="https://mpago.la/14FXCDi" class="btn btn-outline-success btn-lg"><i class="fa-regular fa-credit-card"></i><span> Pagar com cartão</span></a>
                                </div>
                            </div>
                            <div class="card col-12 col-md-4" style="width: 18rem;">
                                <img src="/img/plano-3.jpg" class="card-img-top" alt="Plano 3">
                                <div class="card-body">
                                    <h5 class="card-title">Plano TRIO</h5>
                                    <p class="card-text">Para 3 pessoas.</p>
                                    <a href="https://nubank.com.br/cobranca/Apcf7kol2m1nb489" class="btn btn-outline-success btn-lg mb-2"><i class="fa-brands fa-pix"></i><span> Pagar com pix</span></a>
                                    <a href="https://mpago.la/2DRWAs8" class="btn btn-outline-success btn-lg"><i class="fa-regular fa-credit-card"></i><span> Pagar com cartão</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="j-people-section">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h3 class="mt-5 mb-3 j-body-subtitles">Presenças confirmadas</h3>
                        </div>
                    </div>
                    <div class="j-people-cards row">
                        <div class="col-auto">
                            <img src="/img/people/vo-ana.jpeg" class="img-thumbnail" alt="Vó Ana">
                            <span class="mb-2">Vó Ana</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/suely.jpeg" class="img-thumbnail" alt="Tia Suely">
                            <span class="mb-2">Tia Suely</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/tio-erivelto.jpeg" class="img-thumbnail" alt="Tio Erivelto">
                            <span class="mb-2">Tio Erivelto Bilzerian</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/rafael-miguel-helena.jpeg" class="img-thumbnail" alt="Rafael, Miguel e princesa Helena">
                            <span class="mb-2">Rafael, Miguel e princesa Helena</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/tia-de-lourdes.jpg" class="img-thumbnail" alt="Tia De Lourdes">
                            <span class="mb-2">Tia De Lourdes</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/tio-geraldo.jpeg" class="img-thumbnail" alt="Tio Geraldo">
                            <span class="mb-2">Tio Geraldo</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/hermano.png" class="img-thumbnail" alt="Hermano">
                            <span class="mb-2">Hermano Pasquim</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/tio-theddy.jpg" class="img-thumbnail" alt="Tio Theddy">
                            <span class="mb-2">Tio Theddy Carrey</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/rany.jpg" class="img-thumbnail" alt="Rany">
                            <span class="mb-2">Rany Migão Bolseiro</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/amanda.jpg" class="img-thumbnail" alt="Amanda">
                            <span class="mb-2">Amandinha Gatinha</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/joao.jpg" class="img-thumbnail" alt="João">
                            <span class="mb-2">João Pernambucano</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/tio-geraldo-assis.png" class="img-thumbnail" alt="Tio Geraldo">
                            <span class="mb-2">Tio Geraldo</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/tia-dirce.png" class="img-thumbnail" alt="Tia Dirce">
                            <span class="mb-2">Tia Dirce</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/marcia-maria.jpeg" class="img-thumbnail" alt="Márcia Maria">
                            <span class="mb-2">Márcia Maria</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/marcos.jpg" class="img-thumbnail" alt="Marcolino">
                            <span class="mb-2">Marcolino Adnet</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/rayza.jpg" class="img-thumbnail" alt="Rayza">
                            <span class="mb-2">Rayza</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/polly.jpeg" class="img-thumbnail" alt="Polly">
                            <span class="mb-2">Polly</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/leo.jpeg" class="img-thumbnail" alt="Leo">
                            <span class="mb-2">Leo Pigossi</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/ana-e-maria.jpeg" class="img-thumbnail" alt="Ana e Maria">
                            <span class="mb-2">Princesas Ana e Maria</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/juh.jpg" class="img-thumbnail" alt="Juh">
                            <span class="mb-2">Juju Balandia</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/luiz-fernando.jpeg" class="img-thumbnail" alt="Luiz Fernando">
                            <span class="mb-2">Luiz Fernando Lima</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/wanderlei.jpg" class="img-thumbnail" alt="José Wanderley">
                            <span class="mb-2">José Wanderlei Travolta</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/marilene.jpg" class="img-thumbnail" alt="José Wanderley">
                            <span class="mb-2">Marilene</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/ana-paula.jpg" class="img-thumbnail" alt="Ana Paula">
                            <span class="mb-2">Ana Paula</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/lucinho-avinte.jpg" class="img-thumbnail" alt="Lucinho">
                            <span class="mb-2">Lucinho</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/tio-lucio.jpg" class="img-thumbnail" alt="Tio Lúcio">
                            <span class="mb-2">Tio Lúcio Shelby</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/tia-neida.jpg" class="img-thumbnail" alt="Tia Neida">
                            <span class="mb-2">Tia Neida</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/neury.jpeg" class="img-thumbnail" alt="Neury">
                            <span class="mb-2">Neury</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/jose-luiz.jpeg" class="img-thumbnail" alt="José Luiz">
                            <span class="mb-2">José Luiz</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/caio-e-sabrina.jpeg" class="img-thumbnail" alt="Caio e Sabrina">
                            <span class="mb-2">Caio e Sabrina</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/carine.jpeg" class="img-thumbnail" alt="Carine">
                            <span class="mb-2">Carine</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/tio-edson.jpeg" class="img-thumbnail" alt="Tio Edson">
                            <span class="mb-2">Tio Edson Lillard</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/luidy.jpeg" class="img-thumbnail" alt="Luidy">
                            <span class="mb-2">Luidy Bros</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/tia-rute.jpeg" class="img-thumbnail" alt="Tia Rute">
                            <span class="mb-2">Tia Rute</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/charlene.jpg" class="img-thumbnail" alt="Charlene">
                            <span class="mb-2">Charlene</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/sophia.jpg" class="img-thumbnail" alt="Sophia">
                            <span class="mb-2">Princesa Sophia</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/rodrigao.jpg" class="img-thumbnail" alt="Rodrigão">
                            <span class="mb-2">Rodrigão</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/chaos-e-mari.jpeg" class="img-thumbnail" alt="Charles e Mari">
                            <span class="mb-2">Chaos Xavier e Mari</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/taty.png" class="img-thumbnail" alt="Taty">
                            <span class="mb-2">Taty</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/waldson.jpeg" class="img-thumbnail" alt="Waldson">
                            <span class="mb-2">Waldson</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/thais.jpeg" class="img-thumbnail" alt="Thais">
                            <span class="mb-2">Tatá</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/elisandro.jpg" class="img-thumbnail" alt="Elisandro">
                            <span class="mb-2">Elisandro da Swat</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/alice.png" class="img-thumbnail" alt="Alice">
                            <span class="mb-2">Princesa Alice</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/davi.png" class="img-thumbnail" alt="Davi">
                            <span class="mb-2">Davi</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/patricia.jpeg" class="img-thumbnail" alt="Patrícia">
                            <span class="mb-2">Patty</span>
                        </div>
                        <div class="col-auto">
                            <img src="/img/people/tia-maria.jpeg" class="img-thumbnail" alt="Tia Maria">
                            <span class="mb-2">Tia Maria</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="j-footer">

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Dec 23, 2022 19:00:00").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

              // Get today's date and time
              var now = new Date().getTime();

              // Find the distance between now and the count down date
              var distance = countDownDate - now;

              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);

              // Display the result in the element with id="timer"
              document.getElementById("timer-day").innerHTML = String(days).padStart(2, '0');
              document.getElementById("timer-hour").innerHTML = String(hours).padStart(2, '0');
              document.getElementById("timer-min").innerHTML = String(minutes).padStart(2, '0');
              document.getElementById("timer-sec").innerHTML = String(seconds).padStart(2, '0');

              // If the count down is finished, write some text
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("timer").innerHTML = "EXPIRED";
              }
            }, 1000);
        </script>
    </body>
</html>
