<?php $__env->startSection('site_title',__('Account Setup')); ?>
<?php $__env->startSection('content'); ?>
    <!-- Account Setup area Starts -->
    <div class="account-area pat-100 pab-100">
        <div class="container">
            <div class="setup-header setup-top-border">
                <div class="setup-header-flex">
                    <div class="setup-header-left">
                        <h4 class="setup-header-title"><?php echo e(get_static_option('account_page_title') ?? __('Setup Your Account')); ?></h4>
                    </div>
                    <div class="setup-header-right">
                        <a href="<?php echo e(route('homepage')); ?>" class="setup-header-skip"><?php echo e(get_static_option('account_page_skip_title') ?? __('Skip')); ?></a>
                    </div>
                </div>
            </div>
            <div class="setup-wrapper setup-top-border setup-bottom-border">
                <div class="setup-wrapper-flex">
                    <div>
                        <?php echo $__env->make('frontend.user.freelancer.account.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div>
                        <?php echo $__env->make('frontend.user.freelancer.account.introduction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('frontend.user.freelancer.account.experience.experience', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('frontend.user.freelancer.account.education.education', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('frontend.user.freelancer.account.work.work', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('frontend.user.freelancer.account.skill.skill', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('frontend.user.freelancer.account.hourly.hourly-rate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('frontend.user.freelancer.account.pre-next', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Account Setup area end -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('frontend.user.freelancer.account.account-setup-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nexelit\core\resources\views/frontend/user/freelancer/account/account-setup.blade.php ENDPATH**/ ?>