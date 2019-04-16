<!DOCTYPE html>
<html>
<head>
    <title>Image upload</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
</head>
<body>
<div class="col-md-6 offset-3" style="margin-top: 1%">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    Image Upload
                </div>
                <div class="col-md-2 offset-4">
                    <a href="<?php echo e(route('show.form')); ?>" class="btn btn-dark">Back </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(asset($image->image_name)); ?>" style="width: 10%" height="10%">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
</body>
</html>



<?php /* C:\xampp\htdocs\New Start\test\resources\views/show_image.blade.php */ ?>