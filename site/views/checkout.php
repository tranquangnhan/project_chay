<link rel="stylesheet" href="views/assets/css/checkout.css">
<link rel="stylesheet" href="views/assets/css/stripe.css">
<img src="https://www.paypalobjects.com/webstatic/i/logo/rebrand/ppcom-white.svg" width="25%;"
   style="opacity: 0.05;">
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src="https://js.stripe.com/v3/"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
<script>
$(document).ready(function() {
	
 
$('.method').on('click', function() {
    $('.method').removeClass('blue-border');
    $(this).addClass('blue-border');
  });

  // Validation
  var $cardInput = $('.input-fields input');

  $('#customer-form').on('submit', function(e) {
	
	var fname = $("#firstname").val();
   var lname = $("#lastname").val();
   var phone = $("#phone").val();
   var email = $("#email").val();
   // var address = $("#address").val();
   var street = $("#street").val();
   var housenumber = $("#housenumber").val();
   var city = $("#city").val();
   var country = $("#country").val();
   var postcode = $("#postcode").val();
   var note = $("#note").val();
	
	$.ajax({
		type: "POST",
		url: "<?php echo ROOT_URL;?>/saveorder",
		data: {fname: fname,lname:lname, phone:phone,email,email,street: street,housenumber: housenumber,city: city,country: country,postcode:postcode,note: note},
		dataType: "json",
		cache: false,
		success: function(data)
		{
			if(data.status != "200")
			{
            console.log(data);
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: data.message,
				  footer: '<a href>More about this error?</a>'
				})
			}
			else
			{
				$("#checkout-personal-information-step").fadeOut(100);
				$("#select-payment-panel").fadeIn(100);
				//window.location= ("<?php echo XC_URL;?>/");                
			}
		}
	});
	
    
	return false;
  });
  $('.method').on('click', function(e) {

    var tab = $(this).attr("data-tab");
	if(tab == "klarna")
	{
		$.ajax({
			type: "POST",
			url: "<?php echo ROOT_URL;?>/createklarnaqr",
			data: {},
			dataType: "json",
			cache: false,
			success: function(data)
			{
				console.log(data);
				if(data.status != "200")
				{
					alert(data.message);
				}
				else
				{
					$("#klarnaid").attr("src",data.qr);
					$("#klarnaurl").attr("href",data.url);
				}
			}
		  })
	}
	$(".tab-payment").fadeOut(100);
	$("#"+tab).fadeIn(100);
	
  });
  $('#btn-cod').on('click', function(e) {

    $.ajax({
		type: "POST",
		url: "<?php echo ROOT_URL;?>/paymentchecking",
		data: {method: "cod", id: ""},
		dataType: "json",
		cache: false,
		success: function(data)
		{
			console.log(data);
			if(data.status != "200")
			{
				alert("Thanh toán không thành công!");
			}
			else
			{
				window.location= ("<?php echo ROOT_URL;?>/cam-on");                
			}
		}
	  })
	
  });

});
</script>
<aside id="notifications">
   <div class="container">
   </div>
