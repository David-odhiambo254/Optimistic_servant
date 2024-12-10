<?php $__env->startSection('site_title',__('Identity Verification')); ?>
<?php $__env->startSection('style'); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <main>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb.user-profile-breadcrumb','data' => ['title' => __('Identity Verification'),'innerTitle' => __('Identity Verification')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb.user-profile-breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Identity Verification')),'innerTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Identity Verification'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <!-- Profile Settings area Starts -->
            <div class="responsive-overlay"></div>
            <div class="profile-settings-area pat-100 pab-100 section-bg-2">
                <div class="container">
                    <div class="row g-4">
                        <?php echo $__env->make('frontend.user.layout.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="col-xl-9 col-lg-8">
                        <?php if(Auth::guard('web')->user()->user_verified_status == 1 && Auth::guard('web')->user()->user_type == 1): ?>
                            <div class="single-profile-settings">
                                <div class="identity-verification verify">
                                    <div class="identity-verification-flex">
                                        <div class="identity-verification-contents">
                                            <div class="identity-verification-contents-flex">
                                                <div class="identity-verification-contents-icon">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="identity-verification-contents-details">
                                                    <h5 class="identity-verification-contents-details-title"><?php echo e(__('Your identity is verified')); ?></h5>
                                                    <p class="identity-verification-contents-details-para mt-2"><?php echo e(__('Your identity has been verified by our team.')); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="profile-settings-wrapper" id="display_client_identity_verification">
                                <div class="single-profile-settings">
                                    <form id="submit_client_verify_info" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="identity-verifying">
                                            <?php if(isset($user_identity) && $user_identity->status == 2): ?>
                                                <h4 class="identity-verifying-title mb-3">
                                                    <?php echo e(__('Identity Verification')); ?>

                                                    <small class="btn btn-sm btn-danger"><?php echo e(__('Failed')); ?></small>
                                                </h4>
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notice.general-notice','data' => ['description' => __('Please resubmit your identity details with proper information so that we can verify it\'s you.')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notice.general-notice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Please resubmit your identity details with proper information so that we can verify it\'s you.'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            <?php else: ?>
                                                <?php if(isset($user_identity)): ?>
                                                    <h4 class="identity-verifying-title mb-3">
                                                        <?php echo e(__('Identity Verification')); ?>

                                                        <small class="btn btn-sm btn-danger"><?php echo e(__('Pending')); ?></small>
                                                    </h4>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notice.general-notice','data' => ['description' => __('Please wait. we will notify by email whether you verified or not. Multiple request may delay your verification.')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notice.general-notice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Please wait. we will notify by email whether you verified or not. Multiple request may delay your verification.'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <h4 class="identity-verifying-title mb-3"><?php echo e(__('Identity Verification')); ?></h4>
                                            <p class="identity-verifying-para mt-2"><?php echo e(__('Please choose to submit any of the government-issued documents listed below. User general infos are common for any documents submitted.')); ?></p>
                                            <div class="error_msg_container my-1"></div>
                                            <div class="identity-verifying-form custom-form profile-border-top">
                                                <div class="identity-verifying-flex">
                                                    <div class="identity-verifying-list custom-radio active">
                                                        <div class="identity-verifying-list-flex">
                                                            <div class="identity-verifying-list-contents">
                                                                <div class="identity-verifying-list-contents-flex">
                                                                    <div class="identity-verifying-list-contents-icon">
                                                                        <i class="fa-solid fa-id-card"></i>
                                                                    </div>
                                                                    <div class="identity-verifying-list-contents-details">
                                                                        <h5 class="identity-verifying-list-contents-details-title"><?php echo e(__('National ID Card')); ?></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="radio" class="verify-radio" name="verify" checked="">
                                                        </div>
                                                    </div>
                                                    <div class="identity-verifying-list custom-radio">
                                                        <div class="identity-verifying-list-flex">
                                                            <div class="identity-verifying-list-contents">
                                                                <div class="identity-verifying-list-contents-flex">
                                                                    <div class="identity-verifying-list-contents-icon">
                                                                        <i class="fa-solid fa-id-card"></i>
                                                                    </div>
                                                                    <div class="identity-verifying-list-contents-details">
                                                                        <h5 class="identity-verifying-list-contents-details-title"><?php echo e(__('Driving License')); ?></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="radio" class="verify-radio" name="verify">
                                                        </div>
                                                    </div>
                                                    <div class="identity-verifying-list custom-radio">
                                                        <div class="identity-verifying-list-flex">
                                                            <div class="identity-verifying-list-contents">
                                                                <div class="identity-verifying-list-contents-flex">
                                                                    <div class="identity-verifying-list-contents-icon">
                                                                        <i class="fa-solid fa-passport"></i>
                                                                    </div>
                                                                    <div class="identity-verifying-list-contents-details">
                                                                        <h5 class="identity-verifying-list-contents-details-title"><?php echo e(__('Passport')); ?></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="radio" class="verify-radio" name="verify">
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="verify_by" id="verify_by" value="National ID Card">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.country-dropdown','data' => ['title' => __('ID issuing country'),'name' => 'country','id' => 'country']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.country-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('ID issuing country')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('country'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('country')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                <div class="single-flex-input">
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.state-dropdown','data' => ['title' => __('State'),'name' => 'state','id' => 'state']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.state-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('State')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('state'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('state')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.city-dropdown','data' => ['title' => __('City (optional)'),'name' => 'city','id' => 'city']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.city-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('City (optional)')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('city'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('city')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                </div>
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text','data' => ['title' => __('Address'),'type' => 'text','name' => 'address','id' => 'address','value' => $user_identity->address ?? old('address'),'placeholder' => __('Enter address'),'class' => 'form--control']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Address')),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('text'),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('address'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('address'),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user_identity->address ?? old('address')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Enter address')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('form--control')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text','data' => ['title' => __('Zip Code'),'type' => 'text','name' => 'zipcode','id' => 'zipcode','value' => $user_identity->zipcode ?? old('zipcode'),'placeholder' => __('Enter zip code'),'class' => 'form--control']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Zip Code')),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('text'),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('zipcode'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('zipcode'),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user_identity->zipcode ?? old('zipcode')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Enter zip code')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('form--control')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text','data' => ['title' => __('National ID number'),'type' => 'text','name' => 'national_id_number','id' => 'national_id_number','value' => $user_identity->national_id_number ?? old('national_id_number'),'placeholder' => __('Enter id number'),'class' => 'form--control']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('National ID number')),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('text'),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('national_id_number'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('national_id_number'),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user_identity->national_id_number ?? old('national_id_number')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Enter id number')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('form--control')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                                <div class="identity-verifying-upload d-grid gap-4 mt-4">

                                                    <div class="photo-uploaded photo-uploaded-padding center-text">
                                                        <?php if(!empty($user_identity)): ?>
                                                            <img class="front_image" src="<?php echo e(asset('assets/uploads/verification/'.$user_identity->front_image)); ?>">
                                                        <?php endif; ?>
                                                        <img src="" class="front_image_preview">
                                                        <div class="mt-4">
                                                            <span class="photo-uploaded-icon"> <i class="fa-solid fa-upload"></i> </span>
                                                            <p class="photo-uploaded-para mt-3"> <?php echo e(__('Upload Front side of your ID')); ?>

                                                                <br> <small><?php echo e(__('Recommended Dimensions 500x300 px')); ?></small> </p>
                                                            <input type="file" name="front_image" id="front_image" class="photo-uploaded-file front_image_upload">
                                                        </div>
                                                    </div>
                                                    <div class="photo-uploaded photo-uploaded-padding center-text">
                                                        <?php if(!empty($user_identity)): ?>
                                                            <img class="front_image" src="<?php echo e(asset('assets/uploads/verification/'.$user_identity->back_image)); ?>">
                                                        <?php endif; ?>
                                                        <img src="" class="back_image_preview">
                                                        <div class="mt-4">
                                                            <span class="photo-uploaded-icon"> <i class="fa-solid fa-upload"></i> </span>
                                                            <p class="photo-uploaded-para mt-3"> <?php echo e(__('Upload Back side of your ID')); ?>

                                                                <br> <small><?php echo e(__('Recommended Dimensions 500x300 px')); ?></small></p>
                                                            <input type="file" name="back_image" id="back_image" class="photo-uploaded-file back_image_upload">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-wrapper profile-border-top flex-btn justify-content-end">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.submit','data' => ['title' => __('Submit'),'class' => 'btn-profile btn-bg-1 verification_load_spinner']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('btn.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Submit')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-bg-1 verification_load_spinner')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile Settings area end -->
        </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
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
    <?php echo $__env->make('frontend.user.client.identity.verification-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nexelit\core\resources\views/frontend/user/client/identity/verification.blade.php ENDPATH**/ ?>