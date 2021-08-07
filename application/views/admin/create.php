<div class="mt-3">
    <form action="<?= base_url('admin/simpanprofil') ?>" method="POST">
     <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
     </div>
     <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Profesi</label>
      <input type="text" name="profesi" class="form-control" id="exampleFormControlInput1" placeholder="Profesi">
     </div>
     <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
      <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
     </div>
     <div class="mb-3">
      <button type='submit' class="btn btn-primary">Save</button>
     </div>
    </form>

   </div>
 