</aside>
<section id="wrapper">
   <nav data-depth="1" class="breadcrumb hidden-sm-down">
      <div class="container">
         <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
               <a itemprop="item" href="#">
               <span itemprop="name">Home</span>
               </a>
               <meta itemprop="position" content="1">
            </li>
         </ol>
      </div>
   </nav>
   <div class="container">
      <section id="content">
         <div class="row">
            <div class="cart-grid-body col-xs-12 col-lg-8">
               <section id="checkout-personal-information-step"
                  class="checkout-step -current -reachable js-current-step">
                  <h1 class="step-title h3">
                     <i class="material-icons rtl-no-flip done">&#xE876;</i>
                     <span class="step-number">1</span>
                     <?=$lang['person']?>
                     <!-- <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> Edit</span> -->
                  </h1>
                  <div class="content">
                     <div class="tab-content">
                        <div class="tab-pane active" id="checkout-guest-form" role="tabpanel">
                           <form action=""
                              id="customer-form" name="customer-form" class="js-customer-form" method="post">
                              <section>
                                 <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                    <?=$lang['fullname']?>
                                    </label>
                                    <div class="col-md-3">
                                          <input class="form-control" name="firstname" id="firstname" type="text" value="" placeholder="First name" required>
                                       
                                    </div>
                                    <div class="col-md-3">
                                          
                                       <input class="form-control" name="lastname" id="lastname" type="text" value="" placeholder="Last name" required>
                                    </div>
                                    <div class="col-md-3 form-control-comment">
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                    <?=$lang['phone']?>
                                    </label>
                                    <div class="col-md-6">
                                       <input class="form-control" name="phone" id="phone" type="number" value="" placeholder="Phone"
                                          required>
                                    </div>
                                    <div class="col-md-3 form-control-comment">
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                    <?=$lang['email']?>
                                    </label>
                                    <div class="col-md-6">
                                       <input class="form-control" name="email" id="email" type="email" value="" placeholder="Email address"
                                          required>
                                    </div>
                                    <div class="col-md-3 form-control-comment">
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                    <?=$lang['address']?>
                                    </label>
                                    <div class="col-md-3">
                                       <input class="form-control" name="address1" id="street" type="text" value="" required placeholder="Street">
                                    </div>
                                    
                                    <div class="col-md-3">
                                       <input class="form-control" name="address2" id="housenumber" type="text" value="" required placeholder="House number">
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                    </label>
                                    <div class="col-md-3">
                                       <input class="form-control" name="address3" id="city" type="text" value="" required placeholder="City">
                                    </div>
                                    
                                    <div class="col-md-3">
                                       <input class="form-control" name="address4" id="country" type="text" value="" required placeholder="Country">
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                    <?=$lang['postcode']?>
                                    </label>
                                    <div class="col-md-6">
                                       <input class="form-control" name="postcode" id="postcode" type="text" value="" placeholder="Postcode"
                                          required>
                                    </div>
                                    <div class="col-md-3 form-control-comment">
                                    </div>
                                 </div>
                                 
                                 <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                    <?=$lang['note']?>
                                    </label>
                                    <div class="col-md-6">
                                       <textarea class="textarea" name="note" id="note" cols="55" rows="10"></textarea>
                                    </div>
                                    <div class="col-md-3 form-control-comment">
                                    </div>
                                 </div>
                              </section>
                              <footer class="form-footer clearfix">
                                 <input type="hidden" name="submitCreate" value="1">
                                 <button style="" class="continue btn btn-primary float-xs-right" name="continue"
                                    data-link-action="register-new-customer" id="btn-next" type="submit" value="1" >
                                 <?=$lang['continue']?>
                                 </button>
                              </footer>
                           </form>
                        </div>
                     </div>
                  </div>
               </section>
			   
               <section id="select-payment-panel" style="display: none;">
				<div class="checkout-panel">
  <div class="panel-body">
    <h2 class="title">Select Payment</h2>
 
    
    <div class="payment-method">
		<label for="cod" class="method cod" data-tab="cod">
        <img src="views/assets/img/cod.png"/>
      </label>
	  <label for="paypal" class="method paypal" data-tab="paypal">
        <img src="https://designmodo.com/demo/checkout-panel/img/paypal_logo.png"/>
      </label>
      <label for="card" class="method card" data-tab="stripe">
        <img src="https://europeansting.files.wordpress.com/2016/02/stripe-logo.png"/>
      </label>
	<label for="klarna" class="method klarna" data-tab="klarna">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Klarna_Logo_black.svg/1280px-Klarna_Logo_black.svg.png"/>
      </label>
 
      
    </div>
 
    <div class="">
		<div id="cod" class="tab-payment" style="display: none">
			<button style="" class="continue btn btn-info" id="btn-cod" type="button" value="1" >
			 Place Order
			 </button>
		</div>
		<div id="paypal" class="tab-payment" style="display: none;">
			<div id="paypal-button" style="margin-top: 20px;"></div>
		</div>
		<div id="klarna" class="tab-payment" style="display: none;">
			<div id="klarna-payments-container" style="text-align: center;"><img style="width: 25%" src="" id="klarnaid"><br>Scan for Pay with Klarna or <a href="" id="klarnaurl">Click Here to Open Payment Popup</a></div>
		</div>
		<div id="stripe" class="tab-payment" style="display: none;">
			<form id="payment-form">
      <div id="card-element"><!--Stripe.js injects the Card Element--></div>
      <button id="submit">
        <div class="spinner hidden" id="spinner"></div>
        <span id="button-text">Pay now</span>
      </button>
      <p id="card-error" role="alert"></p>
      <p class="result-message hidden">
        Payment succeeded, see the result in your
        <a href="" target="_blank">Stripe dashboard.</a> Refresh the page to pay again.
      </p>
    </form>
		</div>
      
    </div>
  </div>
 
  
