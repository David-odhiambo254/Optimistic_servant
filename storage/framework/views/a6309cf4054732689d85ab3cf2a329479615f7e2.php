<table class="DataTable_activation">
    <thead>
    <tr>
        <th><?php echo e(__('ID')); ?></th>
        <th><?php echo e(__('User ID')); ?></th>
        <th><?php echo e(__('Type')); ?></th>
        <th><?php echo e(__('Price')); ?></th>
        <th><?php echo e(__('Limit')); ?></th>
        <th><?php echo e(__('Payment Gateway')); ?></th>
        <th><?php echo e(__('Payment Status')); ?></th>
        <th><?php echo e(__('Status')); ?></th>
        <th><?php echo e(__('Purchase Date')); ?></th>
        <th><?php echo e(__('Expire Date')); ?></th>
        <th><?php echo e(__('Action')); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $all_subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($sub->id); ?></td>
            <td><?php echo e($sub->user_id ?? ''); ?></td>
            <td><?php echo e($sub->subscription?->subscription_type?->type); ?></td>
            <td><?php echo e(float_amount_with_currency_symbol($sub->price)); ?></td>
            <td><?php echo e($sub->limit); ?></td>
            <td>
                <?php if($sub->payment_gateway == 'manual_payment'): ?>
                    <?php echo e(ucfirst(str_replace('_',' ',$sub->payment_gateway))); ?>

                <?php else: ?>
                    <?php echo e($sub->payment_gateway == 'authorize_dot_net' ? __('Authorize.Net') : ucfirst($sub->payment_gateway)); ?>

                <?php endif; ?>
            </td>
            <td>
                <?php if($sub->payment_status == '' || $sub->payment_status == 'cancel'): ?>
                    <span class="btn btn-danger btn-sm"><?php echo e(__('Cancel')); ?></span>
                <?php elseif($sub->payment_status == 'pending'): ?>
                    <span class="btn btn-warning btn-sm"><?php echo e(ucfirst($sub->payment_status)); ?></span>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-subscription-manual-payment-status-change')): ?>
                    <a
                        class="btn btn-sm btn-danger edit_payment_gateway_modal"
                        data-bs-toggle="modal"
                        data-bs-target="#editPaymentGatewayModal"
                        data-subscription_id="<?php echo e($sub->id); ?>"
                        data-user_type="<?php echo e($sub->user?->user_type == 1 ? 'Client' : 'Freelancer'); ?>"
                        data-user_firstname="<?php echo e($sub->user?->first_name); ?>"
                        data-user_email="<?php echo e($sub->user?->email); ?>"
                        data-img_url="<?php echo e($sub->manual_payment_image); ?>">
                        <?php echo e(__('Update')); ?>

                    </a>
                <?php endif; ?>
                <?php else: ?>
                    <span class="btn btn-success btn-sm"><?php echo e(ucfirst($sub->payment_status)); ?></span>
                <?php endif; ?>
            </td>
            <td>
                <?php if($sub->status == 0): ?>
                    <span class="btn btn-danger btn-sm"><?php echo e(__('Inactive')); ?></span>
                <?php else: ?>
                    <span class="btn btn-success btn-sm"><?php echo e(__('Active')); ?></span>
                <?php endif; ?>
            </td>
            <td><?php echo e($sub->created_at->format('Y-m-d') ?? ''); ?></td>
            <td><?php echo e(Carbon\Carbon::parse($sub->expire_date)->format('Y-m-d')); ?></td>
            <td>
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
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-subscription-status-change')): ?>
                    <li class="status_dropdown__item">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.status-change','data' => ['title' => __('Change Status'),'url' => route('admin.user.subscription.status',$sub->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.status-change'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Change Status')),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.user.subscription.status',$sub->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </li>
                    <?php endif; ?>
                </ul>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pagination.laravel-paginate','data' => ['route' => $route,'allData' => $all_subscriptions]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pagination.laravel-paginate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($route),'allData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($all_subscriptions)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\nexelit\core\Modules/Subscription\Resources/views/backend/user-subscription/search-result.blade.php ENDPATH**/ ?>