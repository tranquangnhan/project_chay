<?php 
    require_once "../../../system/config.php";
    require_once "../../../system/database.php";
    require_once "../../models/home.php";
    $model = new Model_home();

    $canhbao= '';
    if(isset($_POST['id'])&&($_POST['id']>0)&&
    isset($_POST['sl'])&&($_POST['sl'])>0&&
    isset($_POST['size'])&&($_POST['size'] !== '')&&
    isset($_POST['mausac'])&&($_POST['mausac'] !== '')
    ){

            $id= $_POST['id'];
            $sl = $_POST['sl'];
            $size = $_POST['size'];
            $mausac = $_POST['mausac'];
            $sp = $model->getProById($id);
        
            $name = $sp['name'];
            $gia =($sp['price'] - ($sp['discount']*$sp['price'])/100);
            $img = explode(",",$sp['image_list'])[0];
            $cart = array ();
            if ($sl > 0) {
                if (! isset ( $_SESSION ['cart'] )) {
                    $cart [] = array ($id, $sl, $size,$mausac,$name,$gia,$img); //lần đầu mua hàng
                } else { //lần thứ 2 mua hàng
                    $cart = $_SESSION ['cart']; 
                    $glad = 0; //cờ 
                    for($i = 0; $i < count ( $cart ); $i ++) {
                        $product = $cart [$i]; // gán giỏ hàng bằng product
                        if ($product [0] == $id&&($product [2] == $size)&&($product [3] == $mausac)) { //kiểm tra id    
                            $product [1] = $product [1] + $sl; //nếu đúng thì tăng sl
                            $cart [$i] = $product; //gán lại cho nó
                            $glad = 1; //cờ bằng 0
                            break;
                        }
                    }
                    if ($glad == 0) {
                        $cart [] = array ($id, $sl, $size,$mausac,$name,$gia,$img);
                    }
                }
                $_SESSION ['cart'] = $cart;
        }
    }
    // xoá cart
    if(isset($_POST['iddel'])){
        $iddel = $_POST['iddel'];   
        array_splice($_SESSION['cart'],$iddel,1);
    };
    

    // show cart
    showSp();
    function showSp(){
        global $canhbao,$pathimg;
       
            if(isset($_SESSION['cart']) &&($_SESSION['cart'])){
                $tatcasp = $_SESSION['cart'];
                $sltotal = 0; 
                $tongtien = 0;
                $kq ='<div id="_desktop_cart">
                        <div class="shopping-cart">
                            <div class="blockcart cart-preview active">
                                <div class="header">
                                    <div class="cart-link">
                                        <a rel="nofollow">
                                            <i class="material-icons shopping-cart">shopping_cart</i>
                                            <span class="hidden-sm-down">Cart</span>
                                            <span class="cart-products-count">12</span>
                                        </a>
                                    </div>
                                    <!---dropdown-->
                                    <div class="dropdown-menu dropdown-menu-right">

                                        <div class="product-container">';
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
                        $mau = '  <span class="label">Color: '.$mau.'</span>';
                    }else{
                        $mau ='';
                    }
                    $kq .= '  <div class="product">
                    <!--  image-->
                    <div class="cart-img">
                        <img class="img-responsive" width="80"
                            src="'.$img.'"
                            alt="Duis Aute Irure begins">
                    </div>

                    <div class="product-details">
                        <!--  name -->
                        <div class="product-name">
                            <!--  qty -->
                            <span>'.$slmotsp.' x </span>
                            <!-- End qty -->
                            <a class="label name-cart2"
                                href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/home-accessories/7-mug-the-adventure-begins.html"
                                data-id_customization="0">'. $name.'
                            </a>
                        </div>
                        <!-- price -->
                        <div class="product-price"> <span>'.$gia.' €</span>
                        </div>

                        <ul class="product-atributes">
                            <li class="atributes">
                                '.$size.'
                                '.$mau.'
                            </li>
                        </ul>

                    </div>

                    <span class="remove-link">
                        <a class="remove-from-cart" rel="nofollow" 
                            data-link-action="delete-from-cart" data-id-product="7"
                            data-id-product-attribute="0" data-id-customization="">
                            <i class="material-icons pull-xs-left" onclick="delCart('.($i-1).')">delete</i>
                        </a>
                    </span>
                </div>';
                }
                $kq .= '</div>
                            <div class="cart-info col-xs-12" border="1">
                                <div class="row">
                                    
                                    <div class="Total col-xs-12 clearfix">
                                        <span class="label  text-xs-left">Total:</span>
                                        <span class="value   text-xs-right">'.$tongtien.'€</span>
                                    </div>

                                </div>
                            </div>
                            <!-- checkout -->
                            <div class="cart-btn col-xs-12">
                                <div class="row">
                                    <a href="//infinitytemplate.com/Prestashop/PRS01/PRS012/en/cart?action=show"
                                        class="btn btn-primary">CheckOut</a>

                                </div>
                                <!--dropdown-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>';
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
    }

   
?>

