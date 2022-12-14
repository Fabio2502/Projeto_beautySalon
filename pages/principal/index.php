<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <!-- PAGE INFO -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BeautySalon</title>

    <!-- Icones -->
    <link rel="stylesheet" href="assets/fonts/style.css" />

    <!-- Swiper -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- STYLES -->
    <link rel="stylesheet" href="style.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>

     
    <header id="header">
     
      <nav class="container">
        <a class="logo" href="#">Beauty<span>salon</span>.</a>
      
        <!-- menu -->
        <div class="menu">
          <ul class="grid">
            <li><a class="title" href="#home">Início</a></li>
            <li><a class="title" href="#about">Sobre</a></li>
            <li><a class="title" href="#services">Serviços</a></li>
            <li><a class="title" href="#testimonials">Depoimentos</a></li>
            <li><a class="title" href="#contact">Contato</a></li>
          </ul>
        </div>
        <!-- /menu -->
        <div class="toggle icon-menu"></div>
        <div class="toggle icon-close"></div>
        
      </nav>

      <a class="button-login" href="/pages/login/login.php"> <B>Login</B></a>
        <a class="register" href="/pages/cadastro/cadastro.php"> <B>Register </B></a>
     

    </header>

    <main>
      <!-- HOME -->
      <section class="section" id="home">
        <div class="container grid">
          <div class="image">
            <img
            src="/assets/fotos/principal/foto principal.jpg"
              alt="Mulher sorrindo penteando outra mulher"
            />
          </div>
          <div class="text">
            <h2 class="title">Saúde natural para os seus cabelos</h2>
            <p>
              Um salão exclusivo em Rio Claro-SP, especializado em tratamentos
              naturais.
            </p>
            <a class="button" href="/pages/AgendarHorarios/agendamentos.php">Agendar um horário</a>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>

      <!-- ABOUT -->
      <section class="section" id="about">
        <div class="container grid">
          <div class="image">
            <img
            src="/assets/fotos/principal/foto segunda pagina.jpg"
              alt="mulheres sorrindo"
            />
          </div>
          <div class="text">
            <h2 class="title">Sobre nós</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Necessitatibus deleniti perferendis vel molestiae soluta, quaerat
              beatae dicta ducimus praesentium architecto harum dolorum
              distinctio illo earum assumenda itaque. Omnis, quam repellat.
            </p>
            <br />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
              illum ratione impedit quae eum quis adipisci asperiores, est
              doloribus distinctio excepturi minima eius dolore! Perferendis
              laborum illo aspernatur repellendus ipsum.
            </p>
            <br />
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed
              exercitationem, illum sapiente quasi hic iusto odio maiores esse
              quaerat quis necessitatibus at odit, dolores dicta, officia ab
              quos. Provident, quae.
            </p>
            <a href="/pages/sobre/sobre.php">learn More</a>
          </div>
        </div>
      </section>

      <div class="divider-2"></div>

      <!-- SERVICES -->
      <section class="section" id="services">
        <div class="container grid">
          <header>
            <h2 class="title">Serviços</h2>
            <p class="subtitle">
              Com mais de 10 anos no mercado, o <strong>Beautysalon</strong> já
              conquistou clientes de inúmeros países com seus tratamentos
              exclusivos e totalmente naturais
            </p>
          </header>
          <div class="cards grid">
            <div class="card">
              <i class="icon-woman-hair"></i>
              <h3 class="title">Terapia capilar</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
                distinctio neque blanditiis, dolorem aperiam nulla explicabo
                asperiores
              </p>
            </div>
            <div class="card">
              <i class="icon-trim"></i>
              <h3 class="title">Cortes</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
                distinctio neque blanditiis, dolorem aperiam nulla explicabo
                asperiores
              </p>
            </div>
            <div class="card">
              <i class="icon-cosmetic"></i>
              <h3 class="title">Tratamentos</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
                distinctio neque blanditiis, dolorem aperiam nulla explicabo
                asperiores
              </p>
              
            </div>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>

      <!-- TESTIMONIALS -->
      <section class="section" id="testimonials">
        <div class="container swiper">
          <header>
            <h2 class="title">Depoimentos de quem já passou por aqui</h2>
          </header>
          <div class="testimonials swiper-container">
            <div class="swiper-wrapper">
              <div class="testimonial swiper-slide">
                <blockquote>
                  <p>
                    <span>&ldquo;</span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rerum blanditiis saepe nam excepturi explicabo ipsa error
                    ipsam neque
                  </p>
                  <cite>
                    <img
                      src="/assets/fotos/usuarios/10.jpeg"
                      alt="Foto de Wanessa Souza"
                    />
                    Wanessa Souza
                  </cite>
                </blockquote>
              </div>

              <div class="testimonial swiper-slide">
                <blockquote>
                  <p>
                    <span>&ldquo;</span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rerum blanditiis saepe nam excepturi explicabo ipsa error
                    ipsam neque
                  </p>
                  <cite>
                    <img
                      src="/assets/fotos/usuarios/26.jpeg"
                      alt="Foto de Franciele Venega"
                    />
                    Franciele Venega
                  </cite>
                </blockquote>
              </div>

              <div class="testimonial swiper-slide">
                <blockquote>
                  <p>
                    <span>&ldquo;</span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rerum blanditiis saepe nam excepturi explicabo ipsa error
                    ipsam neque
                  </p>
                  <cite>
                    <img
                      src="/assets/fotos/usuarios/56.jpeg"
                      alt="Fotos de Valeska Fabris"
                    />
                    Valeska Fabris
                  </cite>
                </blockquote>
              </div>
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <div class="divider-2"></div>

      <!-- CONTACT -->
      <section class="section" id="contact">
        <div class="container grid">
          <div class="text">
            <h2 class="title">Entre em contato com a gente!</h2>
            <p>
              Entre em contato com a Beautysalon, queremos tirar suas dúvidas,
              ouvir suas críticas e sugestões.
            </p>
            <a
              href="/pages/contato/contato.php"
              class="button"
              target="_blank"
              ><i class="icon-whatsapp"></i> Entrar em contato</a
            >
          </div>

          <div class="links">
            <ul class="grid">
              <li><i class="icon-phone"></i> 19 99845-6754</li>
              <li><i class="icon-map-pin"></i> Rua 3a Centro, 1346</li>
              <li><i class="icon-mail"></i> beautysalon@hotmail.com</li>
            </ul>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>
    </main>

    <footer class="section">
      <div class="container grid">
        <div class="brand">
          <a class="logo logo-alt" href="#home">beauty<span>salon</span>.</a>
          <p>©2021 Beautysalon.</p>
          <p>Todos os direitos reservados.</p>
     
    </footer>

    <a href="#home" class="back-to-top"><i class="icon-arrow-up"></i></a>

    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- scrollreveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- main.js -->
    <script src="main.js"></script>
  </body>
</html>
