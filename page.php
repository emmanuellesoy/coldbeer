<?php /* Template Name: Front Page */ ?>

<?php get_header(); ?>

<header class="page-header text-center">
  <h1>Que la cerveza hable de ti</h1>
  <p>
    <small>
      Diseña la etiqueta de tu cerveza artesanal
    </small>
  </p>
</header>

<!-- start .main-content [section] -->

<div class="container">
  <div class="col-md-12 light-bg content-boxed">
    <div class="timeline-header text-center">
      <h4 class="timeline-title">Este es el proceso para crear tu cerveza</h4>
    </div>

    <ul class="timeline">
    <li>
      <div class="timeline-badge">1</div>

      <div class="timeline-panel">

        <div class="timeline-body">

          <img src="<?php echo get_stylesheet_directory_uri() . '/img/cervezas.png' ?>" alt="" />

        </div>

      </div>

      <div class="timeline-panel timeline-panel-oposite">

        <div class="timeline-heading">

          <h4 class="timeline-title">Estilo de cerveza</h4>

        </div>

        <div class="timeline-body">

          <p>

            Escoge tu sabor favorito entre las cervezas de Ellysium.

          </p>

        </div>

      </div>

    </li>



    <li>

      <div class="timeline-badge">2</div>

      <div class="timeline-panel timeline-panel-oposite">

        <div class="timeline-body">

          <img src="<?php echo get_stylesheet_directory_uri() . '/img/marcos.png' ?>" alt="" />

        </div>

      </div>

      <div class="timeline-panel">

        <div class="timeline-heading">

          <h4 class="timeline-title">Tipo de etiqueta</h4>

        </div>

        <div class="timeline-body">

          <p>

            Decide la forma que tendrá la etiqueta de tu cerveza.

          </p>

        </div>

      </div>

    </li>



    <li>

      <div class="timeline-badge">3</div>

      <div class="timeline-panel">

        <div class="timeline-body">

          <img src="<?php echo get_stylesheet_directory_uri() . '/img/marca.png' ?>" alt="" />

        </div>

      </div>

      <div class="timeline-panel timeline-panel-oposite">

        <div class="timeline-heading">

          <h4 class="timeline-title">Personalización</h4>

        </div>

        <div class="timeline-body">

          <p>

            Añade una imagen o fotografía, cambia las leyendas y colores de la etiqueta de tu cerveza.

          </p>

        </div>

      </div>

    </li>



    <li>

      <div class="timeline-badge">4</div>

      <div class="timeline-panel timeline-panel-oposite">

        <div class="timeline-body">

          <img src="<?php echo get_stylesheet_directory_uri() . '/img/envio.png' ?>" alt="" />

        </div>

      </div>

      <div class="timeline-panel">

        <div class="timeline-heading">

          <h4 class="timeline-title">Datos de envío</h4>

        </div>

        <div class="timeline-body">

          <p>

            Escribe la información para enviar tus cervezas.

          </p>

        </div>

      </div>
    </li>
  </ul>

  <div class="timeline-footer text-center">
    <h4 class="timeline-title">¿Listo?</h4><br>
  </div>
  <div class="col-md-12 text-center">
    <a href="#" class="btn btn-info">Personaliza tu cerveza</a>
  </div>
  <div class="col-md-12 text-center">
      <br><br>
      <a href="<?php echo home_url(); ?>/tienda" class="link-default">O compra cervezas con la presentación de Ellysium</a>
  </div>
  </div>
</div>

<div class="container-fluid  module parallax parallax-1">

</div>
<!-- end .main-content [section] -->
<?php get_footer(); ?>

