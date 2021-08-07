<div class="mt-3">
    <form action="<?= base_url('admin/simpanpendidikan') ?>" method="POST">
     <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Instansi Pendidikan</label>
      <input type="text" name="inst" class="form-control" id="exampleFormControlInput1" placeholder="Nama Instansi Pendidikan">
     </div>
     <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tahun Lulus</label>
      <input type="number" name="lulus" class="form-control" id="exampleFormControlInput1" placeholder="Tahun Lulus">
     </div>
     <div class="mb-3">
      <button type='submit' class="btn btn-primary">Save</button>
     </div>
    </form>

   </div>
 