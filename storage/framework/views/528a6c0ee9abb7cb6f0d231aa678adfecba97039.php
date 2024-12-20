<div class="dashboard__left dashboard-left-content">
    <div class="dashboard__left__main">
        <div class="dashboard__left__close close-bars"> <i class="fa-solid fa-times"></i> </div>
        <div class="dashboard__top">
            <div class="dashboard__top__logo">
                <a href="<?php echo e(route('admin.dashboard')); ?>">
                    <?php if(!empty(get_static_option('site_white_logo'))): ?>
                        <?php echo render_image_markup_by_attachment_id(get_static_option('site_white_logo')); ?>

                    <?php else: ?>
                        <img src="<?php echo e(asset('assets/static/img/logo/dashboard_logo.png')); ?>" alt="dashboard-logo">
                    <?php endif; ?>
                </a>
            </div>
        </div>
        <div class="dashboard__bottom mt-5">
            <ul class="dashboard__bottom__list dashboard-list">















                <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.dashboard'])): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('admin.dashboard')); ?>"> <i
                            class="fa-solid fa-chart-simple"></i><?php echo e(__('Dashboard')); ?></a>
                </li>

                <?php if(auth()->guard('admin')->user()->role == 1): ?>
                    <li
                        class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/manage*') || request()->is('admin/role*')): ?> active open show <?php endif; ?>">
                        <a href="javascript:void(0)"> <i class="fa-solid fa-user"></i> <?php echo e(__('Admin Role Manage')); ?>

                        </a>
                        <ul class="submenu">
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.create'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.create')); ?>"> <?php echo e(__('Add New Admin')); ?> </a>
                            </li>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.all'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.all')); ?>"> <?php echo e(__('All Admins')); ?> </a>
                            </li>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.role.create'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.role.create')); ?>"> <?php echo e(__('All Roles')); ?> </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <li
                    class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/user*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-user"></i> <?php echo e(__('User Manage')); ?> </a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.freelancer.all'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.freelancer.all')); ?>"> <?php echo e(__('All Freelancers')); ?> </a>
                            </li>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.client.all'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.client.all')); ?>"> <?php echo e(__('All Clients')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-trash-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.user.restore'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.user.restore')); ?>"> <?php echo e(__('Trash List')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-identity-verify-request-list')): ?>
                            
                        <?php endif; ?>
                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.user.add'])): ?> selected <?php endif; ?>">
                            <a href="<?php echo e(route('admin.user.add')); ?>">
                                <?php echo e(__('Add New User')); ?> </a>
                        </li>
                    </ul>
                </li>

                

                <?php if(moduleExists('PluginManage')): ?>
                
                <?php endif; ?>

                    
                    <?php $__currentLoopData = getAllExternalMenu(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $externalMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $externalMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $individual_menu_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $convert_to_array = (array)$individual_menu_item;
                                $convert_to_array['label'] = __($convert_to_array['label']);
                                if (array_key_exists('permissions', $convert_to_array) && !is_array($convert_to_array['permissions'])) {
                                    $convert_to_array['permissions'] = [$convert_to_array['permissions']];
                                }
                                $routeName = $convert_to_array['route'];
                            ?>

                                <?php if(isset($routeName) && !empty($routeName) && Route::has($routeName)): ?>

                                <?php if(count($externalMenu) > 1): ?>
                                        <li class="dashboard__bottom__list__item has-children <?php if(request()->routeIs([$routeName])): ?> active open show <?php endif; ?>">
                                            <?php if($convert_to_array['parent'] == null): ?>
                                            <a href="javascript:void(0)"> <i class="<?php echo e($convert_to_array['icon']); ?>"></i> <?php echo e(__($convert_to_array['label'])); ?> </a>
                                            <?php endif; ?>
                                            <ul class="submenu">
                                                <?php if($convert_to_array['parent'] != null): ?>
                                                    <?php dump($convert_to_array['label']); ?>;
                                                <li class="dashboard__bottom__list__item <?php if(request()->routeIs([$routeName])): ?> selected <?php endif; ?>">
                                                    <a href="<?php echo e(route($routeName)); ?>"> <?php echo e(__($convert_to_array['label'])); ?> </a>
                                                </li>
                                                <?php endif; ?>
                                            </ul>
                                        </li>
                                    <?php else: ?>
                                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs([$routeName])): ?> active <?php endif; ?>">
                                            <a href="<?php echo e(route($routeName)); ?>"> <i class="<?php echo e($convert_to_array['icon']); ?>"></i><?php echo e(__($convert_to_array['label'])); ?>

                                                <?php if(array_key_exists('class', $convert_to_array)): ?>
                                                <span class="badge bg-danger"><?php echo e(__('plugin')); ?></span>
                                                <?php endif; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(moduleExists('PromoteFreelancer')): ?>
                        <li class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/promotion*')): ?> active open show <?php endif; ?>">
                            <a href="javascript:void(0)"> <i class="fa-solid fa-user"></i> <?php echo e(__('Promotion Manage')); ?> </a>
                            <ul class="submenu">
                                <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.project.promote.settings'])): ?> selected <?php endif; ?>">
                                    <a href="<?php echo e(route('admin.project.promote.settings')); ?>"> <?php echo e(__(' Promotion Settings')); ?> </a>
                                </li>
                                <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.promote.transaction.fee.settings'])): ?> selected <?php endif; ?>">
                                    <a href="<?php echo e(route('admin.promote.transaction.fee.settings')); ?>"> <?php echo e(__('Transaction Fee Settings')); ?> </a>
                                </li>
                                <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.project.promoted.list'])): ?> selected <?php endif; ?>">
                                    <a href="<?php echo e(route('admin.project.promoted.list')); ?>"> <?php echo e(__('Promoted Project List')); ?> </a>
                                </li>
                                <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.profile.promoted.list'])): ?> selected <?php endif; ?>">
                                    <a href="<?php echo e(route('admin.profile.promoted.list')); ?>"> <?php echo e(__('Promoted Profile List')); ?> </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                <li
                    class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/location*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-earth-americas"></i> <?php echo e(__('Country Manage')); ?>

                    </a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('country-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.country.all'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.country.all')); ?>"> <?php echo e(__('Country')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('country-csv-file-import')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.country.import.csv.settings'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.country.import.csv.settings')); ?>"> <?php echo e(__('Import Country')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('state-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.state.all'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.state.all')); ?>"> <?php echo e(__('State')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('state-csv-file-import')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.state.import.csv.settings'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.state.import.csv.settings')); ?>"> <?php echo e(__('Import States')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('city-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.city.all'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.city.all')); ?>"> <?php echo e(__('City')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('city-csv-file-import')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.city.import.csv.settings'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.city.import.csv.settings')); ?>"> <?php echo e(__('Import Cities')); ?> </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>

                <li
                    class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/service*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-list"></i><?php echo e(__('Catalogue Manage')); ?> </a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.category.all'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.category.all')); ?>"> <?php echo e(__('Category')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('subcategory-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.subcategory.all'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.subcategory.all')); ?>"> <?php echo e(__('Sub Category')); ?> </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>

                <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.feedback.all'])): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('admin.feedback.all')); ?>"> <i
                                class="fa-solid fa-chart-simple"></i><?php echo e(__('Feedback Manage')); ?></a>
                </li>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('skill-list')): ?>
                    <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.skill'])): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.skill')); ?>"> <i class="fa-solid fa-user-gear"></i><?php echo e(__('Skills')); ?></a>
                    </li>
                <?php endif; ?>

                

                <li
                    class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/job*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-file-word"></i><?php echo e(__('Jobs')); ?> </a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('job-auto-approval')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.job.approval.settings'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.job.approval.settings')); ?>"> <?php echo e(__('Auto Approval Settings')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('job-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.jobs'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.jobs')); ?>"> <?php echo e(__('All Jobs')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('job-history-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.job.history'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.job.history')); ?>"> <?php echo e(__('Job History')); ?> </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>

                <li
                    class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/wallet*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-briefcase"></i> <?php echo e(__('Wallet')); ?></a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deposit-settings-view')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.wallet.deposit.settings'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.wallet.deposit.settings')); ?>">
                                    <?php echo e(__('Maximum Deposit Settings')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deposit-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.wallet.history'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.wallet.history')); ?>"> <?php echo e(__('Wallet History')); ?> </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>

                <li
                    class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/withdraw*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-briefcase"></i> <?php echo e(__('Withdraw')); ?></a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('withdraw-settings-view')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.wallet.withdraw.settings'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.wallet.withdraw.settings')); ?>"> <?php echo e(__('Withdraw Settings')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('withdraw-payment-gateway-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.wallet.withdraw.gateway'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.wallet.withdraw.gateway')); ?>">
                                    <?php echo e(__('Withdraw Payment Gateway')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('withdraw-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.wallet.withdraw.request'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.wallet.withdraw.request')); ?>"> <?php echo e(__('Withdraw Request')); ?> </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>

                

                <?php if(auth()->guard('admin')->user()->role == 1): ?>
                    <li
                        class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/transaction*')): ?> active open show <?php endif; ?>">
                        <a href="javascript:void(0)"> <i class="fa-solid fa-list"></i><?php echo e(__('Transaction Manage')); ?>

                        </a>
                        <ul class="submenu">
                            <li
                                class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.commission.settings'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.commission.settings')); ?>">
                                    <?php echo e(__('Admin Commission Settings')); ?> </a>
                            </li>
                            <li
                                class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.transaction.fee.settings'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.transaction.fee.settings')); ?>">
                                    <?php echo e(__('Transaction Fee Settings')); ?> </a>
                            </li>
                            <li
                                class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.withdraw.fee.settings'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.withdraw.fee.settings')); ?>">
                                    <?php echo e(__('Withdraw Fee Settings')); ?> </a>
                            </li>

                        </ul>
                    </li>
                <?php endif; ?>

                <li
                    class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/order*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-list"></i><?php echo e(__('Order Manage')); ?> </a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('order-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.order.all'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.order.all')); ?>"> <?php echo e(__('All Orders')); ?> </a>
                            </li>




                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.order.approval.settings'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.order.approval.settings')); ?>">
                                    <?php echo e(__('Auto Approval Settings')); ?> </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>

                

                

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blog-list')): ?>
                <li class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/blog*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa fa-blog"></i> <?php echo e(__('Blog Manage')); ?> </a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blog-list')): ?>
                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.blog.all'])): ?> selected <?php endif; ?>">
                            <a href="<?php echo e(route('admin.blog.all')); ?>"> <?php echo e(__('All Blogs')); ?> </a>
                        </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blog-add')): ?>
                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.blog.create'])): ?> selected <?php endif; ?>">
                            <a href="<?php echo e(route('admin.blog.create')); ?>"> <?php echo e(__('Add New Blog')); ?> </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <li
                    class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/support-ticket/*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-list"></i><?php echo e(__('Support')); ?> </a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('department-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.department'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.department')); ?>"> <?php echo e(__('Department')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('support-ticket-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.ticket'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.ticket')); ?>"> <?php echo e(__('Support Ticket')); ?> </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
                

                

                <li
                    class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/page-settings*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-gear"></i> <?php echo e(__('Page Settings')); ?> </a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('login-page-settings-view')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.settings.login'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.page.settings.login')); ?>"> <?php echo e(__('Login Page Settings')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('register-page-settings-view')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.settings.register'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.page.settings.register')); ?>">
                                    <?php echo e(__('Register Page Settings')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <li
                            class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/page-settings/account*')): ?> active open show <?php endif; ?>">
                            <a href="javascript:void(0)"> <?php echo e(__('Account Settings')); ?> </a>
                            <ul class="submenu">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('account-page-settings-view')): ?>
                                    <li
                                        class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.account.main.page'])): ?> selected <?php endif; ?>">
                                        <a href="<?php echo e(route('admin.page.account.main.page')); ?>">
                                            <?php echo e(__('Account Page Settings')); ?> </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('introduction-page-settings-view')): ?>
                                    <li
                                        class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.account.introduction'])): ?> selected <?php endif; ?>">
                                        <a href="<?php echo e(route('admin.page.account.introduction')); ?>">
                                            <?php echo e(__('Introduction Settings')); ?> </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('experience-page-settings-view')): ?>
                                    <li
                                        class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.account.experience'])): ?> selected <?php endif; ?>">
                                        <a href="<?php echo e(route('admin.page.account.experience')); ?>">
                                            <?php echo e(__('Experience Settings')); ?> </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('education-page-settings-view')): ?>
                                    <li
                                        class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.account.education'])): ?> selected <?php endif; ?>">
                                        <a href="<?php echo e(route('admin.page.account.education')); ?>">
                                            <?php echo e(__('Education Settings')); ?> </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('work-page-settings-view')): ?>
                                    <li
                                        class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.account.work'])): ?> selected <?php endif; ?>">
                                        <a href="<?php echo e(route('admin.page.account.work')); ?>"> <?php echo e(__('Work Settings')); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('skill-page-settings-view')): ?>
                                    <li
                                        class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.account.skill'])): ?> selected <?php endif; ?>">
                                        <a href="<?php echo e(route('admin.page.account.skill')); ?>"> <?php echo e(__('Skill Settings')); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('photo-page-settings-view')): ?>
                                    <li
                                        class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.account.rate.photo'])): ?> selected <?php endif; ?>">
                                        <a href="<?php echo e(route('admin.page.account.rate.photo')); ?>">
                                            <?php echo e(__('Rate & Photo Settings')); ?> </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li
                    class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/general-settings*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-gear"></i> <?php echo e(__('General Settings')); ?></a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reading')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.general.settings.reading'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.general.settings.reading')); ?>"> <?php echo e(__('Reading')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('navbar-global-variant')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.general.settings.navbar.global.variant'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.general.settings.navbar.global.variant')); ?>">
                                    <?php echo e(__('Navbar Global Variant')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('footer-global-variant')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.general.settings.footer.global.variant'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.general.settings.footer.global.variant')); ?>">
                                    <?php echo e(__('Footer Global Variant')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('site-identity')): ?>
                            
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('basic-settings')): ?>
                            
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('color-settings')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.general.settings.color'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.general.settings.color')); ?>"> <?php echo e(__('Color Settings')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('typography-settings')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.general.settings.typography'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.general.settings.typography')); ?>">
                                    <?php echo e(__('Typography Settings')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('seo-settings')): ?>
                            
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('third-party-script-settings')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.general.settings.third.party.script'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.general.settings.third.party.script')); ?>">
                                    <?php echo e(__('Third Party Scripts')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('social-login-settings')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.general.settings.social.login'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.general.settings.social.login')); ?>"> <?php echo e(__('Social Login')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('email-template-settings')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.general.settings.email.template'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.general.settings.email.template')); ?>">
                                    <?php echo e(__('Email Template')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('smtp-settings')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.general.settings.smtp'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.general.settings.smtp')); ?>"> <?php echo e(__('SMTP Settings')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('custom-css-settings')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.general.settings.custom.css'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.general.settings.custom.css')); ?>"> <?php echo e(__('Custom CSS')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('custom-js-settings')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.general.settings.custom.js'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.general.settings.custom.js')); ?>"> <?php echo e(__('Custom JS')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('gdpr-settings')): ?>
                            
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cache-settings')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.general.settings.cache'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.general.settings.cache')); ?>"> <?php echo e(__('Cache Settings')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('database-upgrade')): ?>
                            
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('generate-license-key')): ?>
                        
                        <?php endif; ?>
                    </ul>
                </li>

                <li class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/payment-settings*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-briefcase"></i>
                        <?php echo e(__('Payment Settings')); ?></a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payment-info-settings')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.payment.settings.info'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.payment.settings.info')); ?>"> <?php echo e(__('Payment Info Settings')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        
                    </ul>
                </li>

                <li class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/plugins*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-gear"></i> <?php echo e(__('Appearance Settings')); ?>

                    </a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.menu']) || request()->routeIs(['admin.menu.edit'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.menu')); ?>"> <?php echo e(__('Menu Builder')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('form-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.form', 'admin.form.edit'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.form')); ?>"> <?php echo e(__('Form Builder')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('widget-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.widget'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.widget')); ?>"> <?php echo e(__('Widget Builder')); ?> </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>

                <li class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/additional-settings*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-list"></i><?php echo e(__('Additional Settings')); ?></a>
                    <ul class="submenu">
                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.loader.settings'])): ?> selected <?php endif; ?>">
                            <a href="<?php echo e(route('admin.loader.settings')); ?>">
                                <?php echo e(__('Loader Settings')); ?> </a>
                        </li>
                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.mouse.settings'])): ?> selected <?php endif; ?>">
                            <a href="<?php echo e(route('admin.mouse.settings')); ?>">
                                <?php echo e(__('Mouse Pointer Settings')); ?> </a>
                        </li>
                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.bottom.to.top.settings'])): ?> selected <?php endif; ?>">
                            <a href="<?php echo e(route('admin.bottom.to.top.settings')); ?>">
                                <?php echo e(__('Bottom to Top Button Settings')); ?> </a>
                        </li>
                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.bottom.to.top.settings'])): ?> selected <?php endif; ?>">
                            <a href="<?php echo e(route('admin.sticky.menu.settings')); ?>">
                                <?php echo e(__('Sticky Menu Settings')); ?> </a>
                        </li>
                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.commission.display.settings'])): ?> selected <?php endif; ?>">
                            <a href="<?php echo e(route('admin.commission.display.settings')); ?>">
                                <?php echo e(__('Display Commission Settings')); ?> </a>
                        </li>
                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.home.animation.settings'])): ?> selected <?php endif; ?>">
                            <a href="<?php echo e(route('admin.home.animation.settings')); ?>">
                                <?php echo e(__('Home Page Animation Settings')); ?> </a>
                        </li>
                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.project.enable.disable.settings'])): ?> selected <?php endif; ?>">
                            <a href="<?php echo e(route('admin.project.enable.disable.settings')); ?>">
                                <?php echo e(__('Project Enable Disable')); ?> </a>
                        </li>
                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.job.enable.disable.settings'])): ?> selected <?php endif; ?>">
                            <a href="<?php echo e(route('admin.job.enable.disable.settings')); ?>">
                                <?php echo e(__('Job Enable Disable')); ?> </a>
                        </li>
                        <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.chat.email.settings'])): ?> selected <?php endif; ?>">
                            <a href="<?php echo e(route('admin.chat.email.settings')); ?>">
                                <?php echo e(__('Chat Email Enable Disable')); ?> </a>
                        </li>
                    </ul>
                </li>

                <li class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/email-template*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-envelope"></i> <?php echo e(__('Email Template')); ?>

                    </a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('email-template-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.email.template.all'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.email.template.all')); ?>"> <?php echo e(__('All Templates')); ?> </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>

                <li
                    class="dashboard__bottom__list__item has-children <?php if(request()->is('admin/dynamic-pages*')): ?> active open show <?php endif; ?>">
                    <a href="javascript:void(0)"> <i class="fa-solid fa-file-circle-plus"></i> <?php echo e(__('Pages')); ?>

                    </a>
                    <ul class="submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page-list')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.all'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.page.all')); ?>"> <?php echo e(__('All Pages')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page-create-new')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.new'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.page.new')); ?>"> <?php echo e(__('Add New Page')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-404-page')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.404'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.page.404')); ?>"> <?php echo e(__('Manage 404 Page')); ?> </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-maintenance-page')): ?>
                            <li class="dashboard__bottom__list__item <?php if(request()->routeIs(['admin.page.maintenance'])): ?> selected <?php endif; ?>">
                                <a href="<?php echo e(route('admin.page.maintenance')); ?>"> <?php echo e(__('Manage Maintenance Page')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>

                <li class="dashboard__bottom__list__item <?php if(request()->is(['admin/faq*'])): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('admin.faq.all')); ?>"> <i
                                class="fa-solid fa-question"></i><?php echo e(__('Faq')); ?></a>
                </li>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('language-list')): ?>
                    <li class="dashboard__bottom__list__item <?php if(request()->is(['admin/languages*'])): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.languages')); ?>"> <i
                                class="fa-solid fa-chart-simple"></i><?php echo e(__('Languages')); ?></a>
                    </li>
                <?php endif; ?>
                <li class="dashboard__bottom__list__item">
                    <a href="<?php echo e(route('admin.logout')); ?>"> <i
                            class="fa-solid fa-arrow-right-to-bracket"></i><?php echo e(__('Log Out')); ?></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\nexelit\core\resources\views/backend/layout/partials/left-sidebar.blade.php ENDPATH**/ ?>