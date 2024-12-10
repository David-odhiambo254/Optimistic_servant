<div class="modal fade" id="paymentGatewayModal" tabindex="-1" aria-labelledby="paymentGatewayModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?php echo e(route('order.user.confirm')); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="job_id_for_order" id="job_id_for_order">
            <input type="hidden" name="proposal_id_for_order" id="proposal_id_for_order">
            <input type="hidden" name="offer_id_for_order" id="offer_id_for_order">
            <input type="hidden" name="job_type_for_order" id="job_type_for_order">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="set_basic_standard_premium_type"></h3>
                </div>
                <div class="modal-body">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notice.general-notice','data' => ['description' => __(
                        'Before create an order we encourage to contact the seller so that seller can not decline your order.',
                    )]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notice.general-notice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__(
                        'Before create an order we encourage to contact the seller so that seller can not decline your order.',
                    ))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <div class="confirm-payment payment-border">
                        <div class="single-checkbox">
                            <div class="checkbox-inlines">
                                <label class="checkbox-label load_after_login" for="choose">
                                    <?php if(Auth::check() && Auth::user()->user_wallet?->balance > 0): ?>
                                        <?php echo \App\Helper\PaymentGatewayList::renderWalletForm(); ?>

                                        <span class="wallet-balance mt-2 d-block"><?php echo e(__('Wallet Balance:')); ?>

                                            <strong
                                                class="main-balance"><?php echo e(float_amount_with_currency_symbol(Auth::user()->user_wallet?->balance)); ?></strong></span>
                                        <br>
                                        <span class="display_balance"></span>
                                        <br>
                                        <span class="deposit_link"></span>
                                    <?php endif; ?>
                                    <p class="d-none show_hide_transaction_section">
                                        <strong><?php echo e(__('Transaction Fee')); ?></strong>
                                        <span class="currency_symbol"></span>
                                        <span class="transaction_fee_amount"></span>
                                    </p>
                                    <br>

                                    <?php echo \App\Helper\PaymentGatewayList::renderPaymentGatewayForForm(false); ?>

                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-profile btn-outline-gray btn-hover-danger"
                        data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.submit','data' => ['title' => __('Order Now'),'class' => 'btn-profile btn-bg-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('btn.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Order Now')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-bg-1')]); ?>
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
<?php /**PATH C:\xampp\htdocs\nexelit\core\resources\views/frontend/user/client/job/modal/payment-gateway-modal.blade.php ENDPATH**/ ?>