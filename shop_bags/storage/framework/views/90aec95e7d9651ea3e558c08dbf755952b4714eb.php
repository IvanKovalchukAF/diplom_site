
<?php $__currentLoopData = App\Categories::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>
    <div>
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active">
                <a href="/categories/<?php echo e($category->id); ?>"><?php echo e($category->name); ?></a>
            </li>
        </ul>
    </div>
    </p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = App\Goods::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $good): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="contain">
        <div class="col-sm-1 col-md-4">
            <div class="reply">
                <?php $__currentLoopData = App\GoodsImages::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($image->product_id == $good->id): ?>
                        <img src="<?php echo e($image->path_image); ?>" height="200px" width="200px" />
                        <?php break; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                

                <div class="caption">
                    <h4><?php echo e($good->name); ?></h4>
                    <p><?php echo e(substr(($good->description), 0, 25)); ?>...</p>
                    <p><a href="/goods/<?php echo e($good->id); ?>" class="btn btn-primary" role="button">Overview</a> </p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>