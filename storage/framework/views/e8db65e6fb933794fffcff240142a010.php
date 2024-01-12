<body onload="window.print()">

<h1>Data Siswa</h1>
<table border="1" width="75%">
    <tr>
    <th>No</th>
    <th>ID Guru</th>
    <th>Nama Guru</th>
    <th>Genre</th>
    <td>Tanggal</td>
    </tr>

    <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($loop->iteration); ?> </td>
    <td><?php echo e($row->id_guru); ?></td>
    <td><?php echo e($row->nama_guru); ?></td>
    <td><?php echo e(($row->gender=='M') ? 'Male' : 'Female'); ?></td>
    <td><?php echo e($row->created_at); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
    
</body><?php /**PATH C:\laragon\www\laravel10_bootstrap53-main\resources\views/guru/cetak_guru.blade.php ENDPATH**/ ?>