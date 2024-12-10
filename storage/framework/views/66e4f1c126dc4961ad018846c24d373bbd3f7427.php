<?php $__env->startSection('title', __('Order Details')); ?>

<?php $__env->startSection('style'); ?>
    <style>
        .myOrder-single-content-para , .show_order_submit_description{white-space: pre-line}
        .pay-now-single-contents-work-flex {
            display: -webkit-box;
            display: -ms-flexbox;
             display: flex;
             -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            gap: 20px;
        }
        .fa-star, .single-project-content-review-rating{
            color: var(--secondary-color);
        }
        .rating_profile_details {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        [data-star] {
            text-align:left;
            font-style:normal;
            display:inline-block;
            position: relative;
            unicode-bidi: bidi-override;
        }
        [data-star]::before {
            display:block;
            content: "\f005" "\f005" "\f005" "\f005" "\f005";
            width: 100%;
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            font-size: 15px;;
            color: var(--body-color);
        }
        [data-star]::after {
            white-space:nowrap;
            position:absolute;
            top:0;
            left:0;
            content: "\f005" "\f005" "\f005" "\f005" "\f005";
            width: 100%;
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            font-size: 15px;;
            width: 0;
            color: var(--secondary-color);
            overflow:hidden;
            height:100%;
        }

        [data-star^="0.1"]::after{width:2%}
        [data-star^="0.2"]::after{width:4%}
        [data-star^="0.3"]::after{width:6%}
        [data-star^="0.4"]::after{width:8%}
        [data-star^="0.5"]::after{width:10%}
        [data-star^="0.6"]::after{width:12%}
        [data-star^="0.7"]::after{width:14%}
        [data-star^="0.8"]::after{width:16%}
        [data-star^="0.9"]::after{width:18%}
        [data-star^="1"]::after{width:20%}
        [data-star^="1.1"]::after{width:22%}
        [data-star^="1.2"]::after{width:24%}
        [data-star^="1.3"]::after{width:26%}
        [data-star^="1.4"]::after{width:28%}
        [data-star^="1.5"]::after{width:30%}
        [data-star^="1.6"]::after{width:32%}
        [data-star^="1.7"]::after{width:34%}
        [data-star^="1.8"]::after{width:36%}
        [data-star^="1.9"]::after{width:38%}
        [data-star^="2"]::after{width:40%}
        [data-star^="2.1"]::after{width:42%}
        [data-star^="2.2"]::after{width:44%}
        [data-star^="2.3"]::after{width:46%}
        [data-star^="2.4"]::after{width:48%}
        [data-star^="2.5"]::after{width:50%}
        [data-star^="2.6"]::after{width:52%}
        [data-star^="2.7"]::after{width:54%}
        [data-star^="2.8"]::after{width:56%}
        [data-star^="2.9"]::after{width:58%}
        [data-star^="3"]::after{width:60%}
        [data-star^="3.1"]::after{width:62%}
        [data-star^="3.2"]::after{width:64%}
        [data-star^="3.3"]::after{width:66%}
        [data-star^="3.4"]::after{width:68%}
        [data-star^="3.5"]::after{width:70%}
        [data-star^="3.6"]::after{width:72%}
        [data-star^="3.7"]::after{width:74%}
        [data-star^="3.8"]::after{width:76%}
        [data-star^="3.9"]::after{width:78%}
        [data-star^="4"]::after{width:80%}
        [data-star^="4.1"]::after{width:82%}
        [data-star^="4.2"]::after{width:84%}
        [data-star^="4.3"]::after{width:86%}
        [data-star^="4.4"]::after{width:88%}
        [data-star^="4.5"]::after{width:90%}
        [data-star^="4.6"]::after{width:92%}
        [data-star^="4.7"]::after{width:94%}
        [data-star^="4.8"]::after{width:96%}
        [data-star^="4.9"]::after{width:98%}
        [data-star^="5"]::after{width:100%}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="dashboard__body">
        <div class="myOrder_single bg-white padding-20 radius-10">
            <div class="row g-4">
                <div class="col-md-12">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notice.general-notice','data' => ['description' => __('Notice: If a completed order is canceled by the admin, the order amount will be credited to the client wallet and deducted from the freelancer wallet.'),'description1' => __('Notice: If an order is in the queue and funded, an admin has the authority to decline it. If an admin decline a queued order, the order amount will be credited back to the client wallet.')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notice.general-notice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Notice: If a completed order is canceled by the admin, the order amount will be credited to the client wallet and deducted from the freelancer wallet.')),'description1' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Notice: If an order is in the queue and funded, an admin has the authority to decline it. If an admin decline a queued order, the order amount will be credited back to the client wallet.'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-md-4">
                    <div class="contract_single__balance hover-question">
                        <div class="contract_single__balance-flex flex-between">
                            <div class="contract_single__balance-contents">
                                <?php if($order_details->status == 3): ?>
                                    <h4 class="contract_single__balance-price"><?php echo e(float_amount_with_currency_symbol($order_details->payable_amount)); ?></h4>
                                <?php else: ?>
                                    <h4 class="contract_single__balance-price"><?php echo e(site_currency_symbol()); ?> 0</h4>
                                <?php endif; ?>
                                <p class="contract_single__balance-para"><?php echo e(__('Total Paid')); ?></p>
                            </div>
                            <span class="contract_single__balance-icon">
                                <i class="fa-solid fa-question"></i>
                                <small class="hover-active-content"><?php echo e(__('Total paid means how much amount freelancer get for this order.')); ?></small>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-md-4">
                    <div class="contract_single__balance hover-question">
                        <div class="contract_single__balance-flex flex-between">
                            <div class="contract_single__balance-contents">
                                <?php
                                    $mile_stones = \App\Models\OrderMilestone::where('order_id',$order_details->id)->get();
                                    $payable_amount = \App\Models\OrderMilestone::where('order_id',$order_details->id)->where('status','!=',3)->sum('price');
                                ?>

                                <?php if($mile_stones->count() > 0): ?>
                                    <?php if($order_details->status !=3): ?>
                                        <?php
                                            $earnings = \App\Models\OrderMilestone::where('order_id', $order_details->id)
                                                ->where('status', 2)
                                                ->sum('price');
                                        ?>
                                        <h4 class="contract_single__balance-price"><?php echo e(float_amount_with_currency_symbol($payable_amount - $earnings)); ?> </h4>
                                    <?php else: ?>
                                        <h4 class="contract_single__balance-price"><?php echo e(site_currency_symbol()); ?> 0</h4>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php if($order_details->status != 3 && $order_details->status != 4 && $order_details->payment_status != ''): ?>
                                        <h4 class="contract_single__balance-price"><?php echo e(float_amount_with_currency_symbol($order_details->payable_amount)); ?></h4>
                                    <?php else: ?>
                                        <h4 class="contract_single__balance-price"><?php echo e(site_currency_symbol()); ?> 0</h4>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <p class="contract_single__balance-para"><?php echo e(__('Pending Amount')); ?></p>
                            </div>
                            <span class="contract_single__balance-icon">
                                <i class="fa-solid fa-question"></i>
                                <small class="hover-active-content"><?php echo e(__('Pending amount means how much amount freelancer will get after complete this order.')); ?></small>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-md-4">
                    <div class="contract_single__balance hover-question">
                        <div class="contract_single__balance-flex flex-between">
                            <div class="contract_single__balance-contents">
                                <h4 class="contract_single__balance-price"><?php echo e(float_amount_with_currency_symbol($order_details->commission_amount)); ?></h4>
                                <p class="contract_single__balance-para"><?php echo e(__('Commission Amount')); ?></p>
                            </div>
                            <span class="contract_single__balance-icon">
                                <i class="fa-solid fa-question"></i>
                                <small class="hover-active-content"><?php echo e(__('Commission amount means how much amount admin will get from this order.')); ?></small>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-md-4">
                    <div class="contract_single__balance hover-question">
                        <div class="contract_single__balance-flex flex-between">
                            <div class="contract_single__balance-contents">
                                <h4 class="contract_single__balance-price"><?php echo e(float_amount_with_currency_symbol($order_details->transaction_amount)); ?></h4>
                                <p class="contract_single__balance-para"><?php echo e(__('Transaction Amount')); ?></p>
                            </div>
                            <span class="contract_single__balance-icon">
                                <i class="fa-solid fa-question"></i>
                                <small class="hover-active-content"><?php echo e(__('Transaction amount means how much amount user will pay for each transaction.')); ?></small>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard__right__flex gap-4">
            <div class="dashboard__jobFilter responsive-lg">
                <div class="shop-sidebar-content">
                    <div class="shop-close-content radius-10">
                        <div class="single-shop-left user-details-manage bg-white radius-10">
                            <h6 class="user-details-manage-title">
                                <span class="user-details-manage-thumb">
                                    <?php if($order_details?->user->image): ?>
                                    <img src="<?php echo e(asset('assets/uploads/profile/'.$order_details?->user->image)); ?>" alt="<?php echo e(__('Client Image')); ?>">
                                    <?php else: ?>
                                    <a href="javascript:void(0)"><img src="<?php echo e(asset('assets/static/img/author/author.jpg')); ?>" alt="<?php echo e(__('AuthorImg')); ?>"></a>
                                    <?php endif; ?>
                                </span> <?php echo e(__('Client Details')); ?>

                            </h6>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.order.user-details','data' => ['firstName' => $order_details?->user->first_name,'lastName' => $order_details?->user->last_name,'email' => $order_details?->user->email,'phone' => $order_details?->user->phone,'country' =>  $order_details->user?->user_country?->country,'state' =>  $order_details->user?->user_state?->state,'city' =>  $order_details->user?->user_city?->city]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('order.user-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['firstName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order_details?->user->first_name),'lastName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order_details?->user->last_name),'email' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order_details?->user->email),'phone' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order_details?->user->phone),'country' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute( $order_details->user?->user_country?->country),'state' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute( $order_details->user?->user_state?->state),'city' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute( $order_details->user?->user_city?->city)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>

                        <div class="single-shop-left bg-white radius-10 mt-5">
                            <h6 class="user-details-manage-title">
                                <span class="user-details-manage-thumb">
                                    <?php if($order_details?->freelancer->image): ?>
                                    <img src="<?php echo e(asset('assets/uploads/profile/'.$order_details?->freelancer->image)); ?>" alt="<?php echo e(__('Client Image')); ?>">
                                    <?php else: ?>
                                    <a href="javascript:void(0)"><img src="<?php echo e(asset('assets/static/img/author/author.jpg')); ?>" alt="<?php echo e(__('AuthorImg')); ?>"></a>
                                    <?php endif; ?>
                                </span>
                                <?php echo e(__('Freelancer Details')); ?>

                            </h6>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.order.user-details','data' => ['firstName' => $order_details?->freelancer->first_name,'lastName' => $order_details?->freelancer->last_name,'email' => $order_details?->freelancer->email,'phone' => $order_details?->freelancer->phone,'country' =>  $order_details->freelancer?->user_country?->country,'state' =>  $order_details->freelancer?->user_state?->state,'city' =>  $order_details->freelancer?->user_city?->city]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('order.user-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['firstName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order_details?->freelancer->first_name),'lastName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order_details?->freelancer->last_name),'email' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order_details?->freelancer->email),'phone' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order_details?->freelancer->phone),'country' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute( $order_details->freelancer?->user_country?->country),'state' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute( $order_details->freelancer?->user_state?->state),'city' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute( $order_details->freelancer?->user_city?->city)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <div class="btn-wrapper mt-4">
                                <a href="<?php echo e(route('freelancer.profile.details',$order_details->freelancer?->username)); ?>" target="_blank" class="btn-profile btn-bg-1"><?php echo e(__('View Profile')); ?></a>
                            </div>
                        </div>

                        <?php if($order_details->rating): ?>
                            <?php $__currentLoopData = $order_details->rating; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($rating->sender_type == 1): ?>
                                <div class="single-shop-left bg-white radius-10 mt-5">
                                    <h6 class="user-details-manage-title"><?php echo e(__('Client Rating')); ?>

                                        <div class="single-project-content-review">
                                            <span class="single-project-content-review-icon"> <i class="fa-solid fa-star"></i> </span>
                                            <span class="single-project-content-review-rating"><?php echo e($rating->rating); ?> </span>
                                        </div>
                                    </h6>

                                    <div class="user-details-manage-list mt-4">
                                        <?php $rating_details = \App\Models\RatingDetails::where('rating_id',$rating->id)->get() ?>
                                        <?php $__currentLoopData = $rating_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="rating_profile_details">
                                                <div class="rating_profile_details_icon">
                                                    <i data-star="<?php echo e($details->rating); ?>"></i>
                                                </div>
                                                <span class="rating_profile_details-para">(<?php echo e(ucfirst($details->type)); ?>)</span>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($rating->sender_type == 2): ?>
                                    <div class="single-shop-left bg-white radius-10 mt-5">
                                        <h6 class="user-details-manage-title"><?php echo e(__('Freelancer Rating')); ?>

                                            <div class="single-project-content-review">
                                                <span class="single-project-content-review-icon"> <i class="fa-solid fa-star"></i> </span>
                                                <span class="single-project-content-review-rating"><?php echo e($rating->rating); ?> </span>
                                            </div>
                                        </h6>

                                        <div class="user-details-manage-list mt-4">
                                            <?php $rating_details = \App\Models\RatingDetails::where('rating_id',$rating->id)->get() ?>
                                            <?php $__currentLoopData = $rating_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="rating_profile_details">
                                                    <div class="rating_profile_details_icon">
                                                        <i data-star="<?php echo e($details->rating); ?>"></i>
                                                    </div>
                                                    <span class="rating_profile_details-para">(<?php echo e(ucfirst($details->type)); ?>)</span>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="dashboard__inner">
                <div>
                    <div class="myOrder_single bg-white padding-20 radius-10">
                        <div class="myOrder_single__item">
                            <div class="myOrder_single__flex">
                                <div class="myOrder_single__content">
                                    <span class="myOrder_single__content__id">#000<?php echo e($order_details->id); ?></span>
                                    <h4 class="myOrder-single-content-title mt-2">
                                        <?php if($order_details->is_project_job == 'project'): ?>
                                            <a target="_blank" href="<?php echo e(route('project.details', ['username' => $order_details?->project?->project_creator?->username, 'slug' => $order_details?->project->slug])); ?>"> <?php echo e($order_details?->project->title ?? ''); ?> </a>
                                        <?php elseif($order_details->is_project_job == 'job'): ?>
                                            <a target="_blank" href="<?php echo e(route('job.details', ['username' => $order_details?->job?->job_creator?->username, 'slug' => $order_details?->job->slug])); ?>"><?php echo e($order_details?->job->title ?? ''); ?></a>
                                        <?php else: ?>
                                            <?php echo e(__('Custom order')); ?>

                                        <?php endif; ?>
                                    </h4>
                                    <div class="myOrder_single__content__btn flex-btn gap-2 mt-3">
                                        <?php if($order_details->status === 0): ?>
                                            <span class="pending-approval active"><?php echo e(__('Queue Order')); ?></span>
                                        <?php endif; ?>
                                        <?php if($order_details->status === 1): ?>
                                            <span class="pending-approval active"><?php echo e(__('Active Order')); ?></span>
                                        <?php endif; ?>
                                        <?php if($order_details->status === 2): ?>
                                            <span class="pending-approval active"><?php echo e(__('Deliver Order')); ?></span>
                                        <?php endif; ?>
                                        <?php if($order_details->status === 3): ?>
                                            <span class="pending-approval active"><?php echo e(__('Complete Order')); ?></span>
                                        <?php endif; ?>
                                        <?php if($order_details->status === 4): ?>
                                            <span class="pending-approval active"><?php echo e(__('Cancel Order')); ?></span>
                                        <?php endif; ?>
                                        <?php if($order_details->status === 5): ?>
                                            <span class="pending-approval active"><?php echo e(__('Decline Order')); ?></span>
                                        <?php endif; ?>
                                        <?php if($order_details->status === 7): ?>
                                            <span class="pending-approval active"><?php echo e(__('Hold Order')); ?></span>
                                        <?php endif; ?>
                                        <?php if($order_details->is_project_job === 'offer'): ?>
                                            <a href="javascript:void(0)" class="pending-approval secondary-color"><?php echo e(__('Custom Order')); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <span class="myOrder_single__content__time"><?php echo e($order_details->created_at->diffForHumans()); ?> </span>
                            </div>
                        </div>
                        <div class="myOrder_single__item">
                            <div class="myOrder_single__block">
                                <div class="myOrder_single__block__item">
                                    <div class="myOrder_single__block__item__content">
                                        <span class="myOrder_single__block__subtitle"><?php echo e(__('Order budget')); ?></span>
                                        <h6 class="myOrder_single__block__title mt-2"><?php echo e(float_amount_with_currency_symbol($order_details->price)); ?>

                                            <?php if($order_details->payment_status == 'complete'): ?>
                                                <span class="order-funded-btn"><?php echo e(__('Order Funded')); ?></span>
                                            <?php else: ?>
                                                <?php if($order_details->payment_gateway != 'manual_payment' && $order_details->payment_status == 'pending'): ?>
                                                    <span class="order-funded-btn"><?php echo e(__('Payment Failed')); ?></span>
                                                <?php else: ?>
                                                    <span class="order-funded-btn"><?php echo e(__('Not Funded')); ?></span>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </h6>
                                    </div>
                                </div>
                                <?php if($order_details->revision > 0 ): ?>
                                <div class="myOrder_single__block__item">
                                    <div class="myOrder_single__block__item__content">
                                        <span class="myOrder_single__block__subtitle"><?php echo e(__('Revision')); ?></span>
                                        <h6 class="myOrder_single__block__title mt-2"><?php echo e($order_details->revision); ?></h6>
                                    </div>
                                </div>
                                    <div class="myOrder_single__block__item">
                                        <div class="myOrder_single__block__item__content">
                                            <span class="myOrder_single__block__subtitle"><?php echo e(__('Revision Left')); ?></span>
                                            <h6 class="myOrder_single__block__title mt-2"><?php echo e($order_details->revision_left); ?></h6>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if($order_details?->order_mile_stones->count() == 0): ?>
                                <div class="myOrder_single__block__item">
                                    <div class="myOrder_single__block__item__content">
                                        <span class="myOrder_single__block__subtitle"><?php echo e(__('Delivery Time')); ?></span>
                                        <h6 class="myOrder_single__block__title mt-2"><?php echo e($order_details->delivery_time); ?> </h6>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="myOrder_single__block__item">
                                    <div class="myOrder_single__block__item__author">
                                        <a href="javascript:void(0)">
                                            <?php if($order_details?->user->image): ?>
                                                <img src="<?php echo e(asset('assets/uploads/profile/'.$order_details?->user->image)); ?>" alt="Client Image">
                                            <?php else: ?>
                                                <a href="javascript:void(0)"><img src="<?php echo e(asset('assets/static/img/author/author.jpg')); ?>" alt="<?php echo e(__('AuthorImg')); ?>"></a>
                                            <?php endif; ?>

                                        </a>
                                    </div>
                                    <div class="myOrder_single__block__item__content">
                                        <span class="myOrder_single__block__subtitle"><?php echo e(__('Customer')); ?></span>
                                        <h6 class="myOrder_single__block__title mt-2"><?php echo e($order_details?->user->username); ?> </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="myOrder_single__item">
                            <div class="myOrder_single__flex flex-between">
                                <a href="javascript:void(0)"
                                   class="btn-profile btn-outline-gray check_live_chat_message"
                                   data-bs-target="#checkChatModal"
                                   data-bs-toggle="modal"
                                >
                                    <i class="fa-regular fa-comments"></i>
                                    <?php echo e(__('Check Chat')); ?>

                                </a>

                                <?php
                                    $check_order_has_report_by_client = \App\Models\Report::where('client_id',$order_details->user_id)
                                    ->where('order_id',$order_details->id)
                                    ->where('reporter','client')
                                    ->first();
                                ?>

                                <?php if(!empty($check_order_has_report_by_client) && $check_order_has_report_by_client->status == 0): ?>
                                    <a tabindex="0" class="btn-profile btn-bg-cancel swal_status_change_button_for_cancel_order"><?php echo e(__('Cancel Order')); ?></a>
                                    <form method='post' action="<?php echo e(route('admin.order.status',$order_details->id)); ?>" class="d-none">
                                        <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
                                        <br>
                                        <button type="submit" class="swal_form_submit_btn d-none"></button>
                                    </form>
                                <?php endif; ?>
                                <?php if($order_details->status == 0 && $order_details->payment_status == 'complete'): ?>
                                    <a tabindex="0" class="btn-profile btn-bg-cancel swal_status_change_button_for_decline_order"><?php echo e(__('Decline Order')); ?></a>
                                    <form method='post' action="<?php echo e(route('admin.order.decline',$order_details->id)); ?>" class="d-none">
                                        <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
                                        <br>
                                        <button type="submit" class="swal_form_submit_btn d-none"></button>
                                    </form>
                                <?php endif; ?>
                                <?php if(!empty($check_order_has_report_by_client) && $check_order_has_report_by_client->status == 1): ?>
                                    <span tabindex="0" class="btn-profile btn-bg-cancel"><?php echo e(__('Cancel By Admin')); ?></span>
                                <?php endif; ?>

                                <div class="btn-wrapper flex-btn">
                                    <?php if($order_details->user?->is_suspend == 1 && $order_details->freelancer?->is_suspend == 1): ?>
                                        <button type="button" class="btn-profile btn-bg-cancel"><?php echo e(__('Both user suspended')); ?></button>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('admin.account.suspend',$order_details->id)); ?>" class="btn-profile btn-bg-cancel"><?php echo e(__('Suspend Account')); ?></a>
                                    <?php endif; ?>
                                    <?php if($order_details->status == 1 || $order_details->status == 2): ?>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.status-change','data' => ['title' => __('Hold Order'),'class' => 'btn-profile btn-bg-1 hold_order_status','url' => route('admin.order.hold',$order_details->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.status-change'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Hold Order')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-bg-1 hold_order_status'),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.order.hold',$order_details->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php endif; ?>
                                    <?php if($order_details->status== 7): ?>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.status-change','data' => ['title' => __('Unhold Order'),'class' => 'btn-profile btn-bg-1 unhold_order_status','url' => route('admin.order.unhold',$order_details->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.status-change'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Unhold Order')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-bg-1 unhold_order_status'),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.order.unhold',$order_details->id))]); ?>
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
                    <?php if($mile_stones->count() > 0 || $order_details?->order_submit_history->count() > 0 || $order_details->description != ''): ?>
                        <div class="myOrder_single bg-white padding-20 radius-10">
                            <div class="contract_single__header profile-border-bottom">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <?php if($mile_stones->count() > 0): ?>
                                        <li class="nav-item" role="presentation">
                                            <button class="btn" data-bs-toggle="pill" data-bs-target="#milestone_display" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Milestones</button>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($order_details->description): ?>
                                        <li class="nav-item" role="presentation">
                                            <button class="btn" data-bs-toggle="pill" data-bs-target="#description_display" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Description & Requirements</button>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($order_details?->order_submit_history->count() > 0): ?>
                                        <li class="nav-item" role="presentation">
                                            <button class="btn" data-bs-toggle="pill" data-bs-target="#work_display" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Works Submitted</button>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade  <?php if($mile_stones->count() > 0): ?> show active <?php endif; ?>" id="milestone_display" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="contract_single__inner">
                                            <div class="contract_single__milestone">
                                                <?php $__currentLoopData = $mile_stones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mile_stone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="contract_single__milestone__item">
                                                        <div class="contract_single-flex flex-between align-items-start">
                                                            <div class="contract_single__contents">
                                                                <h4 class="contract_single__title mt-3"><?php echo e($mile_stone->title); ?></h4>
                                                                <div class="contract_single__priceCompleted d-flex gap-2 mt-3">
                                                                   <span class="pending-approval secondary-color"><?php echo e(float_amount_with_currency_symbol($mile_stone->price)); ?></span>
                                                                   <?php if($mile_stone->status === 1): ?>
                                                                       <span class="fixed-btn not-started"><?php echo e(__('Active')); ?></span>
                                                                   <?php else: ?>
                                                                       <?php if($mile_stone->status === 0): ?>
                                                                           <span class="fixed-btn not-started"><?php echo e(__('Pending')); ?></span>
                                                                       <?php endif; ?>
                                                                       <?php if($mile_stone->status === 2): ?>
                                                                           <span class="fixed-btn not-started"><?php echo e(__('Complete')); ?></span>
                                                                       <?php endif; ?>
                                                                       <?php if($mile_stone->status === 3): ?>
                                                                           <span class="fixed-btn not-started"><?php echo e(__('Cancel')); ?></span>
                                                                       <?php endif; ?>
                                                                   <?php endif; ?>
                                                                    <span class="job-progress not-started"><strong><?php echo e(__('Revision:')); ?></strong> <?php echo e($mile_stone->revision); ?></span>
                                                                    <span class="job-progress not-started"><strong><?php echo e(__('Revision Left:')); ?></strong> <?php echo e($mile_stone->revision_left); ?></span>
                                                                </div>
                                                                <br>
                                                                <span class="contract_single__date__para"><strong><?php echo e(__('Delivery Time:')); ?></strong> <?php echo e($mile_stone->deadline); ?></span>
                                                                <p class="mt-4"><?php echo e($mile_stone->description); ?></p>
                                                            </div>
                                                            <div class="contract_single__right">
                                                                <?php if($order_details->payment_status == 'complete'): ?>
                                                                    <span class="job-progress not-started"><?php echo e(__('Funded')); ?></span>
                                                                <?php else: ?>
                                                                    <span class="job-progress not-started"><?php echo e(__('Not Funded')); ?></span>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade <?php if($mile_stones->count() == 0 && $order_details->description !=''): ?> show active <?php endif; ?>" id="description_display" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <p class="myOrder-single-content-para"><?php echo e($order_details->description ?? ''); ?></p>
                                    </div>
                                    <div class="tab-pane fade <?php if($mile_stones->count() == 0 && $order_details->description == ''): ?> show active <?php endif; ?>" id="work_display" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <?php $__currentLoopData = $order_details->order_submit_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="pay-now-single-contents-work">
                                                <div class="pay-now-single-contents-work-flex">
                                                    <div class="pay-now-single-contents-work-item">
                                                        <span class="pay-now-single-contents-work-date"><?php echo e($history->created_at->toFormattedDateString() ?? ''); ?></span>
                                                    </div>
                                                    <div class="pay-now-single-contents-work-item">
                                                        <div class="single-refundRequest-item">
                                                            <a href="<?php echo e(asset('assets/uploads/attachment/order/'.$history->attachment)); ?>" download class="single-refundRequest-item-uploads">
                                                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                                                <?php echo e(__('Download Attachment')); ?>

                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="pay-now-single-contents-work-item">
                                                        <div class="pay-now-single-contents-work-item-status">
                                                            <?php if($history->status === 0): ?>
                                                                <span class="milestone-approved "><?php echo e(__('Pending')); ?></span>
                                                            <?php elseif($history->status === 1): ?>
                                                                <span class="myJob-wrapper-single-fixed active"><?php echo e(__('Approved')); ?></span>
                                                            <?php elseif($history->status === 2): ?>
                                                                <span class="btn myJob-wrapper-single-fixed danger show_revision_details"
                                                                      data-bs-target="#RevisionDetailsModal"
                                                                      data-bs-toggle="modal"
                                                                      data-revision_id="<?php echo e($history->request_revision->id); ?>"
                                                                      data-revision_description="<?php echo e($history->request_revision->description); ?>">
                                                                    <?php echo e(__('Revision Details')); ?>

                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="pay-now-single-contents-work-item">
                                                        <div class="pay-now-single-contents-work-item-btn">
                                                            <a href="javascript:void(0)"
                                                               class="pay-now-single-contents-work-viewMore order_submit_description"
                                                               data-description="<?php echo e($history->description); ?>"
                                                               data-order_milestone_id="<?php echo e($history->order_milestone_id); ?>"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#OrderSubmitDescriptionModal">
                                                                <?php echo e(__('Description')); ?>

                                                                <i class="fa-solid fa-angle-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.pages.orders.order-submit-description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.pages.orders.revision-details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.pages.orders.check-chat-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
    <?php echo $__env->make('backend.pages.orders.order-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nexelit\core\resources\views/backend/pages/orders/order-details.blade.php ENDPATH**/ ?>