<?php include_once 'includes/templates/header.php'; ?>
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

  <!--PARTE EDITADA POR MELANIE-->
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
      </div>
      <!--.contenedor-video-->
      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2>Programa del evento</h2>
            <nav class="menu-programa">
              <a href="#talleres"><i class="fa fa-code"></i>Talleres</a>
              <a href="#conferencias"
                ><i class="fa fa-comment"></i>Conferencias</a
              >
              <a href="#seminarios"
                ><i class="fa fa-university"></i>Seminarios</a
              >
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
            <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Como ser freelancer</h3>
              <p><i class="fa-regular fa-clock"></i>10:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de Dic</p>
              <p><i class="fa fa-user"></i> Gregorio Sanchez</p>
            </div>

            <div class="detalle-evento">
              <h3>Tecnologias del Futuro</h3>
              <p><i class="fa-regular fa-clock"></i>17:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de Dic</p>
              <p><i class="fa fa-user"></i> Susan Sanchez</p>
            </div>
            <a href="#" class="button float-right"> Ver todos</a>
          </div><!--#talleres-->
          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Diseño UI/UX para moviles</h3>
              <p><i class="fa-regular fa-clock"></i>17:00 hrs</p>
              <p><i class="fa fa-calendar"></i>11 de Dic</p>
              <p><i class="fa fa-user"></i> Harlod Garcia</p>
            </div>

            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="fa-regular fa-clock"></i>10:00 hrs</p>
              <p><i class="fa fa-calendar"></i>11 de Dic</p>
              <p><i class="fa fa-user"></i> Susana Rivera</p>
            </div>
            <a href="#" class="button float-right"> Ver todos</a>
          </div><!--#talleres-->
         </div>
          <!--.programa-evento-->
        </div>
        <!--.contenedor-->
      </div>
      <!--.contenido-programa-->
    </section>
    <!--.programa-->
    <!--PARTE EDITADA POR MELANIE-->


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
          <p class="numero">0</p>
          Invitados
        </li>
        <li>
          <p class="numero">0</p>
          Talleres
        </li>
        <li>
          <p class="numero">0</p>
          Dias
        </li>
        <li>
          <p class="numero">0</p>
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
          <p id="dias" class="numero"></p>
          días
        </li>

        <li>
          <p id="horas" class="numero"></p>
          horas
        </li>

        <li>
          <p id="minutos" class="numero"></p>
          minutos
        </li>
        <li>

          <p id="segundos" class="numero"></p>
          segundos
        </li>
      </ul>
    </div>
  </section>
  <?php include_once 'includes/templates/footer.php'; ?>
