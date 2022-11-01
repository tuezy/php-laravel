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
<?php if (isset($component)) { $__componentOriginalfb81f0713d15bafbc2dd5e2a943dca710d2e5a09 = $component; } ?>
<?php $component = $__env->getContainer()->make(Modules\Dashboard\Components\MenuDashboard::class, ['items' => $menuItems]); ?>
<?php $component->withName('menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb81f0713d15bafbc2dd5e2a943dca710d2e5a09)): ?>
<?php $component = $__componentOriginalfb81f0713d15bafbc2dd5e2a943dca710d2e5a09; ?>
<?php unset($__componentOriginalfb81f0713d15bafbc2dd5e2a943dca710d2e5a09); ?>
<?php endif; ?>
<h1>Dashboard</h1>
</body>
</html><?php /**PATH C:\Users\Giang Nguyen\Desktop\github\php-core\Modules\Dashboard\Views/index.blade.php ENDPATH**/ ?>