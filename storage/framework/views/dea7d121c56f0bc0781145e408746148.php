<?php $__env->startSection('content'); ?>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <form>
            <fieldset disabled>
              <legend>Disabled fieldset example</legend>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Disabled input</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                <select id="disabledSelect" class="form-select">
                  <option>Disabled select</option>
                </select>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Can't check this
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<h3>Data Pelajaran</h3>
<div class="card">
<div class="card-header">
<button type="button" class="btn btn-sm btn-success" onclick="window.location='<?php echo e(url('siswa/add')); ?>'">
        <i class="fas fa-plus-circle"></i> Add
</button>
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
</div>
<div class="card-body">
  <?php if(session('msg')): ?> 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> <?php echo e(session('msg')); ?>

      <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <div>
    <a class="btn btn-primary btn-sm" href="<?php echo e(route('cetak_siswa')); ?>" target="_BLANK">Cetak Data Siswa</a>
  </div>
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Pelajaran</th>
            <th>Nama Pelajaran</th>
            <th>Keterangan</th>
            <th>Aksi</th>            
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($row->id_siswa); ?></td>
            <td><?php echo e($row->nama_siswa); ?></td>
            <td><?php echo e(($row->gender=='M') ? 'Male' : 'Female'); ?></td>
            <td>
              <button onclick="window.location='<?php echo e(url('siswa/edit/'.$row->id_siswa)); ?>'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>

              <form onsubmit="return deleteData('<?php echo e($row->nama_siswa); ?>')" style="display: inline" method="POST"  action="<?php echo e(url('siswa/'.$row->id_siswa)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button  type="submit"  title="Hapus Data" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
                </button>
               
              </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
</div>

<script>
  function deleteData(name){
    pesan = confirm('Yakin data dengan nama ${name} ini dihapus?');
    if(pesan) return true;
    else return false;
  }
</script>

<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel10_bootstrap53-main\resources\views/siswa/index.blade.php ENDPATH**/ ?>