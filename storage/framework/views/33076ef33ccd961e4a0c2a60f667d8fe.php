<body onload="window.print()">

<h1>Data Siswa</h1>
<table border="1" width="75%">
    <tr>
    <td>No</td>
                <td>Nama Guru</td>
                <td>Nama Siswa</td>
                <td>Nilai UTS</td>
                <td>Nilai UAS</td>
                <td>Tanggal</td>
    </tr>

    <?php $__currentLoopData = $nilai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($loop->iteration); ?> </td>
    <td><?php echo e($rows->guru->nama_guru); ?></td>
                    <td><?php echo e($rows->siswa->nama_siswa); ?></td>
                    <td><?php echo e($rows->nilai_uts); ?> </td>
                    <td><?php echo e($rows->nilai_uas); ?> </td>
                    <td><?php echo e($rows->created_at); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
    
</body><?php /**PATH C:\Users\asus\Downloads\laravel10_bootstrap53-main\resources\views/nilaimahadika/cetak_nilaimahadika.blade.php ENDPATH**/ ?>