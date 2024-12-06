<table class="DataTable_activation">
    <thead>
    <tr>
        <th><?php echo e(__('Amount')); ?></th>
        <th><?php echo e(__('Gateway Name')); ?></th>
        <th><?php echo e(__('Gateway Info')); ?></th>
        <th><?php echo e(__('Freelancer Info')); ?></th>
        <th><?php echo e(__('Image')); ?></th>
        <th><?php echo e(__('Note')); ?></th>
        <th><?php echo e(__('Status')); ?></th>
        <th><?php echo e(__('Action')); ?></th>
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
            <td>
                <?php if($request->status == 3): ?>
                    <span class="text-danger"> <?php echo e(__('Cancelled')); ?></span>
                <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.select-action','data' => ['title' => __('Select Action')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.select-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Select Action'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <ul class="dropdown-menu status_dropdown__list">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('withdraw-status-change')): ?>
                        <li class="status_dropdown__item">
                            <a class="btn dropdown-item status_dropdown__list__link edit_gateway_modal update-request"
                               data-bs-toggle="modal"
                               data-bs-target="#edit-request-modal"
                               data-amount="<?php echo e($request->amount); ?>"
                               data-id="<?php echo e($request->id); ?>"
                               data-status="<?php echo e($request->status); ?>">
                                <?php echo e(__('Update Status')); ?>

                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
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
<?php /**PATH C:\xampp\htdocs\nexelit\core\Modules/Wallet\Resources/views/admin/withdraw/search-result.blade.php ENDPATH**/ ?>