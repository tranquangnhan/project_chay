// show giỏ hàng
$.post("../controller/addcart.php",
    function(data) {
        $('#slcart').html(data);
        $('#slcart2').html(data);
    }
);

function addCart(id) {

    var sl = $("#quantity_wanted").val();
    var size = $("#group_1").val();
    var mausac = $("#color").text();

    $("#canhbao").css('display', 'none');
    $("#canhbao").text('');

    if (size == 0) {
        $("#canhbao").css('display', 'block');
        $("#canhbao").text('Vui lòng chọn size !');
        return false;
    }
    if (mausac == 0) {
        $("#canhbao").css('display', 'block');
        $("#canhbao").text('Vui lòng chọn màu sắc !');
        return false;
    } else {
        $("#canhbao").css('display', 'none');
        $.post("../controller/addcart.php", { id: id, sl: sl, size: size, mausac: mausac },
            function(data) {
                $('#slcart').html(data);
                $('#slcart2').html(data);
            }
        );
        alert(mausac)
    }
    return true;
}
addCart();

//click show cart
$(".cart-btn").click(function() {
    dangnhap();
    showAddGioHang();
});


//delCart
function delCart(iddel) {
    $.ajax({
        url: "../controller/addcart.php",
        method: "post",
        data: { iddel: iddel },
        success: function(data) {
            $('#slcart').html(data);
            cartShow();
        }
    });
}