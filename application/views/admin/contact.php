<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php $this->load->view("admin/_partials/topbar.php") ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">About Us</h6>
            </div>
            <div class="card-body">
            <h7 class="m-0 font-weight-bold text-primary">Info Pengguna</h7>
              <ul>
                <li>Nama    : Sudrajad Hadi Saputra</li>
                <li>NRP     : 05111740000158</li>
                <li>Kelas   : PBKK B</li>
                <li>Website : <a href="https://tugas-pbkk.blogspot.com/"> Tugas PBKK </a> </li>
                <li>Email   : <a href="mailto:gelombang05@gmail.com?"> gelombang05@gmail.com </a> </li>
                <li>Twitter   : <a href="https://twitter.com/SudrajadHadi"> @SudrajadHadi </a> </li>
              </ul>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $this->load->view("admin/_partials/footer.php") ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- JavaScript-->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>