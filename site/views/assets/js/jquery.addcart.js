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
        }
    });
}
const fetchAPi = async(url, option) => {
    const dulieu = await fetch(url, option);
    console.log(dulieu)
}

function contact() {
    var idsp = document.getElementById('sp').value;
    swal.fire({
        title: 'Contact',
        html: `
            <select id="id_contact" class="swal2-input">
                    <option value="2">Customer service</option>
                    <option value="1">Webmaster</option>
            </select>
            <input id="name" placeholder="name" class="swal2-input">
            <input id="email" placeholder="email" class="swal2-input">
            <textarea id="message" class="form-control swal2-input" name="message" placeholder="How can we help?" rows="3" cols="3"></textarea>`,
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
                    text: 'Enter your input',
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
                                text: 'Send contact success',
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                            })
                        }

                    }
                });
            }



        }
    })
}