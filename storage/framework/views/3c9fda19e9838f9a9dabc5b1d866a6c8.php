<?php $__env->startSection('content'); ?>


<h3>Tambah Data Kurikulum</h3>
<form action="<?php echo e(route('kurikulum.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
<table>
    <tr>
        <td>Nama Kurikulum</td><td><input type="text" name="nama_kurikulum"></td>
    </tr>
    <tr>
        <td>Tahun</td><td><input type="text" name="tahun"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\asus\Downloads\laravel10_bootstrap53-main\resources\views/kurikulum/add.blade.php ENDPATH**/ ?>