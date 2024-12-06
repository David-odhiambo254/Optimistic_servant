<?php $__env->startSection('title', __('Add New Page')); ?>

<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.css'); ?>
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
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.summernote.summernote-css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('summernote.summernote-css'); ?>
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
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tags.tag-input-css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tags.tag-input-css'); ?>
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
    <style>
        .img-select {
            position: relative;
        }

        .img-select.selected:after {
            position: absolute;
            left: 0px;
            top: 0;
            z-index: 1;
            color: #fff;
            content: "\f058";
            font-size: 30px;
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            line-height: 30px;
            width: 40px;
            height: 40px;
            background-color: #007bff;
            padding-left: 5px;
            padding-top: 4px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard__body">
        <form action="<?php echo e(route('admin.page.new')); ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-8">
                    <div class="customMarkup__single">
                        <div class="customMarkup__single__item">
                            <h4 class="customMarkup__single__title"><?php echo e(__('Add New Page')); ?></h4>
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
                                <?php echo csrf_field(); ?>
                                <div class="tab-content margin-top-40">
                                    <div class="single-input">
                                        <label for="title" class="label-title mt-3"><?php echo e(__('Title')); ?></label>
                                        <input type="text" class="form-control" name="title" id="title"
                                               placeholder="<?php echo e(__('Title')); ?>" id="title">
                                    </div>
                                    <div class="single-input">
                                        <label for="slug" class="label-title mt-3"><?php echo e(__('Slug')); ?></label>
                                        <input type="text" class="form-control" name="slug" id="slug"
                                               placeholder="<?php echo e(__('Slug')); ?>" id="title">
                                        <span class="full-slug-show"></span>
                                    </div>
                                    <div class="single-input mb-3">
                                        <label for="content" class="label-title mt-3"><?php echo e(__('Content')); ?></label>
                                        <div class="summernote-wrapper">
                                            <textarea id="content" name="page_content" class="form-control summernote"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.page-meta-data-create','data' => ['sidebarHeading' => 'Page Meta']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.page-meta-data-create'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sidebarHeading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Page Meta')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                                <div class="single-input mb-3">
                                    <label for="navbar_variant" class="label-title mt-5"><?php echo e(__('Navbar Variant')); ?></label>
                                    <input type="hidden" class="form-control" id="navbar_variant"
                                           value="<?php echo e(get_static_option('navbar_variant')); ?>" name="navbar_variant">
                                    <div class="row">
                                        <?php for($i = 1; $i < 4; $i++): ?>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="img-select img-select-navbar selected">
                                                    <div class="img-wrap">
                                                        <img src="<?php echo e(asset('assets/frontend/navbar-variant/' . $i . '.jpg')); ?>"
                                                             data-home_id="0<?php echo e($i); ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <div class="single-input mb-3">
                                    <label for="footer_variant" class="label-title mt-5"><?php echo e(__('Footer Variant')); ?></label>
                                    <input type="hidden" class="form-control" id="footer_variant" value="01"
                                           name="footer_variant">
                                    <div class="row">
                                        <?php for($i = 1; $i < 3; $i++): ?>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="img-select img-select-footer selected">
                                                    <div class="img-wrap">
                                                        <img src="<?php echo e(asset('assets/frontend/footer-variant/' . $i . '.png')); ?>"
                                                             data-home_id="0<?php echo e($i); ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="customMarkup__single">
                        <div class="customMarkup__single__item">
                            <div class="customMarkup__single__inner mt-4">
                                <?php echo csrf_field(); ?>
                                <div class="tab-content margin-top-40">
                                    <div class="switch">
                                        <label
                                                class="label-title mt-3"><strong><?php echo e(__('Page Builder Enable/Disable')); ?></strong></label>
                                        <input class="custom-switch" type="checkbox" id="page_builder_status"
                                               name="page_builder_status" <?php if(!empty(get_static_option('page_builder_status'))): ?> checked <?php endif; ?>>
                                        <label class="switch-label"
                                               for="page_builder_status"><?php echo e(__('Page Builder Enable/Disable')); ?></label>
                                    </div>

                                    <div class="single-input col-md-12 mt-3">
                                        <div class="btn-wrapper page-builder-btn-wrapper d-none">
                                            <a href="javascript:void(0)"
                                               class="btn btn-primary"><?php echo e(__('Open Page Builder')); ?></a> <br>
                                            <small
                                                    class="info-text"><?php echo e(__('Page builder option is available in page edit only')); ?></small>
                                        </div>
                                    </div>
                                    <div class="single-input col-md-12 layout d-none">
                                        <label class="label-title mt-3"><?php echo e(__('Page Layout')); ?></label>
                                        <select name="layout" class="form-control">
                                            <option value="normal_layout"><?php echo e(__('Normal Layout')); ?></option>
                                            <option value="home_page_layout"><?php echo e(__('Home Page')); ?></option>
                                        </select>
                                    </div>
                                    <div class="single-input col-md-12 page_class d-none">
                                        <label class="label-title mt-3"><?php echo e(__('Page Class')); ?></label>
                                        <select name="page_class" class="form-control">
                                            <option value=""><?php echo e(__('None')); ?></option>
                                            <option value="nav-absolute"><?php echo e(__('Custom Class')); ?></option>
                                        </select>
                                        <small
                                                class=""><?php echo e(__('Adjust page frontend view selecting by none or custom class')); ?></small>
                                    </div>
                                    <div class="switch">
                                        <label
                                                class="label-title mt-3"><strong><?php echo e(__('Breadcrumb Show/Hide')); ?></strong></label>
                                        <input class="custom-switch" type="checkbox" id="breadcrumb_status"
                                               name="breadcrumb_status" <?php if(!empty(get_static_option('breadcrumb_status'))): ?> checked <?php endif; ?>>
                                        <label class="switch-label"
                                               for="breadcrumb_status"><?php echo e(__('Breadcrumb Show/Hide')); ?></label>
                                    </div>
                                    <div class="single-input">
                                        <label class="label-title mt-3"><?php echo e(__('Visibility')); ?></label>
                                        <select name="visibility" class="form-control">
                                            <option value="all"><?php echo e(__('All')); ?></option>
                                            <option value="user"><?php echo e(__('Only Logged In User')); ?></option>
                                        </select>
                                    </div>

                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.form.active-inactive','data' => ['title' => 'Status','status' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.form.active-inactive'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Status'),'status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page-add')): ?>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.submit','data' => ['class' => 'btn btn-primary mt-4','title' => 'Submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('btn.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-primary mt-4','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Submit')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.markup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.markup'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
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
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.summernote.summernote-js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('summernote.summernote-js'); ?>
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
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tags.tag-input-js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tags.tag-input-js'); ?>
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

                //page builder
                $(document).on('change', 'input[name="page_builder_status"]', function() {
                    if ($(this).is(':checked')) {
                        $('.classic-editor-wrapper').addClass('d-none');
                        $('.page-builder-btn-wrapper').removeClass('d-none');
                        $('.layout').removeClass('d-none');
                        $('.page_class').removeClass('d-none');
                    } else {
                        $('.classic-editor-wrapper').removeClass('d-none');
                        $('.page-builder-btn-wrapper').addClass('d-none');
                        $('.layout').addClass('d-none');
                        $('.page_class').addClass('d-none');
                    }
                });

                //slug
                function makeSlug(slug) {
                    let finalSlug = slug.replace(/[^a-zA-Z0-9]/g, ' ');
                    finalSlug = slug.replace(/  +/g, ' ');
                    finalSlug = slug.replace(/\s/g, '-').toLowerCase().replace(/[^\w-]+/g, '-');
                    return finalSlug;
                }

                $(document).on('keyup', '#title', function(e) {
                    let slug = makeSlug($(this).val());
                    $('#slug').val(slug);

                    let url = `<?php echo e(url('/')); ?>/` + slug;
                    $('.full-slug-show').text(url);
                });

                //For Navbar
                function navbar_variant() {
                    let imgSelect = $('.img-select');
                    let id = $('#navbar_variant').val();
                    imgSelect.removeClass('selected');
                    $('img[data-home_id="' + id + '"]').parent().parent().addClass('selected');
                    $(document).on('click', '.img-select-navbar img', function(e) {
                        e.preventDefault();
                        imgSelect.removeClass('selected');
                        $(this).parent().parent().addClass('selected').siblings();
                        $('#navbar_variant').val($(this).data('home_id'));
                    })
                }
                navbar_variant();

                //For Footer
                function footer_variant() {
                    let imgSelect = $('.img-select');
                    let id = $('#footer_variant').val();
                    imgSelect.removeClass('selected');
                    $('img[data-home_id="' + id + '"]').parent().parent().addClass('selected');
                    $(document).on('click', '.img-select-footer img', function(e) {
                        e.preventDefault();
                        imgSelect.removeClass('selected');
                        $(this).parent().parent().addClass('selected').siblings();
                        $('#footer_variant').val($(this).data('home_id'));
                    })
                }
                footer_variant();

            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nexelit\core\Modules/Pages\Resources/views/add-new-page.blade.php ENDPATH**/ ?>