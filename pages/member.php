<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid mt-5">
      <div class="row ">
        <div class="col-md-6">
          <h1 class="m-0 text-dark">Customer</h1>

        </div><!-- /.col -->
        <div class="col-md-6 mt-3">
          <ol class="breadcrumb float-right">
            <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
            <li class="breadcrumb-item active">Customer</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- *************  table start here *********** -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>All Customer info</b></h3>
          <button type="button" class="btn btn-primary btn-sm float-right rounded-0" data-toggle="modal" data-target=".myModal"><i class="fas fa-plus"></i> Add new</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table id="empTable" class="display dataTable text-center">
              <thead>
                <tr>
                  <th>Party Id</th>
                  <th>Name</th>
                  <th>Company</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Postal Code</th>
                  <th>action</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->