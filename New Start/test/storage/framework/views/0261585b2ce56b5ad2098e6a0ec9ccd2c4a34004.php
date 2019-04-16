<!DOCTYPE html>
<html>
<head>
    <title>Image upload</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
</head>
<body>
<div class="col-md-12" style="margin-top: 1%">
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session('success')); ?>

        </div>
    <?php endif; ?>
    <a href="<?php echo e(route('logout')); ?>" class="btn btn-dark" style="margin-left: 90%">Logout</a>
    <table class="table">
        <thead>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Registration Date</th>
        <th>Gender</th>
        <th>language</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php $__currentLoopData = $plays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $play): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($play->id); ?></td>
                <td><?php echo e($play->name); ?></td>
                <td><?php echo e($play->email); ?></td>
                <td><?php echo e($play->mobile); ?></td>
                <td><?php echo e($play->reg_date); ?></td>
                <td><?php echo e($play->gender); ?></td>
                <td>
                    <?php
                        $languages=explode(',',$play->language);
                   foreach ($languages as $language)
                    {
                     echo $language."<br>";
                    }
                    ?>
                </td>
                <td>
                    <a href="<?php echo e(URL::to('forms/edit/'.$play->id)); ?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo e(URL::to('forms/delete/'.$play->id)); ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($plays->links()); ?>

</div>
</body>
</html>



<?php /* C:\xampp\htdocs\New Start\test\resources\views/datatable.blade.php */ ?>