jQuery(document).ready(function () {

    // Add Product 
    jQuery(".btn-add").click(function () {
        //csrf token generate
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //take the value from input field and put it into the variable
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
                // Error Genarate
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
                    show();
                    // Clear Form after send data
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

    // This function for show product data
    show();
    function show() {
        $.ajax({
            url: '/product/show',
            type: 'GET',
            datatype: 'JSON',
            success: function (response) {
                var data = '';
                var sl = 1;
                $.each(response.data, function (key, item) {
                    data += '<tr>\
                            <td>'+ sl + '</td>\
                            <td>'+ item.product_code + '</td>\
                            <td>'+ item.name + '</td>\
                            <td><div style="background:'+ item.color + ';width: 20px; height: 20px; border-radius: 50%;"></div></td>\
                            <td>'+ item.sale_price + '</td>\
                            <td>\
                                <button value="'+ item.id + '" class="btn-edit btn btn-info btn-sm"><i class="fa fa-edit"></i></button>\
                                <button value="'+ item.id + '"class="btn-delete btn btn-danger btn-sm"><i class="fa fa-trash"><i>\
                            </td>\
                        </tr>';
                    sl++;
                })
                jQuery(".data").html(data);
            }
        });
    }

    // This section is for delete product data
    jQuery(document).on("click", ".btn-delete", function () {
        var id = jQuery(this).val();
        $.ajax({
            url: '/product/destroy' + id,
            type: 'GET',
            datatype: 'JSON',
            success: function (response) {
                jQuery(".msg").show().text("Deleted Successfully").fadeOut(1500);
                show();

            }
        });
    });


});