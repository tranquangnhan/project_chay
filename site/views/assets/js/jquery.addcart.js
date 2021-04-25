// show giỏ hàng

$.post("controllers/ajax/addcart.php",
    function(data) {
        $('#_desktop_cart').html(data);
    }
);

function addCart(id) {

    var sl = $("#quantity_wanted").val();
    var size = $("#group_1").val();
    var mausac = $(".input-color:checked").val();
    $("#canhbao").css('display', 'none');
    $("#canhbao").text('');

    if ($("#group_1").length == 0) {
        size = 'null';
    }
    if ($(".input-color").length == 0) {
        mausac = 'null';
    }
    if ($("#group_1").length > 0 && !$("#group_1").val()) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please choose a size',
        })

        return false;
    }
    if ($(".input-color").length > 0 && !$(".input-color:checked").val()) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please choose a color',
        })

        return false;
    } else {
        $.post("controllers/ajax/addcart.php", { id: id, sl: sl, size: size, mausac: mausac },
            function(data) {
                Swal.fire({
                    icon: 'success',
                    title: 'Oops...',
                    text: 'Add to cart successfully',
                })
                $('#_desktop_cart').html(data);
            }
        );
    }
    return true;
}



//delCart
function delCart(iddel) {
    $.ajax({
        url: "controllers/ajax/addcart.php",
        method: "post",
        data: { iddel: iddel },
        success: function(data) {
            $('#_desktop_cart').html(data);
        }
    });
}