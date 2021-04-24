// show giỏ hàng
$.post("controllers/ajax/addcart.php",
    function(data) {
        $('#slcart').html(data);
    }
);

function addCart(id) {

    var sl = $("#quantity_wanted").val();
    var size = $("#group_1").val();
    var mausac = $(".input-color:checked").val();
    $("#canhbao").css('display', 'none');
    $("#canhbao").text('');

    if ($("#group_1") && $("#group_1").val() == '') {
        alert('chọn size')
        $("#canhbao").css('display', 'block');
        $("#canhbao").text('Vui lòng chọn size !');
        return false;
    }
    if ($(".input-color") && !$(".input-color:checked").val()) {
        alert('chọn màu')
        $("#canhbao").css('display', 'block');
        $("#canhbao").text('Vui lòng chọn màu sắc !');
        return false;
    } else {
        // $("#canhbao").css('display', 'none');
        $.post("controllers/ajax/addcart.php", { id: id, sl: sl, size: size, mausac: mausac },
            function(data) {
                $('#_desktop_cart').html(data);
            }
        );
    }
    return true;
}
addCart();



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