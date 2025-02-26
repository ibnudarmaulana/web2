<!DOCTYPE html>
<html lang="en">

<?php include('templates/head.php') ?>

<body>

  <!-- ======= Header ======= -->
  <?php include('templates/header.php') ?>

  <!-- ======= Sidebar ======= -->
  <?php include('templates/sidebar.php') ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-title px-4"><h5>Data User</h5>
          <a href="" class="btn btn-sm btn-primary end">Tambah User</a>
        </div>
          <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($users as $item) :?>
              <tr>
                <th scope="row"><?= $item['id']; ?></th>
                <td><?= $item['username']; ?></td>
                <td><?= $item['nama']; ?></td>
                <td>
                <div class="dropdown">
                  <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Lihat</a></li>
                    <li><a class="dropdown-item" href="#">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                  </ul>
                </div>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('templates/footer.php') ?>

</body>

</html>