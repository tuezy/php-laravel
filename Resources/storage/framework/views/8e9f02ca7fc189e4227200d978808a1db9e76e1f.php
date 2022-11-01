<ul>
<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="<?php if($active == $menu["order"]): ?> active <?php endif; ?>" ><?php echo e($menu['title']); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<h1>123</h1><?php /**PATH C:\Users\Giang Nguyen\Desktop\github\php-core\Modules\Dashboard\Views/layouts/menu.blade.php ENDPATH**/ ?>