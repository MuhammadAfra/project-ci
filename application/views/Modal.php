<div id="TambahModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Data Pelajar </h4>
            </div>

            <div class="modal-body">
                <form action="<?php echo base_url() ?>Niomic/add" method="POST">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="number" required class="form-control" name="nis" placeholder="Harap Masukkan NIS">
                    </div>
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" class="form-control" name="nama" placeholder="Harap Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control" name="kelas" placeholder="Harap Masukkan Kelas">
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" placeholder="Harap Masukkan Jurusan">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Harap Masukkan Email">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Batal </button>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>


<div id="UbahModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Ubah Data Pelajar </h4>
            </div>

            <div class="modal-body">
                <form action="<?php echo base_url() ?>Niomic/update" method="POST">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="number" required class="form-control nis" name="nis" placeholder="Harap Masukkan NIS" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" class="form-control nama" name="nama" placeholder="Harap Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control kelas" name="kelas" placeholder="Harap Masukkan Kelas">
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control jurusan" name="jurusan" placeholder="Harap Masukkan Jurusan">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control email" name="email" placeholder="Harap Masukkan Email">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Batal </button>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>