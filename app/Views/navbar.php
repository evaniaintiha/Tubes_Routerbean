<?php
  $session = session();
?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="<?= site_url('home')?>">Perpustakaan AVA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <?php if($session->get('isLoggedIn')): ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('home/index')?>">Home <span class="sr-only">(current)</span></a>
                   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01"
          data-toggle="dropdown" aria-haspopup = "true" aria-expanded="falses">
          Daftar Buku</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?= site_url('fiksi/index')?>">Fiksi</a>
            <a class="dropdown-item" href="<?= site_url('edukasi/index')?>">Edukasi</a>
            <a class="dropdown-item" href="<?= site_url('biografi/index')?>">Biografi</a>
          </div>
        </li>
          </li>
          

          <?php if(session()->get('role')==0): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01"
          data-toggle="dropdown" aria-haspopup = "true" aria-expanded="falses">
          Tambah Buku</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?= site_url('fiksi/create')?>">Fiksi</a>
            <a class="dropdown-item" href="<?= site_url('edukasi/create')?>">Edukasi</a>
            <a class="dropdown-item" href="<?= site_url('biografi/create')?>">Biografi</a>
          </div>
        </li>
          <?php endif ?>
        </ul>  
      <?php endif ?>
        <div class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
              <?php if($session->get('isLoggedIn')): ?>
                <a class="btn btn-dark" href="<?= site_url('auth/logout') ?>">Logout</a>
              </li>
              <?php else : ?>
              <li class="nav-item">
                <a class="btn btn-dark" href="<?= site_url('auth/login')?>">Login</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-dark" href="<?= site_url('auth/register') ?>">Register</a>
              </li>
              <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>