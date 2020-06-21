 <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <!-- <a href="#" class="d-block"><?= $_SESSION['nama_user']?></a> -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               
          <li class="nav-item">
            <a href="<?= base_url('backend')?>" class="nav-link">
              <i class="fas fa-sign-out nav-icon"></i>
              <p>Login</p>
            </a>
          </li>

          



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
