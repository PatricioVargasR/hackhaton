<div id="layoutSidenav_nav">
    <?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>

    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link <?= $page == 'index.php' ? 'active':''?>" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed  <?= $page == 'category-add.php' || $page == 'category-view.php' || $page == 'category-edit.php' ? 'active':''?> " href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Categorias
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?= $page == 'category-add.php' || $page == 'category-view.php' || $page == 'category-edit.php' ? 'show':''?>" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link  <?= $page == 'category-add.php' ? 'active':''?>" href="category-add.php">Agregar Categorias</a>
                        <a class="nav-link <?= $page == 'category-view.php' || $page == 'category-edit.php' ? 'active':''?>" href="category-view.php">Ver Categorias</a>
                    </nav>
                </div>

                <a class="nav-link collapsed <?= $page == 'product-add.php' || $page == 'product-view.php' || $page == 'product-edit.php' ? 'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Productos
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?= $page == 'product-add.php' || $page == 'product-view.php' || $page == 'product-edit.php' ? 'show':''?>" id="collapseProducts" aria-labelledby="Products" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?= $page == 'product-add.php' ? 'active':''?> " href="product-add.php">Agregar Producto</a>
                        <a class="nav-link <?= $page == 'product-view.php' || $page == 'product-edit.php' ? 'active':''?>" href="product-view.php">Ver Producto</a>
                    </nav>
                </div>


            </div>
        </div>
        <!-- <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?= $_SESSION['auth_user']['user_name']; ?>
        </div> -->
    </nav>
</div>