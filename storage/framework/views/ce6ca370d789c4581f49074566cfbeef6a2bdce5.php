<?php $__env->startSection('title', __('GDPR Settings')); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .all-field-wrap {
            position: relative;
            background-color: #f2f2f2;
            padding: 30px;
            padding-right: 70px;
            margin-bottom: 30px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard__body">
        <div class="row">
            <div class="col-lg-12">
                <div class="customMarkup__single">
                    <div class="customMarkup__single__item">
                        <h4 class="customMarkup__single__title"><?php echo e(__('GDPR Compliant Cookie Settings')); ?></h4>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.validation.error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <div class="customMarkup__single__inner mt-4">
                            <form action="<?php echo e(route('admin.general.settings.gdpr')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="single-input mb-3">
                                    <label for="site_gdpr_cookie_title" class="label-title"><?php echo e(__('GDPR Title')); ?></label>
                                    <input type="text" name="site_gdpr_cookie_title"  class="form-control" value="<?php echo e(get_static_option('site_gdpr_cookie_title')); ?>" id="site_gdpr_cookie_title">
                                </div>
                                <div class="single-input mb-3">
                                    <label for="site_gdpr_cookie_message" class="label-title"><?php echo e(__('GDPR Message')); ?></label>
                                    <textarea name="site_gdpr_cookie_message"  class="form-control" rows="5" id="site_gdpr_cookie_message"><?php echo e(get_static_option('site_gdpr_cookie_message')); ?></textarea>
                                </div>
                                <div class="single-input mb-3">
                                    <label for="site_gdpr_cookie_more_info_label" class="label-title"><?php echo e(__('GDPR More Info Link Label')); ?></label>
                                    <input type="text" name="site_gdpr_cookie_more_info_label"  class="form-control" value="<?php echo e(get_static_option('site_gdpr_cookie_more_info_label')); ?>" id="site_gdpr_cookie_more_info_label">
                                </div>
                                <div class="single-input mb-3">
                                    <label for="site_gdpr_cookie_more_info_link" class="label-title"><?php echo e(__('GDPR More Info Link')); ?></label>
                                    <input type="text" name="site_gdpr_cookie_more_info_link"  class="form-control" value="<?php echo e(get_static_option('site_gdpr_cookie_more_info_link')); ?>" id="site_gdpr_cookie_more_info_link">
                                    <small class="form-text text-muted"><?php echo e(__('enter more info link user {url} to point the site address, example: {url}/about , it will be converted to www.yoursite.com/about')); ?></small>
                                </div>
                                <div class="single-input mb-3">
                                    <label for="site_gdpr_cookie_accept_button_label" class="label-title"><?php echo e(__('GDPR Cookie Accept Button Label')); ?></label>
                                    <input type="text" name="site_gdpr_cookie_accept_button_label"  class="form-control" value="<?php echo e(get_static_option('site_gdpr_cookie_accept_button_label')); ?>" id="site_gdpr_cookie_accept_button_label">
                                </div>
                                <div class="single-input mb-3">
                                    <label for="site_gdpr_cookie_decline_button_label" class="label-title"><?php echo e(__('GDPR Cookie Decline Button Label')); ?></label>
                                    <input type="text" name="site_gdpr_cookie_decline_button_label"  class="form-control" value="<?php echo e(get_static_option('site_gdpr_cookie_decline_button_label')); ?>" id="site_gdpr_cookie_decline_button_label">
                                </div>
                                <div class="single-input mb-3">
                                    <label for="site_gdpr_cookie_manage_button_label" class="label-title"><?php echo e(__('GDPR Cookie Manage Button Label')); ?></label>
                                    <input type="text" name="site_gdpr_cookie_manage_button_label"  class="form-control" value="<?php echo e(get_static_option('site_gdpr_cookie_manage_button_label')); ?>" >
                                </div>
                                <div class="single-input mb-3">
                                    <label for="site_gdpr_cookie_manage_title" class="label-title"><?php echo e(__('GDPR Cookie Manage Title')); ?></label>
                                    <input type="text" name="site_gdpr_cookie_manage_title"  class="form-control" value="<?php echo e(get_static_option('site_gdpr_cookie_manage_title')); ?>" >
                                </div>

                                <div class="single-input mb-3">
                                    <div class="switch">
                                        <label for="site_gdpr_cookie_enabled" class="label-title"><strong><?php echo e(__('GDPR Cookie Enable/Disable')); ?></strong></label>
                                        <input class="custom-switch" type="checkbox" id="site_gdpr_cookie_enabled" name="site_gdpr_cookie_enabled" <?php if(!empty(get_static_option('site_gdpr_cookie_enabled'))): ?> checked <?php endif; ?>>
                                        <label class="switch-label" for="site_gdpr_cookie_enabled"><?php echo e(__('GDPR Cookie Enable/Disable')); ?></label>
                                    </div>
                                </div>
                                <div class="single-input mb-3">
                                    <label for="site_gdpr_cookie_expire" class="label-title"><?php echo e(__('Cookie Expire')); ?></label>
                                    <input type="text" name="site_gdpr_cookie_expire"  class="form-control" value="<?php echo e(get_static_option('site_gdpr_cookie_expire')); ?>" id="site_gdpr_cookie_expire">
                                    <small class="form-text text-muted"><?php echo e(__('set cookie expire time, eg: 30, means 30days')); ?></small>
                                </div>
                                <div class="single-input mb-3">
                                    <label for="site_gdpr_cookie_delay" class="label-title"><?php echo e(__('Show Delay')); ?></label>
                                    <input type="text" name="site_gdpr_cookie_delay"  class="form-control" value="<?php echo e(get_static_option('site_gdpr_cookie_delay')); ?>" id="site_gdpr_cookie_delay">
                                    <small class="form-text text-muted"><?php echo e(__('set GDPR cookie delay time, it mean the notification will show after this time. number count as mili seconds. eg: 5000, means 5seconds')); ?></small>
                                </div>
                                <?php
                                    $all_title_fields = get_static_option('site_gdpr_cookie_manage_item_title');
                                    $all_title_fields = !empty($all_title_fields) ? unserialize($all_title_fields,['class' => false]) : [''];
                                    //
                                    $all_description_fields = get_static_option('site_gdpr_cookie_manage_item_description');
                                    $all_description_fields = !empty($all_description_fields) ? unserialize($all_description_fields,['class' => false]) : [''];
                                ?>
                                <?php $__currentLoopData = $all_title_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="iconbox-repeater-wrapper">
                                        <div class="all-field-wrap">
                                            <div class="single-input mb-3">
                                                <label for="site_gdpr_cookie_manage_item_title" class="label-title"><?php echo e(__('Title')); ?></label>
                                                <input type="text" name="site_gdpr_cookie_manage_item_title[]" class="form-control" value="<?php echo e($all_title_fields[$index] ?? ''); ?>">
                                            </div>
                                            <div class="single-input mb-3">
                                                <label for="site_gdpr_cookie_manage_item_description" class="label-title"><?php echo e(__('Description')); ?></label>
                                                <textarea name="site_gdpr_cookie_manage_item_description[]" class="form-control max-height-120" cols="30" rows="5"><?php echo e($all_description_fields[$index] ?? ''); ?></textarea>
                                            </div>
                                            <div class="action-wrap">
                                                <span class="add"><i class="fas fa-plus"></i></span>
                                                <span class="remove"><i class="fas fa-trash"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <button type="submit" id="update" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Changes')); ?></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        (function($) {
            "use strict";
            $(document).ready(function (){
                $(document).on('click','.all-field-wrap .action-wrap .add',function (e){
                    e.preventDefault();
                    var el = $(this);
                    var parent = el.parent().parent();
                    var container = $('.all-field-wrap');
                    var clonedData = parent.clone();
                    var containerLength = container.length;
                    clonedData.find('#myTab').attr('id','mytab_'+containerLength);
                    clonedData.find('#myTabContent').attr('id','myTabContent_'+containerLength);
                    var allTab =  clonedData.find('.tab-pane');
                    allTab.each(function (index,value){
                        var el = $(this);
                        var oldId = el.attr('id');
                        el.attr('id',oldId+containerLength);
                    });
                    var allTabNav =  clonedData.find('.nav-link');
                    allTabNav.each(function (index,value){
                        var el = $(this);
                        var oldId = el.attr('href');
                        el.attr('href',oldId+containerLength);
                    });

                    parent.parent().append(clonedData);

                    if (containerLength > 0){
                        parent.parent().find('.remove').show(300);
                    }
                    parent.parent().find('.iconpicker-popover').remove();
                    parent.parent().find('.icp-dd').iconpicker();

                });

                $(document).on('click','.all-field-wrap .action-wrap .remove',function (e){
                    e.preventDefault();
                    var el = $(this);
                    var parent = el.parent().parent();
                    var container = $('.all-field-wrap');

                    if (container.length > 1){
                        el.show(300);
                        parent.hide(300);
                        parent.remove();
                    }else{
                        el.hide(300);
                    }
                });
                $('.icp-dd').iconpicker();
                $('body').on('iconpickerSelected','.icp-dd', function (e) {
                    var selectedIcon = e.iconpickerValue;
                    $(this).parent().parent().children('input').val(selectedIcon);
                    $('body .dropdown-menu.iconpicker-container').removeClass('show');
                });
            });
        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nexelit\core\Modules/GeneralSettings\Resources/views/gdpr-settings.blade.php ENDPATH**/ ?>