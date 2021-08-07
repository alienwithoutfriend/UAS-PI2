<div class="row mt-2">
        <div class="col-3">
          <a href="<?= base_url('admin/create1') ?>" class="btn btn-success">Tambah</a>
        </div>
      </div>
      <table class="table mt-2">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Instansi</th>
            <th scope="col">Tahun Lulus</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($allpendidikan as $no => $ap) {
          ?>
            <tr>
              <th scope="row"><?= $no + 1 ?></th>
              <td><?= $ap['instansi']; ?></td>
              <td><?= $ap['lulus']; ?></td>
              <td>
                <a href="<?= base_url('pendidikan/edit/' . $ap['id']) ?>" class="btn btn-warning">Edit</a>
                <a href="<?= base_url('pendidikan/hapus/' . $ap['id']) ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
   