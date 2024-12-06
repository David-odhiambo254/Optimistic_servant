<table class="DataTable_activation">
    <thead>
    <tr>
        <th><?php echo e(__('ID')); ?></th>
        <th><?php echo e(__('Order ID')); ?></th>
        <th><?php echo e(__('Reported By')); ?></th>
        <th><?php echo e(__('Title')); ?></th>
        <th><?php echo e(__('Status')); ?></th>
        <th><?php echo e(__('Action')); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $all_reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($report->id); ?></td>
            <td>#000<?php echo e($report->order_id); ?></td>
            <td><?php echo e(ucfirst($report->reporter)); ?></td>
            <td><?php echo e($report->title); ?></td>
            <td>
                <?php if($report->status == 0): ?>
                    <span class="btn btn-primary btn-sm"> <?php echo e(__('In Review')); ?></span>
                <?php elseif($report->status == 1): ?>
                    <span class="btn btn-success btn-sm"> <?php echo e(__('Closed')); ?></span>
                <?php else: ?>
                    <span class="btn btn-danger btn-sm"> <?php echo e(__('Rejected')); ?></span>
                <?php endif; ?>
            </td>
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
                    <li class="status_dropdown__item">
                        <a class="btn dropdown-item status_dropdown__list__link edit_gateway_modal update-report"
                           data-bs-toggle="modal"
                           data-bs-target="#edit-request-modal"
                           data-id="<?php echo e($report->id); ?>"
                           data-note="<?php echo e($report->note); ?>"
                           data-title="<?php echo e($report->title); ?>"
                           data-description="<?php echo $report->description; ?>"
                           data-status="<?php echo e($report->status); ?>">
                            <?php echo e(__('Update Status')); ?>

                        </a>
                    </li>
                    <li class="status_dropdown__item">
                        <a href="<?php echo e(route('admin.order.details',$report->order_id)); ?>" class="btn dropdown-item status_dropdown__list__link">
                            <?php echo e(__('View Order')); ?>

                        </a>
                    </li>
                </ul>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pagination.laravel-paginate','data' => ['allData' => $all_reports]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pagination.laravel-paginate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['allData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($all_reports)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\nexelit\core\resources\views/backend/pages/reports/search-result.blade.php ENDPATH**/ ?>