<div class="row mt-2">
        <div class="col-3">
          <a href="<?= base_url('admin/create') ?>" class="btn btn-success">Tambah</a>
        </div>
      </div>
      <table class="table mt-2">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Profesi</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($allprofil as $no => $ap) {
          ?>
            <tr>
              <th scope="row"><?= $no + 1 ?></th>
              <td><?= $ap['nama']; ?></td>
              <td><?= $ap['profesi']; ?></td>
              <td><?= $ap['alamat']; ?></td>
              <td>
                <a href="<?= base_url('admin/edit/' . $ap['id']) ?>" class="btn btn-warning">Edit</a>
                <a href="<?= base_url('admin/hapus/' . $ap['id']) ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
   