<div class="user-details-manage bg-white">
    <div class="user-details-manage-list">
        <p class="item"><strong><?php echo e(__('Name:')); ?></strong> <?php echo e($firstName.' '.$lastName); ?></p>
        <p class="item"><strong><?php echo e(__('Email:')); ?></strong> <?php echo e($email); ?></p>
        <p class="item"><strong><?php echo e(__('Phone:')); ?></strong> <?php echo e($phone); ?></p>
        <?php if($country): ?>
        <p class="item"><strong><?php echo e(__('Country:')); ?></strong> <?php echo e($country); ?></p>
        <?php endif; ?>
        <?php if($state): ?>
            <p class="item"><strong><?php echo e(__('State:')); ?></strong> <?php echo e($state); ?></p>
        <?php endif; ?>
        <?php if($city): ?>
            <p class="item"><strong><?php echo e(__('City:')); ?></strong> <?php echo e($city); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\nexelit\core\resources\views/components/order/user-details.blade.php ENDPATH**/ ?>