</div>
               </section>
			   
            </div>
			
            <div class="cart-grid-right col-xs-12 col-lg-4">
               <section id="js-checkout-summary" class="card js-cart"
                  data-refresh-url="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/cart?ajax=1&action=refresh">
                  <div class="card-block">
                     <div class="cart-summary-products">
                        <p><?=count($_SESSION['cart'])?> <?=$lang['item']?></p>
                        <p>
                           <a href="#" data-toggle="collapse" data-target="#cart-summary-product-list">
                           <?=$lang['showdetail']?>
                           <i class="material-icons">expand_more</i>
                           </a>
                        </p>
                        <div class="collapse" id="cart-summary-product-list">
                           <ul class="media-list">
                              <?php 
                                 if(isset($_SESSION['cart']) &&($_SESSION['cart'])){
                                 $tatcasp = $_SESSION['cart'];
                                 $sltotal = 0; 
                                 $tongtien = 0;
                                 $kq ='';
                                     
                                 $i = 0;
                                 foreach ($tatcasp as $motsp) {
                                     $i++;
                                     $img = PATH_IMG_SITE.$motsp[6];
                                 
                                     $sltotal += $motsp[1];
                                     $tongtien += $motsp[5]*$motsp[1];
                                     $name = $motsp[4];
                                     $id = $motsp[0];
                                     $slmotsp = $motsp[1];
                                     $size = $motsp[2];
                                     $mau = $motsp[3];
                                     if ($_SESSION['lang'] === 'en') {
                                       $gia ="$".$motsp[5];
                                       $do = "$";
                                        $euro ="";
                                   }else{
                                       $gia = $motsp[5]."€";
                                       $do = "";
                                       $euro = "€";
                                   }
                                     if($size != 'null'){
                                         $size = '  <span class="label">Size: '.$size .'</span>';
                                     }else{
                                         $size ='';
                                     }
                                     if($mau != 'null'){
                                         $mau = ' <span class="color" id="color" style="background-color:'.$mau.'"><span class="sr-only">'.$mau.'</span></span>';
                                     }else{
                                         $mau ='';
                                     }
                                     $kq .= ' <li class="media">
                                     <div class="media-left imgcart">
                                         <a href="#"
                                             title="Pack Mug + Esse Cillum Dolore">
                                             <img class="media-object" width="70" height="100"
                                                 src="'.$img.'"
                                                 alt="Pack Mug + Esse Cillum Dolore">
                                         </a>
                                     </div>
                                     <div class="media-body">
                                         <span class="product-name">'.$name.'</span>
                                         <span class="product-quantity">x'.$slmotsp.'</span>
                                         <span class="product-price float-xs-right">'.$gia.'</span>
                                         '. $size .'
                                         '. $mau .'
                                         <br />
                                 
                                     </div>
                                 
                                 </li>';
                                 $tongtien =$do.''.$tongtien.''.$euro;
                                 }
                                 $kq .= '';
                                 echo $kq;
                                 
                                 }else{
                                 $kq = '  <div id="_desktop_cart">
                                             <div class="shopping-cart">
                                                 <div class="blockcart cart-preview inactive"
                                                     data-refresh-url="//infinitytemplate.com/Prestashop/PRS01/PRS012/en/module/ps_shoppingcart/ajax">
                                                     <div class="header">
                                                         <div class="cart-link">
                                                             <a rel="nofollow">
                                                                 <i class="material-icons shopping-cart">shopping_cart</i>
                                                                 <span class="hidden-sm-down">Cart</span>
                                                                 <span class="cart-products-count">0</span>
                                                             </a>
                                                         </div>
                                                         <div class="dropdown-menu dropdown-menu-right">
                                 
                                                             <li class="cart-det2"
                                                                 data-refresh-url="//infinitytemplate.com/Prestashop/PRS01/PRS012/en/cart?ajax=1&action=refresh">
                                                                 <span class="no-items">Your cart is empty!</span>
                                                         </div>
                                                     </div>
                                 
                                                 </div>
                                             </div>
                                         </div>';
                                     echo $kq;
                                 }
                                 ?>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <hr class="separator">
                  <div class="card-block ">
                     <div class="cart-summary-line cart-total">
                        <span class="label"><?=$lang['total']?> </span>
                        <span class="value"><?=$tongtien?></span>
                     </div>
                  </div>
                  <hr class="separator">
                  
                  <br>
                  <hr class="separator">
               </section>
               <div id="block-reassurance">
                  <ul>
                     <li>
                        <div class="block-reassurance-item">
                           <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png"
                              alt="Security policy (edit with Customer reassurance module)">
                           <span class="h6"><?=$lang['security']?></span>
                        </div>
                     </li>
                     <li>
                        <div class="block-reassurance-item">
                           <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/blockreassurance/img/ic_local_shipping_black_36dp_1x.png"
                              alt="Delivery policy (edit with Customer reassurance module)">
                           <span class="h6"><?=$lang['delivery']?></span>
                        </div>
                     </li>
                     <li>
                        <div class="block-reassurance-item">
                           <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png"
                              alt="Return policy (edit with Customer reassurance module)">
                           <span class="h6"><?=$lang['return']?></span>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
   </div>
   <script>
      paypal.Button.render({
          env: 'sandbox', // 'sandbox' or 'production'
          style: {
              label: 'paypal',
              size:  'responsive',    // small | medium | large | responsive
              shape: 'rect',     // pill | rect
              color: 'blue',     // gold | blue | silver | black
              tagline: false
          },
          client: {
              sandbox:    'AbCu3fG9p3fMVFvNu2cfWfz---znFAPVL0JM0XIn8vk-krzZvEHm62FIo7OL_bSWrqXQ0lEMeTjaDKCW',
              production: 'AbCu3fG9p3fMVFvNu2cfWfz---znFAPVL0JM0XIn8vk-krzZvEHm62FIo7OL_bSWrqXQ0lEMeTjaDKCW'
          },
      
          commit: true, // Show a 'Pay Now' button
      
          payment: function(data, actions) {
              return actions.payment.create({
                  payment: {
                      transactions: [
                          {
                              amount: { total: '<?=$tongtien?>', currency: 'EUR' }
                          }
                      ]
                  }
              });
          },
      
          onAuthorize: function(data, actions) {
              // executes the payment
              return actions.payment.execute().then(function() {
                  // make an ajax call for saving the payment info
				  var fname = $("#firstname").val();
              var lname = $("#lastname").val();
				  var phone = $("#phone").val();
				  var email = $("#email").val();
				  var address = $("#address").val();
				  var note = $("#note").val();
				  console.log(data);
				  
                  $.ajax({
					type: "POST",
					url: "<?php echo ROOT_URL;?>/paymentchecking",
					data: {method: "paypal", fname: fname,lname:lname, phone: phone, email: email, address: address, note: note, paymentID: data.paymentID, payerID: data.payerID, token: data.paymentToken},
					dataType: "json",
					cache: false,
					success: function(data)
					{
						console.log(data);
						if(data.status != "200")
						{
							alert("Thanh toán không thành công!");
						}
						else
						{
							window.location= ("<?php echo ROOT_URL;?>/cam-on");                
							//alert('OK');
						}
					}
                  }).done(function () {
                      //window.location = '';
                  });
				  
              });
          }
      
      }, '#paypal-button');
   </script>
   <script>
