<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <title></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="manifest" href="site.webmanifest" />
  <link rel="apple-touch-icon" href="icon.png" />
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
    crossorigin="" />

  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.css" />

  <meta name="theme-color" content="#fafafa" />
</head>

<body>
  <!--[if IE]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

  <!-- Add your site or application content here -->

  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </nav>
        <div class="informacion-evento">
          <div class="clearfix">
            <p class="fecha">
              <i class="fa-regular fa-calendar-days"></i>10-12 Dic
            </p>
            <p class="ciudad">
              <i class="fa-solid fa-location-dot"></i>Guadalajara, MX
            </p>
          </div>
          <h1 class="nombre-sitio">GdlWebcamp</h1>
          <p class="slogan">
            la mejor conferencia de <span>diseño web</span>
          </p>
        </div>
        <!--.informacion-evento-->
      </div>
    </div>
    <!--.hero-->
  </header>

  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
        <img src="img/logo.svg" alt=" logo gdlwebcamp" srcset="" />
      </div>

      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="navegacion-principal clearfix">
        <a href="#">Conferencia</a>
        <a href="#">Calendario</a>
        <a href="#">Invitados</a>
        <a href="registro.html">Reservaciones</a>
      </nav>
    </div>
    <!--.contenedor-->
  </div>
  <!--.barra-->

  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>
      Duis sit amet facilisis erat. Etiam metus lorem, tristique eget massa
      in, vehicula commodo ante. Cras pellentesque ex sed imperdiet
      sollicitudin. Proin malesuada, nibh non accumsan semper, neque augue
      cursus arcu, vitae rutrum enim augue non ex. Sed aliquam purus et dui
      aliquet, ac ullamcorper eros malesuada.
    </p>
  </section>
  <!--.seccion-->

  <section class="programa">
    <div class="contenedor-video">
    <div class="slider">
          <?php
              $ids = array(1,2,3,4,5);
              $alt = array(
                  "Slide 1",
                  "Slide 2",
                  "Slide 3",
                  "Slide 4",
                  "Slide 5"
              );
              $max = count($ids);
              for($s=0;$s<$max;$s++){ ?>
                  <input type="radio" id="<?= $ids[$s]; ?>" name="image-slide" hidden />
              <?php }
          ?>
          <div class="slideshow">
              <?php for($s=0;$s<$max;$s++){ ?>
              <div class="item-slide">
                  <img src="img/<?= $ids[$s]; ?>.jpg" alt="<?= $alt[$s]; ?>" />
              </div>
              <?php } ?>
          </div>
          <div class="pagination">
              <?php for($s=0;$s<$max;$s++){ ?>
              <label class="pag-item" for="<?= $ids[$s]; ?>">
                  <img src="img/<?= $ids[$s]; ?>.jpg" alt="<?= $alt[$s]; ?>" />
              </label>
              <?php } ?>
          </div>
      </div>
    </div><!--.contenedor-video-->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code"></i>Talleres</a>
            <a href="#conferencias"><i class="fa fa-comment"></i>Conferencias</a>
            <a href="#seminarios"><i class="fa fa-university"></i>Seminarios</a>
          </nav>
          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 y JavaScript</h3>
              <p><i class="fa-regular fa-clock"></i>16:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de Dic</p>
              <p><i class="fa fa-user"></i> Juan Pablo De la torre Valdez</p>
            </div>

            <div class="detalle-evento">
              <h3>Responsive Web Desing</h3>
              <p><i class="fa-regular fa-clock"></i>20:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de Dic</p>
              <p><i class="fa fa-user"></i> Juan Pablo De la torre Valdez</p>

            </div>
            <a href="#" class="button float-right"> Ver todos</a>
          </div>
          <!--#talleres-->
        </div>
        <!--.programa-evento-->
      </div>
      <!--.contenedor-->
    </div>
    <!--.contenido-programa-->
  </section>
  <!--.programa-->

  <section class="invitados contenedor">
    <h2>Nuestros Invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="Imagen invitado" />
          <p>Rafael Bautista</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="Imagen invitado" />
          <p>Shari Herrera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="Imagen invitado" />
          <p>Gregorio Sanchez</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="Imagen invitado" />
          <p>Susana Rivera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="Imagen invitado" />
          <p>Harold Garcia</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="Imagen invitado" />
          <p>Susan Sanchez</p>
        </div>
      </li>
    </ul>
  </section>

  <div class="contador parallax">
    <!--PARALLAX ES UN EFECTO-->
    <div class="contenedor">
      <ul class="resumen-evento">
        <li>
          <p class="numero">6</p>
          Invitados
        </li>
        <li>
          <p class="numero">15</p>
          Talleres
        </li>
        <li>
          <p class="numero">3</p>
          Dias
        </li>
        <li>
          <p class="numero">9</p>
          Conferencias
        </li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearflix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por dia</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Todos los dias</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 dias</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa"></div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>
            Vestibulum mollis dapibus rutrum. Nulla ac porttitor ipsum.
            Vestibulum auctor nunc arcu, et pharetra lacus euismod sed.
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial" />
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <!--.testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>
            Vestibulum mollis dapibus rutrum. Nulla ac porttitor ipsum.
            Vestibulum auctor nunc arcu, et pharetra lacus euismod sed.
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial" />
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <!--.testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>
            Vestibulum mollis dapibus rutrum. Nulla ac porttitor ipsum.
            Vestibulum auctor nunc arcu, et pharetra lacus euismod sed.
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial" />
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <!--.testimonial-->
    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p> regístrate al newsletter:</p>
      <h3>gdlwebcamp</h3>
      <a href="#" class="button transparente">Registro</a>
    </div>
    <!--.contenido-->
  </div>
  <!--.newslette-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li>
          <p class="numero">80</p>
          días
        </li>

        <li>
          <p class="numero">15</p>
          horas
        </li>

        <li>
          <p class="numero">5</p>
          minutos
        </li>
        <li>

          <p class="numero">30</p>
          segundos
        </li>
      </ul>
    </div>
  </section>

  <footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-informacion">
        <h3>Sobre<span>gdlwebcamp</span></h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae harum, repellat atque iste nostrum
          sapiente.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae harum, repellat atque iste
          nostrum sapiente.</p>
      </div>
      <div class="ultimos-tweets">
        <h3>Últimos<span>tweets</span></h3>
        <ul>
          <li>Lorem ipsum dolor sit amet. #Pellentesque nec @justo non est elefiend pulvigar</li>
          <li>Lorem ipsum dolor sit amet. #Pellentesque nec @justo non est elefiend pulvigar</li>
          <li>Lorem ipsum dolor sit amet. #Pellentesque nec @justo non est elefiend pulvigar</li>

        </ul>
      </div>
      <div class="menu">
        <h3>Redes<span>Sociales</span></h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </nav>
      </div>
    </div>

    <p class="copryright">
      Todos los Derechos Reservados GDLWEBCAMP 2016.
    </p>
  </footer>

  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>
    window.jQuery ||
      document.write(
        '<script src="js/vendor/jquery-3.4.1.min.js"><\/script>'
      );

  </script>
  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
  integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
  crossorigin=""></script>
  <script src="js/main.js"></script>

  

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
      ga.q.push(arguments);
    };
    ga.q = [];
    ga.l = +new Date();
    ga("create", "UA-XXXXX-Y", "auto");
    ga("set", "transport", "beacon");
    ga("send", "pageview");

  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  
</body>

</html>
