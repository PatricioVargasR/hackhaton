<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <div class="row">
        <div class="col-md-3">
          <img src="<?= base_url('assets/img/logo.jpeg'); ?>" style="width: 70px" alt="Museo del Santo">
        </div>
        <div class="col-md-9">

        </div>
      </div>
    <a class="navbar-brand d-block d-sm-none d-md-none" href="#"></a>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('index.php'); ?>"> Inicio

          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('noticias.php'); ?>"> Categorias
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('productos.php'); ?>"> Productos

          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('informacion.php'); ?>"> Informacion

          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('acerca.php'); ?>"> Acerca de Nostros
          </a>
        </li>
        <?php if(isset($_SESSION['auth_user'])): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['user_name']; ?>
          </a>
          <ul class="dropdown-menu">
            <li>
                <form action="<?= base_url('allcode.php'); ?>" method="POST">
                  <button type="submit" name="logout_btn" class="dropdown-item">Cerrar Sesión</button>
                </form>

            </li>
          </ul>
        </li>

        <?php else : ?>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('login.php'); ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('register.php'); ?>">Register</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>