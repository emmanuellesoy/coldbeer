<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php home_url(); ?>blog">
        <img src="<?php echo get_stylesheet_directory_uri() . '/img/logo.svg'; ?>" alt="<?php echo get_bloginfo('description'); ?>" width="170" />
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="<?php home_url(); ?>blog">
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/logo_ellysium.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>" />
          </a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Blog</a></li>
        <li><a href="/tienda">Productos</a></li>
        <li><a href="#" ><span class="label label-default">Personaliza tu cerveza</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
