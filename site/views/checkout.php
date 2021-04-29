<img src="https://www.paypalobjects.com/webstatic/i/logo/rebrand/ppcom-white.svg" width="25%;"
   style="opacity: 0.05;">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
   !function(a){"use strict";a("html, body");var e=a(".pwdMask > .form-control"),t=a(".pwd-toggle");a(".lnk-toggler").on("click",function(t){t.preventDefault();var e=a(this).data("panel");a(".authfy-panel.active").removeClass("active"),a(e).addClass("active")}),a(t).on("click",function(t){t.preventDefault(),a(this).toggleClass("fa-eye-slash fa-eye"),a(this).hasClass("fa-eye")?a(e).attr("type","text"):a(e).attr("type","password")}),a("#forget-lnk").on("click",function(){a(".authfy-login .nav-tabs").find("li").removeClass("active")}),a(window).on("load",function(){a(".square-block").fadeOut(),a("#preload-block").fadeOut("slow",function(){a(this).remove()})})}(jQuery);
         $(document).ready(function(){
   		  $(".lnk-toggler-signup").on("click", function()
   		  {
   			  $(".panel-login").removeClass("active");
   			  $(".panel-forgot").removeClass("active");
   			  $(".panel-signup").addClass("active");
   			  return false;
   		  });
   		  $(".lnk-toggler-login").on("click", function()
   		  {
   			  $(".panel-signup").removeClass("active");
   			  $(".panel-forgot").removeClass("active");
   			  $(".panel-login").addClass("active");
   			  return false;
   		  });
   		  $(".lnk-toggler-foget").on("click", function()
   		  {
   			  $(".panel-signup").removeClass("active");
   			  $(".panel-login").removeClass("active");
   			  $(".panel-forgot").addClass("active");
   			  return false;
   		  });
   			$("#btn-login").on("click",function()
   			{
   				if($("#login_email").val().length <=3)
   				{
   					Swal.fire({
   					  icon: 'error',
   					  title: 'Oops...',
   					  text: 'Tài khoản không hợp lệ, vui lòng nhập lại.',
   					  footer: '<a href>Xem thêm về lỗi này?</a>'
   					})
   					$("#login_email").focus();
   				}
   				else				
   				{
   					var email = $("#login_email").val();
   					var pass = $("#login_password").val();
   					$.ajax({
   						type: "POST",
   						url: "<?php echo XC_URL;?>/api/login",
   						data: {email: email, password: pass},
   						dataType: "json",
   						cache: false,
   						success: function(data)
   						{
   							if(data.status != "200")
   							{
   								Swal.fire({
   								  icon: 'error',
   								  title: 'Oops...',
   								  text: 'Tài khoản hoặc mật khẩu không đúng, vui lòng kiểm tra lại...',
   								  footer: '<a href>Xem thêm về lỗi này?</a>'
   								})
   							}
   							else
   							{
   								window.location= ("<?php echo XC_URL;?>/");                
   							}
   						}
   					});
   				}
   				return false;
   			});
   			$("#btn-signup").on("click",function()
   			{
   				if($("#signup_email").val().length <=3)
   				{
   					Swal.fire({
   					  icon: 'error',
   					  title: 'Oops...',
   					  text: 'Email không hợp lệ, vui lòng nhập lại.',
   					  footer: '<a href>Xem thêm về lỗi này?</a>'
   					})
   					$("#signup_email").focus();
   				}
   				else				
   				{
   					var email = $("#signup_email").val();
   					var pass = $("#signup_password").val();
   					var name = $("#signup_name").val();
   					$.ajax({
   						type: "POST",
   						url: "<?php echo XC_URL;?>/api/register",
   						data: {email: email, password: pass,name: name},
   						dataType: "json",
   						cache: false,
   						success: function(data)
   						{
   							if(data.status != "200")
   							{
   								Swal.fire({
   								  icon: 'error',
   								  title: 'Oops...',
   								  text: data.message,
   								  footer: '<a href>Xem thêm về lỗi này?</a>'
   								})
   							}
   							else
   							{
   								Swal.fire({
   								  icon: 'success',
   								  title: 'Thành công',
   								  text: 'Cảm ơn bạn đã đăng ký, xin vui lòng đăng nhập!',
   								  timer: 2700
   								})
   								setTimeout(function(){ window.location= ("<?php echo XC_URL;?>/login");     }, 3000);           
   							}
   						}
   					});
   				}
   				return false;
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
                              id="customer-form" class="js-customer-form" method="post">
                              <section>
                                 <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                    <?=$lang['fullname']?>
                                    </label>
                                    <div class="col-md-6">
                                       <input class="form-control" name="name" id="name" type="text" value=" <?php if(isset($_SESSION['suser'])) echo $_SESSION['suser'];?>"
                                          required>
                                    </div>
                                    <div class="col-md-3 form-control-comment">
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                    <?=$lang['phone']?>
                                    </label>
                                    <div class="col-md-6">
                                       <input class="form-control" name="phone" id="phone" type="number" value=""
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
                                       <input class="form-control" name="email" id="email" type="email" value=""
                                          required>
                                    </div>
                                    <div class="col-md-3 form-control-comment">
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                    <?=$lang['address']?>
                                    </label>
                                    <div class="col-md-6">
                                       <input class="form-control" name="address" id="address" type="text" value=""
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
                                 <button class="continue btn btn-primary float-xs-right" name="continue"
                                    data-link-action="register-new-customer" type="submit" value="1" >
                                 <?=$lang['continue']?>
                                 </button>
                              </footer>
                           </form>
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
                                     $gia = $motsp[5];
                                     $slmotsp = $motsp[1];
                                     $size = $motsp[2];
                                     $mau = $motsp[3];
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
                                         <span class="product-price float-xs-right">'.$gia.'€</span>
                                         '. $size .'
                                         '. $mau .'
                                         <br />
                                 
                                     </div>
                                 
                                 </li>';
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
                        <span class="value"><?=$tongtien?>€</span>
                     </div>
                  </div>
                  <hr class="separator">
                  <div id="paypal-button" style="margin-top: 20px;"></div>
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
              size:  'medium',    // small | medium | large | responsive
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
				  var name = $("#name").val();
				  var phone = $("#phone").val();
				  var email = $("#email").val();
				  var address = $("#address").val();
				  var note = $("#note").val();
                  $.ajax({
					type: "POST",
					url: "<?php echo ROOT_URL;?>/paymentchecking",
					data: {method: "paypal", name: name, phone: phone, email: email, address: address, note: note, paymentID: data.paymentID, payerID: data.payerID, token: data.paymentToken},
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
                  }).done(function () {
                      //window.location = '';
                  });
              });
          }
      
      }, '#paypal-button');
   </script>
</section>