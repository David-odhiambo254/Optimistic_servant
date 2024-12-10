<script>
    (function($){
        "use strict";
        $(document).ready(function(){
            // pagination
            $(document).on('click', '.pagination a', function(e){
                e.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                histories(page);
            });
            function histories(page){
                $.ajax({
                    url:"<?php echo e(route('freelancer.wallet.withdraw.paginate.data').'?page='); ?>" + page,
                    success:function(res){
                        $('.search_result').html(res);
                    }
                });
            }
        });
    }(jQuery));
</script>
<?php /**PATH C:\xampp\htdocs\nexelit\core\Modules/Wallet\Resources/views/freelancer/withdraw/withdraw-js.blade.php ENDPATH**/ ?>