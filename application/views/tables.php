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

                          <?php if ($this->session->flashdata("success")) { ?>
                              <div class="alert alert-success">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <i class="fa fa-close"></i>
                                  </button>
                                  <span style="text-align:left;"><?php echo $this->session->flashdata("success");?></span>
                              </div>
                          <?php } ?>

                          <?php if ($this->session->flashdata("error")) { ?>
                            <div class="alert alert-error">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <span style="text-align:left;"><?php echo $this->session->flashdata("error");?></span>
                            </div>
                          <?php } ?>

                          <h3 class="box-title">Data Pelajar - SMK</h3>
                      </div>

                      <div class="box-body">
                          <div class="pull-right">
                              <a href="<?php echo base_url() ?>Niomic/tambah_data" class="btn btn-primary"><i class="mdi mid-plus-circle mr-2 fa fa-plus"></i> &nbsp;Tambah Pelajar</a>
                          </div>
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
                                      <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                    foreach ($pelajar->result_array() as $data) {
                                    ?>
                                      <tr>
                                          <td><?php echo $data['nis']; ?></td>
                                          <td><?php echo $data['nama']; ?></td>
                                          <td><?php echo $data['kelas']; ?></td>
                                          <td><?php echo $data['jurusan']; ?></td>
                                          <td><?php echo $data['email']; ?></td>
                                          <td><span data-toggle="tooltip" data-original-title="Edit Data" style="font-size:10;"><a class="btn btn-warning" href="<?php echo base_url()?>Niomic/edit_data/<?php echo $data['nis'];?>"><i class="fa fa-edit"></i></a></span>
                                            <span data-toggle="tooltip" data-original-title="Hapus Data" style="font-size:10;"><a class="btn btn-danger" href="<?php echo base_url()?>Niomic/delete/<?php echo $data['nis'];?>"><i class="fa fa-trash"></i></a></span></td>
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