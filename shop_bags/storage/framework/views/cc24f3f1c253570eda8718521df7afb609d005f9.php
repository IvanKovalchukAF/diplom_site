<?php $__env->startSection('content'); ?>
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="<?php echo e($image->path_image); ?>" height="150px" width="150px" />
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <p>
            <p><?php echo e($good->name); ?></p>
            <p><?php echo e($good->description); ?></p>
            <p>$ <?php echo e($good->price); ?></p>
        </p>
    <form action="/order/<?php echo e($good->id); ?>">
        <input type="submit" value="order" class="btn btn-primary">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>