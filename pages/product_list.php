<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><!-- Dashboard v2 --></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Catagory</li>
            </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><b>Total Product List</b></h3>
                    <a href="index.php?page=add_product" target="_blank" class="btn btn-primary btn-sm float-right rounded-0" style="margin:8px;"><i class="fas fa-plus"></i> New Product</a>
                  </div>
                  
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="productTable" class="display table dataTable text-center">
                        <thead>
                          <tr >
                            <th >Product Id</th>
                            <th>Product name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Source</th>
                            <th>quantity</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        
                      </table>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                  <!-- /.card-body -->
                </div>
          </section>