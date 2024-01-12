<?php $__env->startSection('content'); ?>

<h1>Jadwal Pelajaran</h1>
<div class="card">
        <div class="card-header">
        <a href="<?php echo e(route('kurikulum.create')); ?>" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Nama Guru</td>
                <td>Pelajaran</td>
                <td>Jam Mulai</td>
               
                <td>Tanggal</td>
                <td>Aksi</td>
                <td>Delete</td>
            </tr>
            </thead>
            <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                 <tr>
                    <td><?php echo e($loop->iteration); ?> </td>
                    <td><?php echo e($rows->nama_guru); ?></td>
                    <td><?php echo e($rows->nama_pelajaran); ?></td>
                    <td><?php echo e($rows->jam_mulai); ?> </td>
                    <td><?php echo e($rows->created_at); ?></td>
                    <td>
                        <a href="<?php echo e(route('kurikulum.edit', $rows->id)); ?>">Edit</a>                                      
                    </td>
                    <td> 
                    <form action="<?php echo e(route('kurikulum.destroy', $rows->id)); ?>" method="POST">
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
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\asus\Downloads\laravel10_bootstrap53-main\resources\views/jadwal/index.blade.php ENDPATH**/ ?>