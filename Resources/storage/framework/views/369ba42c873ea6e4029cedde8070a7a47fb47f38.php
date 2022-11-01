<!doctype html>
<html lang=" <?php echo e(app()->setLocale("en")); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('admin.css')); ?>">
</head>
<body>
<?php echo $__env->make("dashboard::layouts.menu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1>Dashboard</h1>
<?php echo e(__("auth.fail")); ?>

<?php echo e(__("Settings::menu.title")); ?>

</body>
</html><?php /**PATH C:\Users\Giang Nguyen\Desktop\github\php-core\Modules\Dashboard\Views/index.blade.php ENDPATH**/ ?>