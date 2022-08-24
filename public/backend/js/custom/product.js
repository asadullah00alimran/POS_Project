jQuery(document).ready(function () {

    jQuery(".btn-add").click(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var name = jQuery(".name").val();
        var des = jQuery(".des").val();
        var size = jQuery(".size").val();
        var color = jQuery(".color").val();
        var product_code = jQuery(".product_code").val();
        var cost_price = jQuery(".cost_price").val();
        var sale_price = jQuery(".sale_price").val();

        $.ajax({
            url: "/product/store",
            type: "POST",
            datatype: "JSON",
            data: {
                name: name,
                des: des,
                size: size,
                color: color,
                product_code: product_code,
                cost_price: cost_price,
                sale_price: sale_price
            },
            success: function (response) {
                if (response.status == "faild") {
                    jQuery(".error_name").text(response.errors.name);
                    jQuery(".error_des").text(response.errors.des);
                    jQuery(".error_size").text(response.errors.size);
                    jQuery(".error_color").text(response.errors.color);
                    jQuery(".error_product_code").text(response.errors.product_code);
                    jQuery(".error_cost_price").text(response.errors.cost_price);
                    jQuery(".error_sale_price").text(response.errors.sale_price);
                }
                else {
                    jQuery(".msg").show().text("Added Successfully").fadeOut(1500);

                    jQuery(".error_name").text("");
                    jQuery(".error_des").text("");
                    jQuery(".error_size").text("");
                    jQuery(".error_color").text("");
                    jQuery(".error_product_code").text("");
                    jQuery(".error_cost_price").text("");
                    jQuery(".error_sale_price").text("");
                    jQuery(".name").val("");
                    jQuery(".des").val("");
                    jQuery(".size").val("");
                    jQuery(".color").val("");
                    jQuery(".product_code").val("");
                    jQuery(".cost_price").val("");
                    jQuery(".sale_price").val("");

                }
            }
        });
    });

});