<?php $__env->startSection('title', __('All Custom Form')); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/jquery-ui.min.css')); ?>">
    <style>
        .available-form-field {
            margin: 0;
            padding: 0;
            list-style: none;

        }
        .available-form-field li {
            position: relative;
            z-index: 0;
            list-style: none;
        }
        .available-form-field li {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
        }
        .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
            border: 1px solid #c5c5c5;
            background: #f6f6f6;
            font-weight: normal;
            color: #454545;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="dashboard__body">
        <div class="row">
            <div class="col-lg-6">
                <div class="customMarkup__single">
                    <div class="customMarkup__single__item">
                        <div class="customMarkup__single__inner mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title"><?php echo e(__("Edit Form")); ?></h4>
                                    <form action="<?php echo e(route('admin.form.update')); ?>" method="Post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($form->id); ?>">
                                        <div class="single-input mt-3">
                                            <label for="text" class="label-title"><?php echo e(__('Title')); ?></label>
                                            <input type="text" class="form-control" name="title" value="<?php echo e($form->title); ?>">
                                        </div>
                                        <div class="single-input mt-3">
                                            <label for="text" class="label-title"><?php echo e(__('Receiving Email')); ?></label>
                                            <input type="email" class="form-control" name="email" value="<?php echo e($form->email); ?>">
                                            <span class="info-text"><?php echo e(__('your will get mail with all info of from to this email')); ?></span>
                                        </div>
                                        <div class="single-input mt-3">
                                            <label for="text" class="label-title"><?php echo e(__('Button Title')); ?></label>
                                            <input type="text" class="form-control" name="button_title" value="<?php echo e($form->button_text); ?>">
                                        </div>
                                        <div class="single-input mt-3">
                                            <label for="success_message" class="label-title"><?php echo e(__('Success Message')); ?></label>
                                            <input type="text" class="form-control" name="success_message" value="<?php echo e($form->success_message); ?>">
                                        </div>
                                        <?php echo plugins\FormBuilder\FormBuilderHelpers::render_drag_drop_form_builder($form->fields); ?>

                                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4 margin-bottom-40"><?php echo e(__('Save Change')); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
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
                <div class="customMarkup__single">
                    <div class="customMarkup__single__item">
                        <div class="customMarkup__single__inner mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title"><?php echo e(__("Available Form Fields")); ?></h4>
                                    <ul id="sortable_02" class="available-form-field mt-4">
                                        <li class="ui-state-default" type="text"><span
                                                class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo e(__('Text')); ?></li>
                                        <li class="ui-state-default" type="email"><span
                                                class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo e(__('Email')); ?></li>
                                        <li class="ui-state-default" type="tel"><span
                                                class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo e(__('Tel')); ?></li>
                                        <li class="ui-state-default" type="url"><span
                                                class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo e(__('URL')); ?></li>
                                        <li class="ui-state-default" type="select"><span
                                                class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo e(__('Select')); ?></li>
                                        <li class="ui-state-default" type="checkbox"><span
                                                class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo e(__('Check Box')); ?></li>
                                        <li class="ui-state-default" type="file"><span
                                                class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo e(__('File')); ?></li>
                                        <li class="ui-state-default" type="textarea"><span
                                                class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo e(__('Textarea')); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/jquery-ui.min.js')); ?>"></script>

    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {
                $("#sortable").sortable({
                    axis: "y",
                    placeholder: "sortable-placeholder",
                    out: function(event,ui){
                        setTimeout(function(){
                            var allShortableList = $("#sortable li");
                            allShortableList.each(function (index,value) {
                                var el = $(this);
                                el.find('.field-required').attr('name','field_required['+index+']');
                                el.find('.mime-type').attr('name','mimes_type['+index+']');
                            });
                        },500);
                    }
                }).disableSelection();
                $("#sortable_02").sortable({
                    connectWith: '#sortable',
                    helper: "clone",
                    remove: function (e, li) {
                        var value = li.item.prop('type');
                        var random = Math.floor(Math.random(9999) * 999999);
                        var formFiledLength = $('#sortable li').length - 1;

                        var markup = render_drag_drop_form_field_markup(value,random,formFiledLength);
                        li.item.clone()
                            .prop('id', value + '_' + random)
                            .text('')
                            .append(markup)
                            .insertAfter(li.item);
                        $(this).sortable('cancel');
                        return li.item.clone();
                    }
                }).disableSelection();

                $('.field-placeholder').on('change paste keyup', function (e) {
                    $(this).parent().parent().parent().prev().find('.placeholder-name').text($(this).val());
                });
                $('body').on('click', '.remove-fields', function (e) {
                    $(this).parent().remove();
                    $( "#sortable" ).sortable( "refreshPositions" );
                });

                function render_drag_drop_form_field_markup(type,random,formFiledLength){
                    var markup = '';
                    markup += '<span class="ui-icon ui-icon-arrowthick-2-n-s"></span>\n <span class="remove-fields">x</span>\n<a data-bs-toggle="collapse" href="#collapseExample-' + random + '" role="button" aria-expanded="false" aria-controls="collapseExample">\n' +
                        type + ': <span class="placeholder-name"></span>\n</a>\n' +
                        '<div class="collapse" id="collapseExample-' + random + '">\n' +
                        '<div class="card card-body margin-top-30">\n' +
                        '<input type="hidden" class="form-control" name="field_type[]" value="' + type + '">' +
                        '<div class="form-group">\n' +
                        '<label>Name</label>\n' +
                        '<input type="text" class="form-control" name="field_name[]" placeholder="enter field name" >\n</div>\n' +
                        '<div class="form-group">\n <label>Placeholder/Label</label>\n' +
                        ' <input type="text" class="form-control field-placeholder"  name="field_placeholder[]" placeholder="enter field name" >\n' +
                        '</div>\n<div class="form-group">\n<label ><strong>Required</strong></label>\n<label class="switch">\n' +
                        '<input type="checkbox" class="field-required" name="field_required['+formFiledLength+']" >\n' +
                        '<span class="slider-yes-no"></span>\n</label>\n</div>';
                    if(type == 'select'){
                        markup += '<div class="form-group">\n' +
                            '<label>Options</label>\n' +
                            '<textarea name="select_options[]"  class="form-control max-height-120" cols="30" rows="10" ></textarea>\n' +
                            '<small>separate option by new line </small>\n' +
                            '</div>\n' ;
                    }
                    if(type == 'file'){
                        markup +=  '<div class="form-group">\n' +
                            '<label>File Type</label>\n' +
                            '<select name="mimes_type['+formFiledLength+']" class="form-control mime-type">\n' +
                            '<option value="mimes:jpg,jpeg,png" >jpg,jpeg,png</option>\n' +
                            '<option value="mimes:txt,pdf">txt,pdf</option>\n' +
                            '<option value="mimes:doc,docx">doc,docx</option>\n' +
                            '<option value="mimes:doc,docx,jpg,jpeg,png,txt,pdf">doc,docx,jpg,jpeg,png,txt,pdf</option>\n' +
                            '</select>\n' +
                            '</div>';
                    }

                    markup += '</div>\n  </div>';

                    return markup;
                }
            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nexelit\core\resources\views/backend/forms/edit-form.blade.php ENDPATH**/ ?>