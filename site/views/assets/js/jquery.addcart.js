window.onload = () => {


}


function cart() {
    if ($(".dropdown-menu-right").hasClass('cartdislay') == false) {
        $(".dropdown-menu-right")[0].classList.add('cartdislay');
        $("span.cart-products-count")[0].classList.add('cartcount');
        $(".dropdown-menu-right")[1].classList.add('cartdislay');
        $("span.cart-products-count")[1].classList.add('cartcount');
    } else {
        $(".dropdown-menu-right")[0].classList.remove('cartdislay');
        $("span.cart-products-count")[0].classList.remove('cartcount');
        $(".dropdown-menu-right")[1].classList.remove('cartdislay');
        $("span.cart-products-count")[1].classList.remove('cartcount');
    }

}


// show giỏ hàng

$.post("controllers/ajax/addcart.php",
    function(data) {
        $('#_desktop_cart').html(data);
        $('#_mobile_cart').html(data);
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
            text: 'Bạn chưa chọn size',
        })

        return false;
    }
    if ($(".input-color").length > 0 && !$(".input-color:checked").val()) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Bạn chưa chọn màu',
        })

        return false;
    } else {
        $.post("controllers/ajax/addcart.php", { id: id, sl: sl, size: size, mausac: mausac },
            function(data) {
                Swal.fire({
                    icon: 'success',
                    title: 'Yeah',
                    text: 'Thêm giỏ hàng thành công',
                })
                $('#_desktop_cart').html(data);
                $('#_mobile_cart').html(data);
                cart()
            }
        );
    }
    return true;




}



//delCart
function delCart(iddel) {

    var getUrl = window.location.href;

    var c = getUrl.indexOf("checkout");

    if (c != -1) {
        location.reload();
    }



    $.ajax({
        url: "controllers/ajax/addcart.php",
        method: "post",
        data: { iddel: iddel },
        success: function(data) {
            $('#_desktop_cart').html(data);
            $('#_mobile_cart').html(data);
            cart()
        }
    });
}
const fetchAPi = async(url, option) => {
    const dulieu = await fetch(url, option);
    console.log(dulieu)
}

function contact() {
    var idsp = document.getElementById('sp').value;
    let bodyhtml = ''

    bodyhtml = `<select id="id_contact" class="swal2-input">
<option value="2">Dịch vụ khách hàng</option>
<option value="1">Thông tin sản phẩm</option>
</select>
<input id="name" placeholder="Tên" class="swal2-input">
<input id="email" placeholder="email" class="swal2-input">
<textarea id="message" class="form-control swal2-input" name="message" placeholder="Tôi có thể giúp gì?" rows="3" cols="3"></textarea>`

    swal.fire({
        title: 'Contact',
        html: bodyhtml,
        focusConfirm: false,
        preConfirm: async() => {
            var id_contact = document.getElementById('id_contact').value;
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;
            if (id_contact == '' || name == '' || email == '' || message == '') {

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Bạn chưa nhập đủ thông tin',
                })

            } else {
                var formData = new FormData();
                formData.append('name', name);
                formData.append('email', email);
                formData.append('message', message);
                formData.append('idsp', idsp);
                formData.append('id_contact', id_contact);
                formData.append('action', 'add');
                await $.ajax({
                    type: "POST",
                    url: "controllers/ajax/contact.php",
                    contentType: false,
                    processData: false,
                    dataType: 'JSON',
                    data: formData,
                    success: function(response) {
                        if (response.StatusCode == 1) {
                            Swal.fire({
                                icon: 'success',
                                title: 'success...',
                                text: 'Gửi liên hệ thành công',
                            })
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: 'success...',
                                text: 'Gửi liên hệ thành công',
                            })
                        }
                    }
                });
            }



        }
    })
}

//ajax filter
$(document).ready(function() {
    // var page = $('#offset').val();
    filter_data();

    function filter_data() {
        var action = 'fetch_data';
        var sort_by = $('#sort_by').val();
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var slug = $("#slug").val();
        var slug1 = $("#slug1").val();
        var maloai = $("#maloai").val();
        var brand = get_filter('brand');
        // var ram = get_filter('ram');
        $.ajax({
            url: "views/fetch_data.php",
            method: "POST",
            data: { action: action, minimum_price: minimum_price, maximum_price: maximum_price, brand: brand, key: sort_by, slug: slug, slug1: slug1, maloai: maloai },
            success: function(data) {

                $('#filter_data').html(data);
            }
        });

    }

    function get_filter(class_name) {
        var filter = [];
        $('.' + class_name + ':checked').each(function() {
            filter.push($(this).val());
        });
        return filter;

    }

    $('.common_selector').click(function() {
        filter_data();
    });
    $('#hidden_maximum_price').change(function() {
        let oke = $('#hidden_maximum_price').val();
        $('#SHOW_PRICE_FILTER').text(oke + "đ");
        filter_data();
    });
    $('#sort_by').change(function() {
        let oke = $('#sort_by').val();

        // $('#SHOW_PRICE_FILTER').text(oke + "đ");
        filter_data();
    });


});