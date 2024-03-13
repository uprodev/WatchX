jQuery(document).ready(function ($) {

    /* after ajax */

    $(document).on('ajaxComplete', function(){
        $('.select-block select').niceSelect();
    });

    /* remove_from_cart_button */


    $(document).on('click', '.remove-item', function (e) {
        e.preventDefault();
        var key = $(this).attr('data-product_key');

        if ($('.woocommerce-cart-form').length || $('.woocommerce-checkout').length) {
            $(this).closest('li').remove();
        }

        $(this).closest('.item').remove();
        $.ajax({
            type: 'get',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'remove_from_cart',
                key: key
            },

            success: function (data) {

                $(document.body).trigger('wc_update_cart');
                $(document.body).trigger('wc_fragment_refresh');
                $(document.body).trigger('update_checkout');

                if (data.count === 0) location.href = '/shop';

            }
        })

    });


    $(document).on('input', '#search', function(e){
        e.preventDefault();

        var val = $('#search').val();

        val = val.toLowerCase();

        if(val.length === 1){

            $('.search-br .item').hide();
            $('.search-br .item[data-lettre="'+val+'"]').show();
            $('.search-br .item li').show();

        }else if(val.length >= 2){

            $('.search-br .item li').hide();
            $('.search-br .item li[data-name*="'+val+'"]').show();

        }else{

            $('.search-br .item').show();
            $('.search-br .item li').show();

        }

    });


});