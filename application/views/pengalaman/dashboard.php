<div class="row mt-2">
        <div class="col-3">
          <a href="<?= base_url('admin/create2') ?>" class="btn btn-success">Tambah</a>
        </div>
      </div>
      <table class="table mt-2">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Perusahaan</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Tahun Mulai</th>
            <th scope="col">Tahun Berakhir</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($allpengalaman as $no => $ap) {
          ?>
            <tr>
              <th scope="row"><?= $no + 1 ?></th>
              <td><?= $ap['perusahaan']; ?></td>
              <td><?= $ap['jabatan']; ?></td>
              <td><?= $ap['tahun_mulai']; ?></td>
              <td><?= $ap['tahun_akhir']; ?></td>
              <td>
                <a href="<?= base_url('pengalaman/edit/' . $ap['id']) ?>" class="btn btn-warning">Edit</a>
                <a href="<?= base_url('pengalaman/hapus/' . $ap['id']) ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
   