// A reference to Stripe.js initialized with a fake API key.
// Sign in to see examples pre-filled with your key.
var stripe = Stripe("pk_test_51Ila2jLKgBvDvyCUiqMdG8nou2Ai9VyQQg6CjUHRNBvVMOdiNelHRXuebkj0hixJTY99WBbbyyb4vWfwRZ2Sdqtv00eMi8FXsV");

// The items the customer wants to buy
var purchase = {
	method: "stripe",
  items: [{}]
};

// Disable the button until we have Stripe set up on the page
document.querySelector("button").disabled = true;
fetch("../stripecheckout", {
  method: "POST",
  headers: {
    "Content-Type": "application/json"
  },
  body: JSON.stringify(purchase)
})
  .then(function(result) {
    return result.json();
  })
  .then(function(data) {
    var elements = stripe.elements();

    var style = {
      base: {
        color: "#32325d",
        fontFamily: 'Arial, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
        "::placeholder": {
          color: "#32325d"
        }
      },
      invalid: {
        fontFamily: 'Arial, sans-serif',
        color: "#fa755a",
        iconColor: "#fa755a"
      }
    };

    var card = elements.create("card", { style: style });
    // Stripe injects an iframe into the DOM
    card.mount("#card-element");

    card.on("change", function (event) {
      // Disable the Pay button if there are no card details in the Element
      document.querySelector("button").disabled = event.empty;
      document.querySelector("#card-error").textContent = event.error ? event.error.message : "";
    });

    var form = document.getElementById("payment-form");
    form.addEventListener("submit", function(event) {
      event.preventDefault();
      // Complete payment when the submit button is clicked
      payWithCard(stripe, card, data.clientSecret);
    });
  });

