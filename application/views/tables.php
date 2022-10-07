  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Data Tables
              <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Tables</a></li>
              <li class="active">Data tables</li>
          </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-xs-12">
                  <div class="box">
                      <div class="box-header">
                          <h3 class="box-title">Data Pelajar - SMK</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                          <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                  <tr>
                                      <th>NIS</th>
                                      <th>Nama Siswa</th>
                                      <th>Kelas</th>
                                      <th>Jurusan</th>
                                      <th>Email</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php 
                                    foreach($pelajar->result_array() as $data) {
                                ?>
                                  <tr>
                                      <td><?php echo $data['nis'];?></td>
                                      <td><?php echo $data['nama'];?></td>
                                      <td><?php echo $data['kelas'];?></td>
                                      <td><?php echo $data['jurusan'];?></td>
                                      <td><?php echo $data['email'];?></td>
                                  </tr>
                                  <?php } ?>
                                  </tfoot>
                          </table>
                      </div>
                      <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
      <div class="pull-right hidden-xs">
          <b>Version</b> 2.4.13
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
      reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
  </div>