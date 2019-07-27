<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("admin/_partials/head.php")  ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view("admin/_partials/navbar.php");  ?>
  <!-- /.navbar -->

 
    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php");  ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('sadmin/user/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Username</th>
										<th>Nama</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($user as $user): ?>
									<tr>
										<td width="150">
											<?php echo $user->username ?>
										</td>
										<td>
											<?php echo $user->nama ?>
										</td>
										<td>
                                            <?php echo $user->email?>
                                        </td>
										<td width="250">
											<a href="<?php echo site_url('sadmin/user/edit/'.$user->id_user) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('sadmin/user/delete/'.$user->id_user) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Sticky Footer 
<footer class="sticky-footer">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © <?php echo "Lulasari". Date('Y') ?></span>
    </div>
  </div>
</footer>
-->
<!-- footer-->
<?php $this->load->view("admin/_partials/footer.php");?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view("admin/_partials/jquery.php");  ?>
</body>
</html>
