<div class="mt-3">
    <form action="<?= base_url('admin/simpanpengalaman') ?>" method="POST">
     <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
      <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Perusahan">
     </div>
     <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
      <input type="text" name="jabatan" class="form-control" id="exampleFormControlInput1" placeholder="Jabatan">
     </div>
     <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tahun Mulai</label>
      <input type="date" name="mulai" class="form-control" id="exampleFormControlInput1">
     </div>
     <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tahun Berhenti</label>
      <input type="date" name="akhir" class="form-control" id="exampleFormControlInput1">
     </div>
     <div class="mb-3">
      <button type='submit' class="btn btn-primary">Save</button>
     </div>
    </form>

   </div>
 