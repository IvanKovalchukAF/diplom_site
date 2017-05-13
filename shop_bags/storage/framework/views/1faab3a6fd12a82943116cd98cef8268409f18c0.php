<?php $__env->startSection('body'); ?>

    <div id="shop_bags" class="text-center" >
        <h2>WELCOME to Burmistrovy SHOP!</h2>
        <p>We have the best prices for quality products!!!</p>
    </div>

    <div class="starter-template">
        <div class="row">
            <div class="col-md-3">
                <?php echo $__env->make('categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-md-9">
                <?php echo $__env->yieldContent('content'); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>