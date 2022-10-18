jQuery(document).ready(function () {

    jQuery(document).on("keyup", ".product_id", function () {
        var product_id = jQuery(this).val();

        $.ajax({
            url: '/purchase/find/' + product_id,
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
        var quantity = jQuery(this).val();
        var cost_price = jQuery(".cost_price").val();
        var total_amount = quantity * cost_price;
        jQuery(".total_amount").val(total_amount);
    });

    jQuery(document).on("keyup", ".dis", function () {
        var dis = jQuery(this).val();
        var total_amount = jQuery(".total_amount").val();
        var dis_amount = ((total_amount * dis) / 100);
        var grand_total = total_amount - dis_amount;
        var dis_amount = jQuery(".dis_amount").val(dis_amount);
        jQuery(".grand_total").val(grand_total);
    });


    // Add Purchase Section
    jQuery(".btn_purchase").click(function () {

        //csrf token generate
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //take the value from input field and put it into the variable for store in data base
        var date = jQuery(".date").val();
        var br_id = jQuery(".br_id").val();
        var company_name = jQuery(".company_name").val();
        var invoice = jQuery(".invoice").val();
        var product_id = jQuery(".product_id").val();
        var quantity = jQuery(".quantity").val();
        var dis = jQuery(".dis").val();
        var dis_amount = jQuery(".dis_amount").val();
        var total_amount = jQuery(".total_amount").val();


        //Passing Data with the ajax
        $.ajax({
            url: "/purchase/store",
            type: "POST",
            datatype: "json",
            data: {
                date: date,
                br_id: br_id,
                company_name: company_name,
                invoice: invoice,
                product_id: product_id,
                dis: dis,
                dis_amount: dis_amount,
                total_amount: total_amount
            },
            success: function (response) {
                alert("save");
            }

        });


    });


});