    <?php $__env->startSection('content'); ?>
        <h2>Testing</h2>

        <?php $__env->stopSection(); ?>

<?php echo $__env->make('userProfile.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>