jQuery(document).ready(function () {

    jQuery(document).on("keyup", ".product_id", function () {
        var _product_id = jQuery(this).val();

        $.ajax({
            url: '/purchase/find/' + _product_id,
            type: 'GET',
            datatype: 'JSON',
            success: function (response) {
                jQuery(".cost_price").val(response.product.cost_price);
                if (response.stock == null) {
                    jQuery(".astock").val("0");
                }
                else {
                    jQuery(".astock").val(response.stock.quantity);

                }
            }

        });
    });

    jQuery(document).on("keyup", ".quantity", function () {
        var _quantity = jQuery(this).val();
        var _cost_price = jQuery(".cost_price").val();
        var _astock = jQuery(".astock").val();
        var _total_amount = _quantity * _cost_price;
        var _present_stock = _astock + _quantity;
        jQuery(".total_amount").val(_total_amount);
        jQuery(".astock").val(_present_stock);
    });

    jQuery(document).on("keyup", ".dis", function () {
        var _dis = jQuery(this).val();
        var _total_amount = jQuery(".total_amount").val();
        var _dis_amount = ((_total_amount * _dis) / 100);
        var _grand_total = _total_amount - _dis_amount;
        var _dis_amount = jQuery(".dis_amount").val(_dis_amount);
        jQuery(".grand_total").val(_grand_total);
    });
    // jQu
    // jQuery(document).on("keyup", ".product_id", function () {
    //     var _product_id = jQuery(this).val();

    //     $.ajax({
    //         url: '/purchase/find/' + _product_id,
    //         type: 'GET',
    //         datatype: 'JSON',
    //         success: function (response) {
    //             jQuery(".cost_price").val(response.product.cost_price);
    //         }
    //     });
    // });

    // jQuery(".btn-add-purchase").click(function () {

    //     var date = jQuery(".date").val();
    //     var br_id = jQuery(".br_id").val();
    //     var company_name = jQuery(".company_name").val();
    //     var invoice = jQuery(".invoice").val();
    //     var product_id = jQuery(".product_id").val();
    //     var dis = jQuery(".dis").val();
    //     var dis_amount = jQuery(".dis_amount").val();
    //     var total_amount = jQuery(".total_amount").val();

    //     $.ajax({
    //         url: '/purchase/store',
    //         type: 'POST',
    //         datatype: 'JSON',
    //         data: {
    //             date: date,
    //             br_id: br_id,
    //             company_name: company_name,
    //             invoice: invoice,
    //             product_id: product_id,
    //             dis: dis,
    //             dis_amount: dis_amount,
    //             total_amount: total_amount
    //         },
    //         success: function (response) {
    //             if (response) {

    //             }
    //         }

    //     });


    // });


});