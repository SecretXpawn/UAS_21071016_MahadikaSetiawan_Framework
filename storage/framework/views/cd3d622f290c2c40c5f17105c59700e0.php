<?php $__env->startSection('content'); ?>

<h3>Data Guru</h3>
<div class="card">
<div class="card-header">
<button type="button" class="btn btn-sm btn-success" onclick="window.location='<?php echo e(url('guru/add')); ?>'">
        <i class="fas fa-plus-circle"></i> Add
</button>
<div>
    <a class="btn btn-primary btn-sm" href="<?php echo e(route('cetak_guru')); ?>" target="_BLANK">Cetak Data guru</a>
  </div> 
</div>
<div class="card-body">
  <?php if(session('msg')): ?> 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> <?php echo e(session('msg')); ?>

      <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>

  <form method="GET">
    <div class="row mb-3">
    <label for="search" class="col-sm-2 col-form-label">Cari Data</label>
    <div class="col-sm-10">
    <input type="text" class="form-control form-control-sm"  placeholder="Pencarian" name="search" autofocus value="<?php echo e($search); ?>">
    </div>
    </div>
  </form>
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Guru</th>
            <th>Nama Guru</th>
            <th>Genre</th>
            <th>Aksi</th>            
        </tr>
    </thead>

    <tbody>
      <!-- agar nomor berjalan pada pagination -->
      <?php
        $nomor = 1 + (($guru->currentPage() - 1) * $guru->perPage()); 
      ?>
        <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <!-- <td><?php echo e($loop->iteration); ?></td> -->
            <td><?php echo e($nomor++); ?></td>
            <td><?php echo e($row->id_guru); ?></td>
            <td><?php echo e($row->nama_guru); ?></td>
            <td><?php echo e(($row->gender=='M') ? 'Male' : 'Female'); ?></td>
            <td>
              <button onclick="window.location='<?php echo e(url('guru/'.$row->id_guru)); ?>'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>

              <form onsubmit="return deleteData('<?php echo e($row->nama_guru); ?>')" style="display: inline" method="POST"  action="<?php echo e(url('guru/'.$row->id_guru)); ?>">
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
  <!-- <?php echo e($guru->links()); ?> -->
  <?php echo $guru->appends(Request::except('page'))->render(); ?>


</div>
</div>

<script>
  function deleteData(name){
    pesan = confirm('Yakin data dengan nama ${name} ini dihapus?');
    if(pesan) return true;
    else return false;
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel10_bootstrap53-main\resources\views/guru/index.blade.php ENDPATH**/ ?>