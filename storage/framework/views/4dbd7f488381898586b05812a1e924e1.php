<?php $__env->startSection('content'); ?>

<h1>Data Nilai</h1>
<div class="card">
        <div class="card-body">  
        <div>
    <a class="btn btn-primary btn-sm" href="<?php echo e(route('cetak_nilai')); ?>" target="_BLANK">Cetak Data Siswa</a>
  </div> 
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Nama Guru</td>
                <td>Nama Siswa</td>
                <td>Nilai UTS</td>
                <td>Nilai UAS</td>
                <td>Tanggal</td>
                <td>Aksi</td>
                <td>Delete</td>
            </tr>
            </thead>
            <?php $__currentLoopData = $nilai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                 <tr>
                    <td><?php echo e($loop->iteration); ?> </td>
                    <td><?php echo e($rows->guru->nama_guru); ?></td>
                    <td><?php echo e($rows->siswa->nama_siswa); ?></td>
                    <td><?php echo e($rows->nilai_uts); ?> </td>
                    <td><?php echo e($rows->nilai_uas); ?> </td>
                    <td><?php echo e($rows->created_at); ?></td>
                    <td>
                        <a href="<?php echo e(route('kurikulum.edit', $rows->id_kurikulum)); ?>">Edit</a>                                      
                    </td>
                    <td> 
                    <form action="<?php echo e(route('kurikulum.destroy', $rows->id_kurikulum)); ?>" method="POST">
                            <?php echo csrf_field(); ?> 
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm">Del</button>
                        </form>  
                    </td>
                 </tr>   
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            </table>
        </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\asus\Downloads\laravel10_bootstrap53-main\resources\views/nilaimahadika/index.blade.php ENDPATH**/ ?>