


<!-- Modal Edit -->
<div class="modal fade" id="editModal<?php echo $d['idpeserta']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?php echo $d['idpeserta']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel<?php echo $d['idpeserta']; ?>">Edit Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Edit -->
                <form method="POST" action="proses/edit-siswa.php">


                <div class="mb-3">
                        <label for="nama_siswa" class="form-label">ID Peserta</label>
                        <input type="text" class="form-control" id="nama_siswa" name="idpeserta" value="<?php echo $d['idpeserta']; ?>" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" name="namasekolah" value="<?php echo $d['namasekolah']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="namagugus" value="<?php echo $d['namagugus']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="namakoor" required><?php echo $d['namakoor']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="text" class="form-control" id="umur" name="kontak" value="<?php echo $d['kontak']; ?>" required>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
