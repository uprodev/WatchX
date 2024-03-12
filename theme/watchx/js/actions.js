jQuery(document).ready(function ($) {

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


            }
        })

    });


});