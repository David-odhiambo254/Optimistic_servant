<?php $__env->startSection('site_title',__('Proposal Details')); ?>
<?php $__env->startSection('style'); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select2.select2-css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select2.select2-css'); ?>
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
        .cover_letter_details{white-space:pre-line}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb.user-profile-breadcrumb','data' => ['title' => __('Proposal Details'),'innerTitle' => __('Proposal Details')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb.user-profile-breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Proposal Details')),'innerTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Proposal Details'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <div class="profile-area pat-100 pab-100 section-bg-2">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-12">
                        <div class="profile-wrapper">
                            <div class="myJob-wrapper">
                                <div class="myJob-wrapper-single">
                                    <div class="myJob-wrapper-single-flex flex-between align-items-center">
                                        <div class="myJob-wrapper-single-contents">
                                            <div class="jobFilter-proposal-author-flex">
                                                <div class="jobFilter-proposal-author-thumb position-relative">
                                                    <?php if($proposal_details->freelancer?->image): ?>
                                                        <a href="<?php echo e(route('freelancer.profile.details', $proposal_details?->freelancer->username)); ?>">
                                                            <img src="<?php echo e(asset('assets/uploads/profile/'.$proposal_details?->freelancer?->image)); ?>" alt="<?php echo e($proposal_details?->freelancer?->fullname); ?>">
                                                        </a>
                                                    <?php else: ?>
                                                        <a href="<?php echo e(route('freelancer.profile.details', $proposal_details?->freelancer->username)); ?>">
                                                        <img src="<?php echo e(asset('assets/static/img/author/author.jpg')); ?>" alt="<?php echo e(__('AuthorImg')); ?>">
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="jobFilter-proposal-author-contents">
                                                    <h4 class="jobFilter-proposal-author-contents-title">
                                                        <a href="<?php echo e(route('freelancer.profile.details', $proposal_details?->freelancer->username)); ?>">
                                                        <?php echo e($proposal_details->freelancer?->fullname ?? ''); ?>

                                                        </a>
                                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.user-active-inactive-check','data' => ['userID' => $proposal_details->freelancer->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.user-active-inactive-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['userID' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($proposal_details->freelancer->id)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                    </h4>
                                                    <p class="jobFilter-proposal-author-contents-subtitle mt-1"> <?php echo e($proposal_details->freelancer?->user_introduction?->title ?? ''); ?> · <span><?php echo e($proposal_details->freelancer?->user_state?->state ?? ''); ?>, <?php echo e($proposal_details->freelancer?->user_country?->country ?? ''); ?></span> </p>
                                                    <div class="jobFilter-proposal-author-contents-review mt-2">
                                                        <?php echo freelancer_rating($proposal_details->freelancer_id); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="myJob-wrapper-single-arrow">
                                            <div class="job-proposal-btn">
                                                <div class="job-proposal-btn-item">
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.job.job-proposal-view','data' => ['isView' => $proposal_details->is_view]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('job.job-proposal-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isView' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($proposal_details->is_view)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                </div>
                                                <div class="job-proposal-btn-item">
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.job.hire-short-list-check','data' => ['isHired' => $proposal_details->is_hired,'isShortListed' => $proposal_details->is_short_listed]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('job.hire-short-list-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isHired' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($proposal_details->is_hired),'isShortListed' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($proposal_details->is_short_listed)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                </div>
                                                <div class="job-proposal-btn-item">
                                                    <p class="jobFilter-proposal-author-contents-time"><?php echo e($proposal_details->created_at->diffForHumans()); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jobFilter-proposal-offered profile-border-top">
                                        <div class="jobFilter-proposal-offered-single">
                                            <span class="offered"><?php echo e(__('Offered')); ?> <span class="offered-price"><?php echo e(float_amount_with_currency_symbol($proposal_details->amount)); ?></span> </span>
                                        </div>
                                        <div class="jobFilter-proposal-offered-single">
                                            <span class="offered"><?php echo e(__('Est. delivery duration')); ?> <span class="offered-days"><?php echo e($proposal_details->duration); ?></span> </span>
                                        </div>
                                    </div>

                                    <div class="flex-between profile-border-top">
                                        <div class="btn-wrapper flex-btn gap-2 add_remove_interview_location_<?php echo e($proposal_details->id); ?>">

                                            <a href="javascript:void(0)" class="loadingRound add_remove_shortlist" data-proposal-id="<?php echo e($proposal_details->id); ?>">
                                                <?php if($proposal_details->is_short_listed == 0): ?>
                                                    <span class="btn-profile btn-outline-gray add_to_short_listed"><?php echo e(__('Add to Shortlist')); ?></span>
                                                <?php else: ?>
                                                    <span class="btn-profile btn-outline-gray remove_from_short_listed"><?php echo e(__('Remove from Shortlist')); ?></span>
                                                <?php endif; ?>
                                            </a>

                                            <div class="btn-wrapper rejected_interview_location_<?php echo e($proposal_details->id); ?>">
                                                <?php if($proposal_details->is_rejected == 1): ?>
                                                    <a href="javascript:void(0)" class="btn-profile btn-outline-gray"><?php echo e(__('Rejected')); ?></a>
                                                <?php else: ?>
                                                    <a href="javascript:void(0)"
                                                       class="btn-profile btn-bg-1 click-interview take_freelancer_interview"
                                                       data-job-id="<?php echo e($proposal_details->job?->id); ?>"
                                                       data-proposal-id="<?php echo e($proposal_details->id); ?>"
                                                       data-freelancer-id="<?php echo e($proposal_details->freelancer_id); ?>"
                                                       data-job-title="<?php echo e($proposal_details->job?->title); ?>"
                                                       data-job-level="<?php echo e($proposal_details->job?->level); ?>"
                                                       data-job-type="<?php echo e($proposal_details->job?->type); ?>"
                                                       data-job-create-date="<?php echo e($proposal_details->job?->created_at); ?>"
                                                    >
                                                        <?php if($proposal_details->is_interview_take == 1): ?> <?php echo e(__('Interviewed')); ?> <?php else: ?> <?php echo e(__('Take Interview')); ?> <?php endif; ?>
                                                    </a>
                                                    <?php if($proposal_details->is_hired == 0): ?>
                                                        <a href="javascript:void(0)" class="btn-profile btn-outline-gray reject_proposal" data-proposal-id="<?php echo e($proposal_details->id); ?>"><?php echo e(__('Reject')); ?></a>
                                                        <a href="javascript:void(0)"
                                                           class="btn-profile btn-outline-gray accept_proposal"
                                                           data-job-id-for-order="<?php echo e($proposal_details->job_id); ?>"
                                                           data-proposal-id-for-order="<?php echo e($proposal_details->id); ?>"
                                                           data-bs-toggle="modal"
                                                           data-bs-target="#paymentGatewayModal"><?php echo e(__('Accept')); ?></a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="myJob-wrapper-single">
                                    <div class="myJob-wrapper-single-header profile-border-bottom">
                                        <h2 class="myJob-wrapper-single-title"><?php echo e(__('Cover Letter')); ?></h2>
                                    </div>
                                    <div class="myJob-wrapper-single-contents">
                                        <div class="myJob-wrapper-single-contents-item">
                                            <p class="myJob-wrapper-single-contents-para cover_letter_details"><?php echo e($proposal_details->cover_letter ?? ''); ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <?php if($proposal_details->attachment): ?>
                                    <div class="myJob-wrapper-single">
                                        <div class="myJob-wrapper-single-header profile-border-bottom">
                                            <h2 class="myJob-wrapper-single-title"><?php echo e(__('Attachments')); ?></h2>
                                        </div>
                                        <div class="myJob-wrapper-single-contents">
                                            <a href="<?php echo e(asset('assets/uploads/jobs/proposal/'.$proposal_details->attachment)); ?>" download class="single-refundRequest-item-uploads"><i class="fa-solid fa-cloud-arrow-up"></i> <?php echo e($proposal_details->attachment ?? ''); ?></a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Send Offer Modal area starts -->
        <div class="popup-overlay"></div>
        <div class="popup-fixed interview-popup">
            <div class="popup-contents">
                <span class="popup-contents-close popup-close"> <i class="fas fa-times"></i> </span>
                <h2 class="popup-contents-title"><?php echo e(__('Take Interview')); ?></h2>
                <div class="popup-contents-interview profile-border-top">
                    <div class="myJob-wrapper-single-contents">
                        <span class="myJob-wrapper-single-id">#000<?php echo e($proposal_details->job?->id); ?> </span>
                        <h4 class="myJob-wrapper-single-title mt-3"><a href="javascript:void(0)"><?php echo e($proposal_details->job?->title); ?></a></h4>
                        <div class="myJob-wrapper-single-list mt-3">
                            <span class="myJob-wrapper-single-list-para"><?php echo e($proposal_details->job?->created_at->diffForHumans()); ?> - <a href="javascript:void(0)"><?php echo e(ucfirst($proposal_details->job?->level)); ?> </a></span>
                        </div>
                    </div>
                </div>
                <div class="popup-contents-btn flex-between profile-border-top">
                    <div class="popup-contents-interview-form custom-form w-100">
                        <form action="<?php echo e(route('client.message.send')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="freelancer_id" id="freelancer_id">
                            <input type="hidden" name="from_user" id="from_user" value="<?php echo e($proposal_details?->job?->user_id); ?>">
                            <input type="hidden" name="job_id" id="job_id" value="<?php echo e($proposal_details?->job?->id); ?>">
                            <input type="hidden" name="type" id="type" value="job">
                            <input type="hidden" name="proposal_id" id="proposal_id_for_check_interview" value="job">
                            <div class="form-group mb-4 mt-0">
                                <label for="messages" class="label-title"><?php echo e(__('Write a Message')); ?></label>
                                <textarea name="interview_message" id="interview_message" cols="30" rows="2" class="form-message form-control" placeholder="<?php echo e(__('E.g.I would you like to invite yo...')); ?>"></textarea>
                            </div>
                            <div class="btn-wrapper flex-btn gap-2 mt-3">
                                <div class="btn-wrapper">
                                    <a href="javascript:void(0)" class="btn-profile btn-outline-gray btn-hover-danger popup-close"> <?php echo e(__('Cancel')); ?> </a>
                                </div>
                                <button type="submit" class="btn-profile btn-bg-1"><i class="fa-regular fa-comments"></i> <?php echo e(__('Send Message')); ?></button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Send Offer Modal area ends -->

        <?php echo $__env->make('frontend.user.client.job.modal.payment-gateway-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.payment-gateway.gateway-select-js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.payment-gateway.gateway-select-js'); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select2.select2-js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select2.select2-js'); ?>
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
    <?php echo $__env->make('frontend.user.client.job.job-details.proposal-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nexelit\core\resources\views/frontend/user/client/job/job-details/proposal-details.blade.php ENDPATH**/ ?>