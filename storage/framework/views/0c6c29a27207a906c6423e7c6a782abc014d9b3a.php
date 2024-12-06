<?php $__env->startSection('title', __('All Reports')); ?>
<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.data-table.data-table-css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('data-table.data-table-css'); ?>
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
        .w-90 {width: 90%;}

        .w-20 {width: 20%;}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="dashboard__body">
        <div class="row">
            <div class="col-lg-12">
                <div class="customMarkup__single">
                    <div class="customMarkup__single__item">
                        <div class="customMarkup__single__item__flex">
                            <h4 class="customMarkup__single__title"><?php echo e(__('All Reports')); ?></h4>
                        </div>
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
                            <div class="custom_table style-04 search_result">
                                <?php echo $__env->make('backend.pages.reports.search-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <!-- Table End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-request-modal" tabindex="-1" aria-labelledby="edit-gateway-modalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="row">
                  <div class="col-md-6">
                      <div class="modal-header">
                          <h5 class="modal-title"><?php echo e(__('Report Title:')); ?> <span id="report_title"></span></h5>
                      </div>
                      <div class="modal-body">
                          <h5 class="modal-title"><?php echo e(__('Report Description:')); ?></h5>
                          <div id="report_description"></div>
                      </div>

                  </div>
                    <div class="col-md-6">
                        <form class="" method="POST" action="<?php echo e(route('admin.user.report.update')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="" name="report_id" />
                            <input type="hidden" value="" name="report_status" />
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__("Update Report Status")); ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo csrf_field(); ?>
                                <div class="single-input mb-3">
                                    <label class="label-title"> <?php echo e(__('Select Status')); ?></label>
                                    <select name="status" id="status" class="form-control">
                                        <option value=""><?php echo e(__('Select')); ?></option>
                                        <option value="0"><?php echo e(__('In Review')); ?></option>
                                        <option value="1"><?php echo e(__('Closed')); ?></option>
                                        <option value="2"><?php echo e(__('Rejected')); ?></option>
                                    </select>
                                </div>
                                <div class="single-input mb-3">
                                    <label class="label-title"> <?php echo e(__('Note')); ?></label>
                                    <textarea class="form-control" name="note" id="note" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__("Close")); ?></button>
                                <button type="submit" class="btn-profile btn-bg-1 update_report_status"><?php echo e(__("Update")); ?></button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sweet-alert.sweet-alert2-js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sweet-alert.sweet-alert2-js'); ?>
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
       $(document).on('click','.update-report',function(){
           let report_id = $(this).data('id');
           let report_status = $(this).data('status');
           let note = $(this).data('note');
           let report_title = $(this).data('title');

           let report_description = $(this).data('description');
           let textOnly = $('<div>').html(report_description).text();

           $("input[name='report_id']").val(report_id);
           $('#status').val(report_status);
           $('#note').val(note);
           $('#report_title').text(report_title);
           $('#report_description').text(textOnly);
       })

       $(document).on('click','.update_report_status',function(){
           let status = $('#status').val();
           let note = $('#note').val();

           if(status == '' || note == ''){
               toastr_warning_js("<?php echo e(__('Please fill both fields')); ?>")
               return false;
           }
       })

       //pagination
       $(document).on('click', '.pagination a', function(e){
           e.preventDefault();
           let page = $(this).attr('href').split('page=')[1];
           histories(page);
       });
       function histories(page){
           $.ajax({
               url:"<?php echo e(route('admin.user.report.paginate.data').'?page='); ?>" + page,
               success:function(res){
                   $('.search_result').html(res);
               }
           });
       }

       // toastr warning
       function toastr_warning_js(msg){
           Command: toastr["warning"](msg, "Warning !")
           toastr.options = {
               "closeButton": true,
               "debug": false,
               "newestOnTop": false,
               "progressBar": true,
               "positionClass": "toast-top-right",
               "preventDuplicates": false,
               "onclick": null,
               "showDuration": "300",
               "hideDuration": "1000",
               "timeOut": "5000",
               "extendedTimeOut": "1000",
               "showEasing": "swing",
               "hideEasing": "linear",
               "showMethod": "fadeIn",
               "hideMethod": "fadeOut"
           }
       }
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nexelit\core\resources\views/backend/pages/reports/all-reports.blade.php ENDPATH**/ ?>