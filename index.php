<?php
    
    include 'src/componentes/header.php'
    
?>
<body>

    <div class="slider">

        <input type="radio" name="radio-button" id="radio1">
        <input type="radio" name="radio-button" id="radio2">
        <input type="radio" name="radio-button" id="radio3">

        <div class="slides">

            <div class="texto">

                <h2>
                    Apoio essencial para sua pequena empresa superar desafios e crescer.
                </h2>

                <h3>
                    Oferecendo orientações práticas e estratégias 
                    claras de marketing para ajudar você a tomar decisões certas e impulsionar o crescimento do seu negócio.
                </h3>

            </div>

            <div class="slide first">
                <img src="src/img/pexels-artempodrez-5716001.jpg" />
            </div>

            <div class="slide">
                <img src="src/img/pexels-artempodrez-5716037.jpg" />
            </div>

            <div class="slide">
                <img src="src/img/pexels-edmond-dantes-4344860(1).jpg" />
            </div>

        </div>

        <div class="navigation-auto">

            <div class="auto-button1">

            </div>

            <div class="auto-button2">

            </div>

            <div class="auto-button3">

            </div>

        </div>

        <div class="manual-navigation">

            <label for="radio1" class="manual-button"></label>
            <label for="radio2" class="manual-button"></label>
            <label for="radio3" class="manual-button"></label>

        </div>

    </div>

    <section class="steps-section">

        <ul class="steps-list">
            
            <li class="intro-card" data-aos="fade-right" data-aos-delay="0">
                <h2>Te entregamos as soluções que afetam o seu crescimento.</h2>
            </li>

            <li class="step-card" data-aos="fade-up" data-aos-delay="0">
                <img src="src/img/gps-icone.png">
                <h3>Inicie</h3>
                <p>Entenda as primeiras estratégias.</p>
            </li>

            <li class="step-card" data-aos="fade-up" data-aos-delay="0">
                <img src="src/img/seta-icone.png">
                <h3>Desenvolva</h3>
                <p>Identifique aquilo que pode te prejudicar.</p>
            </li>

            <li class="step-card" data-aos="fade-left" data-aos-delay="0">
                <img src="src/img/foguete-icone.png" alt="">
                <h3>Cresça</h3>
                <p>Compreenda todos os problemas e se previna.</p>
            </li>

        </ul>
        
    </section>

    <section class="about-us">
        
        <div class="about-us-image" data-aos="fade-right" data-aos-delay="0">
            <img src="src/img/sobre-nos.jpeg" alt="">
        </div>
        
        <div class="about-us-text" data-aos="fade-left" data-aos-delay="200">
            <h1>Sobre nós</h1>
            <h3>Somos um grupo de quatro alunos da ETEC de Suzano, desenvolvedores de um
                site como complementação ao nosso TCC</h3>
                <a href="#"><button>Leia mais</button></a>
        </div>

        

    </section>

    <section class="services">

        <div class="question-card" data-aos="fade-right" data-aos-delay="0">
            <h1>Como podemos te ajudar com os nossos serviços?</h1>
        </div>

        <div class="service-card" data-aos="fade-left" data-aos-delay="200">
            <h1>Consultoria em Marketing</h1>
            <h3>Apresentamos os problemas mais recorrentes do marketing que afetam o crescimento do seu negócio.</h3>
            <a href="#"><button>Saiba Mais</button></a>
        </div>
        

    </section>

    <section class="our-team">
        <h1 data-aos="fade-down" data-aos-delay="0">Nosso Time</h1>

        <ul class="our-team-photos">
            <li data-aos="zoom-in" data-aos-delay="0"><img src="src/img/foto-perfil/allan.jpg">Allan</li>
            <li data-aos="zoom-in" data-aos-delay="300"><img src="src/img/foto-perfil/Ariane.png">Ariane</li>
            <li data-aos="zoom-in" data-aos-delay="600"><img src="src/img/foto-perfil/giovanna.png">Giovanna</li>
            <li data-aos="zoom-in" data-aos-delay="900"><img src="src/img/foto-perfil/heitor.png">Heitor</li>
        </ul>

    </section>

    <section class="blog-section">

        <h1 data-aos="zoom-out" data-aos-delay="0">Blog</h1>
        <a href="#" data-aos="zoom-out" data-aos-delay="200"><button>Saiba Mais</button></a>

    </section>

    <section class="social-cards-section">

        <ul class="social-cards-list">

            <li class="social-cards" data-aos="fade-right" data-aos-delay="0">
                <a href="tel:1126626488"><img width="96" height="96" src="https://img.icons8.com/color/96/phone.png" alt="phone"/></a>
                <h3>Telefone</h3>
                <p>(11) 2662-6488</p>
            </li>
            <li class="social-cards" data-aos="fade-up" data-aos-delay="0">
                <a href="mailto:oryunconsultoria@gmail.com"><img width="96" height="96" src="https://img.icons8.com/color/96/circled-envelope.png" alt="circled-envelope"/></a>
                <h3>E-mail</h3>
                <p>oryunconsultoria@gmail.com</p>
            </li>
            <li class="social-cards" data-aos="fade-left" data-aos-delay="0">
                <a href="https://www.instagram.com/oryun_consultoria"><img width="96" height="96" src="https://img.icons8.com/color/96/instagram-new--v1.png" alt="instagram-new--v1"/></a>
                <h3>Instagram</h3>
                <p>@oryun_consultoria</p>
            </li>

        </ul>

    </section>

    <?php include 'src/componentes/footer.php'?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init({
            duration: 1000, /* Duração da animação em milissegundos (1 segundo) */
            once: true,     /* Anima só na primeira vez (não repete ao subir a tela) */
            offset: 200,
        });
    </script>

    <script src="src/js/script.js"></script>
</body>
</html>