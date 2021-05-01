window.onload = () => {


}

function cart() {
    if ($(".dropdown-menu-right").hasClass('cartdislay') == false) {
        $(".dropdown-menu-right")[0].classList.add('cartdislay');
        $("span.cart-products-count")[0].classList.add('cartcount');
    } else {
        $(".dropdown-menu-right")[0].classList.remove('cartdislay');
        $("span.cart-products-count")[0].classList.remove('cartcount');
    }

}


// show giỏ hàng

$.post("controllers/ajax/addcart.php",
    function(data) {
        $('#_desktop_cart').html(data);
        $('#_mobile_cart').html(data);
    }
);

function addCart(id, lang) {

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
    if (lang === 'en') {
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
            $.post("controllers/ajax/addcart.php", { id: id, sl: sl, size: size, mausac: mausac, lang: lang },
                function(data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Oops...',
                        text: 'Add to cart successfully',
                    })
                    $('#_desktop_cart').html(data);
                    $('#_mobile_cart').html(data);
                    cart()
                }
            );
        }
        return true;
    } else {
        if ($("#group_1").length > 0 && !$("#group_1").val()) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Bitte wählen Sie eine Größe',
            })

            return false;
        }
        if ($(".input-color").length > 0 && !$(".input-color:checked").val()) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Bitte wählen Sie eine Farbe',
            })

            return false;
        } else {

            $.post("controllers/ajax/addcart.php", { id: id, sl: sl, size: size, mausac: mausac, lang: lang },
                function(data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Oops...',
                        text: 'Erfolgreich in den Warenkorb legen',
                    })

                    $('#_desktop_cart').html(data);
                    $('#_mobile_cart').html(data);
                    cart()
                }
            );
        }
        return true;
    }



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

function contact(e) {
    var idsp = document.getElementById('sp').value;
    let bodyhtml = ''
    if (e === 'en') {
        bodyhtml = `<select id="id_contact" class="swal2-input">
<option value="2">Customer service</option>
<option value="1">Webmaster</option>
</select>
<input id="name" placeholder="name" class="swal2-input">
<input id="email" placeholder="email" class="swal2-input">
<textarea id="message" class="form-control swal2-input" name="message" placeholder="How can we help?" rows="3" cols="3"></textarea>`
    } else {
        bodyhtml = `<select id="id_contact" class="swal2-input">
        <option value="2">Kundendienst</option>
        <option value="1">Webmaster</option>
</select>
<input id="name" placeholder="Vollständiger Name" class="swal2-input">
<input id="email" placeholder="E-Mail-Addresse" class="swal2-input">
<textarea id="message" class="form-control swal2-input" name="message" placeholder="Botschaft" rows="3" cols="3"></textarea>`
    }
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
                if (e == 'en') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Enter your input',
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Geben Sie Ihre Eingabe ein',
                    })
                }
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
                            if (e == 'en') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'success...',
                                    text: 'Send contact success',
                                })
                            } else {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Oops...',
                                    text: 'Erfolgreich in den Warenkorb legen',
                                })
                            }

                        } else {
                            if (e == 'en') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'success...',
                                    text: 'Send contact success',
                                })
                            } else {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Oops...',
                                    text: 'Erfolgreich in den Warenkorb legen',
                                })
                            }
                        }

                    }
                });
            }



        }
    })
}