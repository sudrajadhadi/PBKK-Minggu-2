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
    	<div class="card mb-3">
			<div class="card-header">
				<a href="<?php echo base_url('add') ?>"><i class="fas fa-plus"></i> Add New</a>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Name</th>
								<th>Price</th>
								<th>Photo</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($products as $product): ?>
							<tr>
								<td width="150">
									<?php echo $product->name ?>
								</td>
								<td>
									<?php echo $product->price ?>
								</td>
								<td>
									<img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="64" />
								</td>
								<td class="small">
									<?php echo substr($product->description, 0, 120) ?>...</td>
								<td width="250">
									<a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>"
									 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
									<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
									 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
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