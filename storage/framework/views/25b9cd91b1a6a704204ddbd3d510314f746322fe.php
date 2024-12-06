<?php $__env->startSection('title', __('Color Settings')); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/colorpicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/dropzone.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/media-uploader.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard__body">
        <div class="row">
            <div class="col-lg-12">
                <div class="customMarkup__single">
                    <div class="customMarkup__single__item">
                        <h4 class="customMarkup__single__title"><?php echo e(__('Color Settings')); ?></h4>
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
                            <form action="<?php echo e(route('admin.general.settings.color')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="single-input">
                                    <label for="main_color_one" class="label-title mb-3"><?php echo e(__('Site Main Color')); ?></label>
                                    <input type="text" name="main_color_one" style="background-color: <?php echo e(get_static_option('main_color_one')); ?>;" class="form-control"
                                           value="<?php echo e(get_static_option('main_color_one') ?? ''); ?>" id="main_color_one">
                                    <small class="form-text text-muted"><?php echo e(__('you can change -site main color- from here, it will replace the website main color')); ?></small>
                                </div>

                                <div class="single-input">
                                    <label for="main_color_two" class="label-title mb-3"><?php echo e(__('Site Main Color Two')); ?></label>
                                    <input type="text" name="main_color_two" style="background-color: <?php echo e(get_static_option('main_color_two')); ?>;" class="form-control"
                                           value="<?php echo e(get_static_option('main_color_two') ?? ''); ?>" id="main_color_two">
                                    <small class="form-text text-muted"><?php echo e(__('you can change -site main color- from here, it will replace the website main color')); ?></small>
                                </div>

                                <div class="single-input">
                                    <label for="secondary_color" class="label-title mb-3"><?php echo e(__('Site Secondary Color')); ?></label>
                                    <input type="text" name="secondary_color" style="background-color: <?php echo e(get_static_option('secondary_color')); ?>;" class="form-control"
                                           value="<?php echo e(get_static_option('secondary_color')); ?>" id="secondary_color">
                                    <small class="form-text text-muted"><?php echo e(__('you can change -site base color- from here, it will replace the website base color')); ?></small>
                                </div>

                                <div class="single-input">
                                    <label for="heading_color" class="label-title mb-3"><?php echo e(__('Heading Color')); ?></label>
                                    <input type="text" name="heading_color" style="background-color: <?php echo e(get_static_option('heading_color')); ?>;" class="form-control"
                                           value="<?php echo e(get_static_option('heading_color')); ?>" id="heading_color">
                                    <small class="form-text text-muted"><?php echo e(__('you can change -heading color- from here, it will replace the website base color')); ?></small>
                                </div>

                                <div class="single-input">
                                    <label for="paragraph_color" class="label-title mb-3"><?php echo e(__('Paragraph Color')); ?></label>
                                    <input type="text" name="paragraph_color" style="background-color: <?php echo e(get_static_option('paragraph_color')); ?>;" class="form-control"
                                           value="<?php echo e(get_static_option('paragraph_color')); ?>" id="paragraph_color">
                                    <small class="form-text text-muted"><?php echo e(__('you can change -heading color- from here, it will replace the website base color')); ?></small>
                                </div>

                                <div class="single-input">
                                    <label for="body_color" class="label-title mb-3"><?php echo e(__('Body Color')); ?></label>
                                    <input type="text" name="body_color" style="background-color: <?php echo e(get_static_option('body_color')); ?>;" class="form-control"
                                           value="<?php echo e(get_static_option('body_color')); ?>" id="body_color">
                                    <small class="form-text text-muted"><?php echo e(__('you can change -heading color- from here, it will replace the website base color')); ?></small>
                                </div>

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
    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(asset('assets/backend/js/colorpicker.js')); ?>"></script>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.js'); ?>
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
        <script>
            (function($) {
                "use strict";
                $(document).ready(function() {

                    initColorPicker('#main_color_one');
                    initColorPicker('#secondary_color');
                    initColorPicker('#main_color_two');
                    initColorPicker('#heading_color');
                    initColorPicker('#paragraph_color');

                    function initColorPicker(selector) {
                        $(selector).ColorPicker({
                            color: '#852aff',
                            onShow: function(colpkr) {
                                $(colpkr).fadeIn(500);
                                return false;
                            },
                            onHide: function(colpkr) {
                                $(colpkr).fadeOut(500);
                                return false;
                            },
                            onChange: function(hsb, hex, rgb) {
                                $(selector).css('background-color', '#' + hex);
                                $(selector).val('#' + hex);
                            }
                        });
                    }
                });
            }(jQuery));
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nexelit\core\Modules/GeneralSettings\Resources/views/color-settings.blade.php ENDPATH**/ ?>