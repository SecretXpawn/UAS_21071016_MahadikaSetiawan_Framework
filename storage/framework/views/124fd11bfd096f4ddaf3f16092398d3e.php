<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo 5</title>
    <link href="<?php echo e(asset('/')); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="<?php echo e(asset('/')); ?>assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
    </head>

  <body>
     <!-- start lwh nav -->
        <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel 10</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                <a class="nav-link <?php echo e(request()->segment('1')=='' || request()->segment('1') == 'home' ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(url('home')); ?>">
                <i class="fas fa-tachometer-alt"></i> Home</a>
                </li>


                <li class="nav-item">
                <a class="nav-link <?php echo e(request()->segment('1') =='siswa'  ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(url('siswa')); ?>">
                <i class="fas fa-user"></i> Siswa</a>
                </li>

                
                <li class="nav-item">
                <a class="nav-link <?php echo e(request()->segment('1') =='guru'  ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(url('guru')); ?>">
                <i class="fas fa-user"></i> Guru</a>
                </li>

                <li class="nav-item">
                <a class="nav-link <?php echo e(request()->segment('1') =='kurikulum'  ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('kurikulum.index')); ?>">
                <i class="fas fa-user"></i> Kurikulum</a>
                </li>

                <li class="nav-item">
                <a class="nav-link <?php echo e(request()->segment('1') =='jadwal'  ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('jadwal.index')); ?>">
                <i class="fas fa-user"></i> Jadwal</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php echo e(request()->segment('1') =='nilai'  ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('nilai.index')); ?>">
                <i class="fas fa-user"></i> Nilai</a>
                </li>

                <li class="nav-item">
                <a class="nav-link <?php echo e(request()->segment('1') =='jadwal'  ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('logout')); ?>">
                <i class="fas fa-user"></i> Logout</a>
                </li>

            </ul>
            </div>
        </div>
        </nav>
        <!-- end lwh nav -->


        <!-- content -->
        <div class="mt-2">
            <div class="container">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <!-- end content -->

    <script src="<?php echo e(asset('/')); ?>assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
<script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    });
</script>
</body>
</html><?php /**PATH C:\laragon\www\laravel10_bootstrap53-main\resources\views/layout/main.blade.php ENDPATH**/ ?>