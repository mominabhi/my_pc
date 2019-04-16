<!DOCTYPE html>
<html>
<head>
    <title>Image upload</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
</head>
<body>
<div class="col-md-8 offset-2" style="margin-top: 1%">
    <?php if(Session::has('error')): ?>
   <div class="alert alert-danger">
       <?php echo e(Session('error')); ?>

   </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            <h3 style="text-align: center;color: darkgrey">Login User</h3>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo e(route('login')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="submit" class="btn btn-dark btn-block" value="লগিন">
            </form>
        </div>
    </div>
</div>
</body>
</html>





<?php /* C:\xampp\htdocs\New Start\test\resources\views/login.blade.php */ ?>