// Calls stripe.confirmCardPayment
// If the card requires authentication Stripe shows a pop-up modal to
// prompt the user to enter authentication details without leaving your page.
var payWithCard = function(stripe, card, clientSecret) {
  loading(true);
  stripe
    .confirmCardPayment(clientSecret, {
      payment_method: {
        card: card
      }
    })
    .then(function(result) {
      if (result.error) {
        // Show error to your customer
        showError(result.error.message);
      } else {
        // The payment succeeded!
		$.ajax({
			type: "POST",
			url: "<?php echo ROOT_URL;?>/paymentchecking",
			data: {method: "stripe", id: result.paymentIntent.id},
			dataType: "json",
			cache: false,
			success: function(data)
			{
				console.log(data);
				if(data.status != "200")
				{
					alert("Thanh toán không thành công!");
				}
				else
				{
					window.location= ("<?php echo ROOT_URL;?>/cam-on");                
					//alert('OK');
				}
			}
		  })
        //orderComplete(result.paymentIntent.id);
      }
    });
};

/* ------- UI helpers ------- */

// Shows a success message when the payment is complete
var orderComplete = function(paymentIntentId) {
  loading(false);
  document
    .querySelector(".result-message a")
    .setAttribute(
      "href",
      "https://dashboard.stripe.com/test/payments/" + paymentIntentId
    );
  document.querySelector(".result-message").classList.remove("hidden");
  document.querySelector("button").disabled = true;
};

// Show the customer the error from Stripe if their card fails to charge
var showError = function(errorMsgText) {
  loading(false);
  var errorMsg = document.querySelector("#card-error");
  errorMsg.textContent = errorMsgText;
  setTimeout(function() {
    errorMsg.textContent = "";
  }, 4000);
};

// Show a spinner on payment submission
var loading = function(isLoading) {
  if (isLoading) {
    // Disable the button and show a spinner
    document.querySelector("button").disabled = true;
    document.querySelector("#spinner").classList.remove("hidden");
    document.querySelector("#button-text").classList.add("hidden");
  } else {
    document.querySelector("button").disabled = false;
    document.querySelector("#spinner").classList.add("hidden");
    document.querySelector("#button-text").classList.remove("hidden");
  }
};

</script>
</section>