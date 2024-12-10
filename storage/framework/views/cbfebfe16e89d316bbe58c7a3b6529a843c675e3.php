<table>
    <thead>
    <tr>
        <th><?php echo e(__('Amount')); ?></th>
        <th><?php echo e(__('Gateway')); ?></th>
        <th><?php echo e(__('Gateway Info')); ?></th>
        <th><?php echo e(__('Freelancer Info')); ?></th>
        <th><?php echo e(__('Image')); ?></th>
        <th><?php echo e(__('Note')); ?></th>
        <th><?php echo e(__('Status')); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $all_request; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $fields = ''; ?>
        <?php $__currentLoopData = unserialize($request->gateway_fields); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $fields .= ucwords(str_replace('_', ' ', $key)) . ' => ' . $value . "<br/>";
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(float_amount_with_currency_symbol($request->amount)); ?></td>
            <td><?php echo e(ucfirst($request?->gateway_name->name)); ?></td>
            <td><?php echo $fields; ?></td>
            <td>
                <p><?php echo e(__('Name:')); ?> <?php echo e($request?->user->fullname); ?></p>
                <p><?php echo e(__('Email:')); ?> <?php echo e($request?->user->email); ?></p>
                <p><?php echo e(__('Balance:')); ?> <?php echo e(float_amount_with_currency_symbol($request?->user?->user_wallet->balance)); ?></p>
            </td>
            <td>
                <?php if($request->image): ?>
                    <img style="width:200px;" src="<?php echo e(asset('assets/uploads/withdraw-request/'.$request->image)); ?>">
                <?php endif; ?>
            </td>
            <td>
                <p><?php echo e($request->note ?? ''); ?></p>
            </td>
            <td>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.withdraw-request-status','data' => ['status' => $request->status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.withdraw-request-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($request->status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div class="deposit-history-pagination mt-4">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pagination.laravel-paginate','data' => ['allData' => $all_request]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pagination.laravel-paginate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['allData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($all_request)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\nexelit\core\Modules/Wallet\Resources/views/freelancer/withdraw/search-result.blade.php ENDPATH**/ ?>