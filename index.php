<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/main.css">
    <title>ParatyTur</title>
</head>
<body>
    <header>
        <div>
            <a href="">Parceiro</a>
        </div>
        <nav class="navbar">
            <div class="logo"><img src="img/logo.png" alt=""></div>
            <div class="menu">
                <ul class="menu-list">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
            <div class="hamburger" onclick="toggleMenu()">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </header>

    <main>
        <section id="inicio">
            <article class="box_e">
                <h2>ParatyTur</h2>
                <h3>Sua Locacao de lanchas</h3>
                <p>É simples, depois da confirmacao do agendamento a lancha é enviada até voce</p>
                <a href="#">Quero ser um parceiro</a>
            </article>

            <div class="box_d">
                <img src="img/logo.png" alt="">
            </div>
        </section>

<!--************************************************************ PARTE 02****************************************************************************************-->

        <section>
            <article class="box_text">
                <h2>Como funciona a ParatyTur</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus omnis magni natus ea, corporis necessitatibus est veniam, recusandae illum accusantium, perspiciatis error asperiores mollitia nam aut. Accusamus autem ut nostrum.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga magni natus minima commodi delectus vitae dolorem accusantium voluptatibus sequi ullam velit fugiat, praesentium maxime repellat, consequatur autem voluptatum veniam non.</p>
                <p>A ParatyTur se encarrega de toda a logística do passeio.</p>
            </article>

            <div class="box_video">
                <iframe 
                    width="560" height="315" src="https://www.youtube.com/embed/6CwI5f9ttJI?si=QqrnBgSIcMJ-RaGY&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                </iframe>
            </div>
        </section>

<!--************************************************************ PARTE 03  ****************************************************************************************-->


    </main>

    <script src="js/menu.js"></script>
</body>
</html>