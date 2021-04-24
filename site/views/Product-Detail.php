<?php 
if(is_array($sp)){
  $avt = PATH_IMG_SITE.explode(",",$sp['image_list'])[0];
  
  ?>

<aside id="notifications">
    <div class="container">

    </div>
</aside>

<section id="wrapper">


    <div class="container">
        <div class="row">




            <div id="content-wrapper" class="col-xs-12">



                <section id="main" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="url"
                        content="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/art/5-71-today-is-a-good-day-framed-poster.html#/2-size-m/10-color-red">

                    <div class="row">
                        <div class="col-xs-12 col-md-5">

                            <section class="page-content" id="content">

                              

                                <ul class="product-flags">
                                    <li class="product-flag new">New</li>
                                </ul>



                                <div class="images-container">

                                    <div class="product-cover">


                                        <img id="zoom" class="js-qv-product-cover"
                                            src="<?=$avt?>"
                                            alt="" title="" style="width:100%;" itemprop="image">

                                        <div class="layer hidden-sm-down" data-toggle="modal"
                                            data-target="#product-modal">
                                            <i class="material-icons zoom-in">&#xE8FF;</i>
                                        </div>


                                    </div>



                                    <div class="js-qv-mask mask">

                                        <ul class="product-images js-qv-product-images">
                                            <?php
                                              $allImgSp = explode(",",$sp['image_list']);
                                              for ($i=0; $i < count($allImgSp); $i++) { 
                                                  $imgdetail[] = PATH_IMG_SITE.$allImgSp[$i];
                                                  if(is_file($imgdetail[$i])){
                                                      $imgdetail[$i] = $imgdetail[$i];
                                                  }else{
                                                      $imgdetail[$i] = '../view/images/logo.jpg';
                                                  }
                                                  echo '<li class="thumb-container">
                                                  <img class="thumb js-thumb  selected "
                                                      src="'.$imgdetail[$i].'"
                                                      alt="" title="" width="100" itemprop="image">
                                              </li>';
                                              }
                                          ?>
                                            
                                        </ul>
                                    </div>

                                </div>


                                <div class="scroll-box-arrows">
                                    <i class="material-icons left">&#xE314;</i>
                                    <i class="material-icons right">&#xE315;</i>
                                </div>


                            </section>

                        </div>
                        <div class="col-xs-12 col-md-7">


                            <h1 class="h1 kk-producttitle" itemprop="name"><?=$sp['name']?></h1>



                            <div class="product-prices">




                                <div class="product-price h5 " itemprop="offers" itemscope
                                    itemtype="https://schema.org/Offer">
                                    <link itemprop="availability" href="https://schema.org/InStock" />
                                    <meta itemprop="priceCurrency" content="USD">

                                    <div class="current-price">
                                        <span itemprop="price" content="32.89"><?=$sp['price']?>€</span>

                                    </div>



                                </div>

                                <div class="tax-shipping-delivery-label">


                                </div>
                            </div>


                            <div class="product-information">


                                <div class="product-actions">

            

                                        <div class="product-variants">
                                          <?php 
                                            if($sp['size']){
                                                $size = explode(',',$sp['size']);
                                                $kq .= ' <div class="clearfix product-variants-item">
                                            <span class="control-label">Size</span>
                                            <select class="form-control form-control-select" id="group_1"
                                                data-product-attribute="1" name="group[1]">';
                                              foreach ($size as $row) {
                                                $kq .= '<option value="'.$row.'" title="M" selected="selected">'.$row.'</option>';
                                              }
                                              $kq .='   </select> </div>';
                                              echo $kq;
                                            }
                                            
                                          ?>
                                          <!-- size -->
                                          <?php 
                                              if($sp['color']){
                                                  $color = explode(',',$sp['color']);
                                                  $kq1 .= '<div class="clearfix product-variants-item">
                                                  <span class="control-label">Color</span>
                                                  <ul id="group_2">';
                                                foreach ($color as $row) {
                                                  $kq1 .= ' <li class="float-xs-left input-container">
                                                              <label>
                                                                  <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="'.$row.'">
                                                                  <span class="color" id="color" style="background-color:'.$row.'"><span
                                                                          class="sr-only">'.$row.'</span></span>
                                                              </label>
                                                          </li>';
                                                }
                                                $kq1 .='   </ul>
                                                        </div>';
                                                echo $kq1;
                                              }
                                              // color
                                            ?>
                                         
                                        </div>
                                            




                                        <section class="product-discounts">
                                        </section>



                                        <div class="product-add-to-cart">
                                            <span class="control-label">Quantity</span>


                                            <div class="product-quantity clearfix">
                                                <div class="qty">
                                                    <input type="number" name="qty" id="quantity_wanted" value="1"
                                                        class="input-group" min="1" aria-label="Quantity">
                                                </div>

                                                <div class="add">
                                                    <button class="btn btn-primary add-to-cart"
                                                         onclick="return addCart(<?= $sp['id'] ?>)">
                                                       
                                                        Add to cart
                                                    </button>
                                                </div>


                                            </div>



                                            <span id="product-availability">
                                                <i class="material-icons rtl-no-flip product-available">&#xE5CA;</i>
                                                In-stock
                                            </span>



                                            <p class="product-minimal-quantity">
                                            </p>

                                        </div>



                                        <div class="product-additional-info">


                                            <div class="social-sharing">
                                                <span>Share</span>
                                                <ul>
                                                    <li class="facebook icon-gray"><a
                                                            href="http://www.facebook.com/sharer.php?u=https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/art/5-today-is-a-good-day-framed-poster.html"
                                                            class="text-hide" title="Share" target="_blank">Share</a>
                                                    </li>
                                                    <li class="twitter icon-gray"><a
                                                            href="https://twitter.com/intent/tweet?text=Aliquam Lorem Ante https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/art/5-today-is-a-good-day-framed-poster.html"
                                                            class="text-hide" title="Tweet" target="_blank">Tweet</a>
                                                    </li>
                                                    <li class="googleplus icon-gray"><a
                                                            href="https://plus.google.com/share?url=https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/art/5-today-is-a-good-day-framed-poster.html"
                                                            class="text-hide" title="Google+"
                                                            target="_blank">Google+</a></li>
                                                    <li class="pinterest icon-gray"><a
                                                            href="http://www.pinterest.com/pin/create/button/?media=https://infinitytemplate.com/Prestashop/PRS01/PRS012/94/today-is-a-good-day-framed-poster.jpg&amp;url=https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/art/5-today-is-a-good-day-framed-poster.html"
                                                            class="text-hide" title="Pinterest"
                                                            target="_blank">Pinterest</a></li>
                                                </ul>
                                            </div>


                                        </div>


                                </div>


                                <div id="block-reassurance">
                                    <ul>
                                        <li>
                                            <div class="block-reassurance-item">
                                                <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png"
                                                    alt="Security policy (edit with Customer reassurance module)">
                                                <span class="h6">Security policy (edit with Customer reassurance
                                                    module)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="block-reassurance-item">
                                                <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/blockreassurance/img/ic_local_shipping_black_36dp_1x.png"
                                                    alt="Delivery policy (edit with Customer reassurance module)">
                                                <span class="h6">Delivery policy (edit with Customer reassurance
                                                    module)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="block-reassurance-item">
                                                <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png"
                                                    alt="Return policy (edit with Customer reassurance module)">
                                                <span class="h6">Return policy (edit with Customer reassurance
                                                    module)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="product-tab">

                        <div class="tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#description" role="tab"
                                        aria-controls="description" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#product-details" role="tab"
                                        aria-controls="product-details">Product Details</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="tab-content">
                                <div class="tab-pane fade in active" id="description" role="tabpanel">

                                    <div class="product-description">
                                        <p>
                                            <?=$sp['description']?>
                                        </p>
                                    </div>

                                </div>


                                <div class="tab-pane fade" id="product-details"
                                    data-product=""
                                    role="tabpanel">
                                    <div class="product-description">
                                        <p>
                                            <?=$sp['properties']?>
                                        </p>
                                    </div>


                                </div>





                            </div>
                        </div>

                    </div>





                    <section class="container infinityspecial-products hb-animate-element bottom-to-top  clearfix">

                        <h3 class="kk-title">Special Products</h3>

                        <div class="kkspecial-list bottom-to-top hb-animate-element">
                            <div class="row">
                                <div id="infinityspecial-carousel" class="owl-carousel">


                                    <article class="product-miniature js-product-miniature " data-id-product="17"
                                        data-id-product-attribute="46" itemscope itemtype="http://schema.org/Product">
                                        <div class="thumbnail-container">
                                            <div class="product-inner">
                                                <div class="thumbnail-inner">
                                                    <div class="inner">

                                                        <div class="product-img">

                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-mountain-fox-notebook.html"
                                                                class="thumbnail product-thumbnail">

                                                                <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/35-home_default/mountain-fox-notebook.jpg"
                                                                    alt="Pellentesque augue"
                                                                    data-full-size-image-url="https://infinitytemplate.com/Prestashop/PRS01/PRS012/35-large_default/mountain-fox-notebook.jpg">
                                                                <img class="second_image img-responsive"
                                                                    src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/36-home_default/mountain-fox-notebook.jpg"
                                                                    alt="" title="" />
                                                            </a>






                                                        </div>
                                                      

                                                        <ul class="product-flags">
                                                            <li class="product-flag discount">-25%</li>
                                                            <li class="product-flag new">New</li>
                                                        </ul>

                                                    </div>

                                                    <div class="kkproducthover">
                                                        
                                                        <div class="quick-view-block">
                                                            <a href="#" class="quick-view btn"
                                                                data-link-action="quickview" title="Quick view">
                                                                <i class="material-icons search">&#xE8B6;</i>
                                                                <span>Quick view</span>
                                                            </a>
                                                        </div>


                                                    </div>
                                                </div>


                                                <div class="product-description">


                                                    <h1 class="h3 product-title" itemprop="name"><a
                                                            href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-mountain-fox-notebook.html">Pellentesque
                                                            augue</a></h1>



                                                    <div class="product-price-and-shipping">

                                                        <span class="sr-only">Regular price</span>
                                                        <span class="regular-price">$64.90</span>
                                                        <span class="discount-percentage discount-product">-25%</span>


                                                        <span class="sr-only">Price</span>
                                                        <span itemprop="price" class="price">$48.68</span>


                                                    </div>









                                                    <p class="product-desc" itemprop="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at
                                                        ante. Mauris eleifend, quam a vulputate dictum, massa quam
                                                        dapibus leo.
                                                    </p>



                                                    <div class="variant-links">
                                                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-46-mountain-fox-notebook.html#/3-size-l/15-color-green"
                                                            class="color" title="Green"
                                                            style="background-color: #A0D468"><span
                                                                class="sr-only">Green</span></a>
                                                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-47-mountain-fox-notebook.html#/3-size-l/16-color-yellow"
                                                            class="color" title="Yellow"
                                                            style="background-color: #F1C40F"><span
                                                                class="sr-only">Yellow</span></a>
                                                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-48-mountain-fox-notebook.html#/3-size-l/17-color-brown"
                                                            class="color" title="Brown"
                                                            style="background-color: #964B00"><span
                                                                class="sr-only">Brown</span></a>
                                                        <span class="js-count count"></span>
                                                    </div>


                                                    <div class="cart-block">
                                                        <div class="product-add-to-cart">
                                                            <form
                                                                action="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/cart"
                                                                method="post" class="add-to-cart-or-refresh">
                                                                <div class="product-quantity" style="display:none;">
                                                                    <input type="number" name="id_product" value="17"
                                                                        class="product_page_product_id">
                                                                    <input type="number" name="id_customization"
                                                                        value="0" class="product_customization_id">
                                                                    <input type="hidden" name="token"
                                                                        value="9407b95b9bb08d999434e20be614587e">
                                                                    <input type="number" name="qty"
                                                                        class="quantity_wanted input-group" value="1"
                                                                        min="1" />
                                                                </div>
                                                                <button
                                                                    class="button ajax_add_to_cart_button add-to-cart btn btn-default"
                                                                    data-button-action="add-to-cart"
                                                                    title="Add to cart">
                                                                    <span>Add to cart</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="highlighted-informations hidden-sm-down">

                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                        <i class="material-icons search">&#xE8B6;</i> Quick view
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </article>



                                    <article class="product-miniature js-product-miniature " data-id-product="1"
                                        data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
                                        <div class="thumbnail-container">
                                            <div class="product-inner">
                                                <div class="thumbnail-inner">
                                                    <div class="inner">

                                                        <div class="product-img">

                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/men/1-hummingbird-printed-t-shirt.html"
                                                                class="thumbnail product-thumbnail">

                                                                <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/119-home_default/hummingbird-printed-t-shirt.jpg"
                                                                    alt="Vivamus Elementum Semper"
                                                                    data-full-size-image-url="https://infinitytemplate.com/Prestashop/PRS01/PRS012/119-large_default/hummingbird-printed-t-shirt.jpg">
                                                                <img class="second_image img-responsive"
                                                                    src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/117-home_default/hummingbird-printed-t-shirt.jpg"
                                                                    alt="" title="" />
                                                            </a>






                                                        </div>
                                                        

                                                        <ul class="product-flags">
                                                            <li class="product-flag discount">-20%</li>
                                                            <li class="product-flag new">New</li>
                                                        </ul>

                                                    </div>

                                                    <div class="kkproducthover">
                                                     
                                                        <div class="quick-view-block">
                                                            <a href="#" class="quick-view btn"
                                                                data-link-action="quickview" title="Quick view">
                                                                <i class="material-icons search">&#xE8B6;</i>
                                                                <span>Quick view</span>
                                                            </a>
                                                        </div>


                                                    </div>
                                                </div>


                                                <div class="product-description">


                                                    <h1 class="h3 product-title" itemprop="name"><a
                                                            href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/men/1-hummingbird-printed-t-shirt.html">Vivamus
                                                            Elementum Semper</a></h1>



                                                    <div class="product-price-and-shipping">

                                                        <span class="sr-only">Regular price</span>
                                                        <span class="regular-price">$44.33</span>
                                                        <span class="discount-percentage discount-product">-20%</span>


                                                        <span class="sr-only">Price</span>
                                                        <span itemprop="price" class="price">$35.46</span>


                                                    </div>









                                                    <p class="product-desc" itemprop="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at
                                                        ante. Mauris eleifend, quam a vulputate dictum
                                                    </p>



                                                    <div class="variant-links">
                                                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/men/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white"
                                                            class="color" title="White"
                                                            style="background-color: #ffffff"><span
                                                                class="sr-only">White</span></a>
                                                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/men/1-2-hummingbird-printed-t-shirt.html#/1-size-s/11-color-black"
                                                            class="color" title="Black"
                                                            style="background-color: #434A54"><span
                                                                class="sr-only">Black</span></a>
                                                        <span class="js-count count"></span>
                                                    </div>


                                                    <div class="cart-block">
                                                        <div class="product-add-to-cart">
                                                            <form
                                                                action="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/cart"
                                                                method="post" class="add-to-cart-or-refresh">
                                                                <div class="product-quantity" style="display:none;">
                                                                    <input type="number" name="id_product" value="1"
                                                                        class="product_page_product_id">
                                                                    <input type="number" name="id_customization"
                                                                        value="0" class="product_customization_id">
                                                                    <input type="hidden" name="token"
                                                                        value="9407b95b9bb08d999434e20be614587e">
                                                                    <input type="number" name="qty"
                                                                        class="quantity_wanted input-group" value="1"
                                                                        min="1" />
                                                                </div>
                                                                <button
                                                                    class="button ajax_add_to_cart_button add-to-cart btn btn-default"
                                                                    data-button-action="add-to-cart"
                                                                    title="Add to cart">
                                                                    <span>Add to cart</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="highlighted-informations hidden-sm-down">

                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                        <i class="material-icons search">&#xE8B6;</i> Quick view
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </article>



                                    <article class="product-miniature js-product-miniature " data-id-product="2"
                                        data-id-product-attribute="9" itemscope itemtype="http://schema.org/Product">
                                        <div class="thumbnail-container">
                                            <div class="product-inner">
                                                <div class="thumbnail-inner">
                                                    <div class="inner">

                                                        <div class="product-img">

                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/home/2-brown-bear-printed-sweater.html"
                                                                class="thumbnail product-thumbnail">

                                                                <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/115-home_default/brown-bear-printed-sweater.jpg"
                                                                    alt="Lorem ipsum dolor sit amet"
                                                                    data-full-size-image-url="https://infinitytemplate.com/Prestashop/PRS01/PRS012/115-large_default/brown-bear-printed-sweater.jpg">
                                                                <img class="second_image img-responsive"
                                                                    src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/114-home_default/brown-bear-printed-sweater.jpg"
                                                                    alt="" title="" />
                                                            </a>






                                                        </div>
                                                       

                                                        <ul class="product-flags">
                                                            <li class="product-flag on-sale">On sale!</li>
                                                            <li class="product-flag discount">-20%</li>
                                                            <li class="product-flag new">New</li>
                                                        </ul>

                                                    </div>

                                                    <div class="kkproducthover">
                                                    

                                                        <div class="quick-view-block">
                                                            <a href="#" class="quick-view btn"
                                                                data-link-action="quickview" title="Quick view">
                                                                <i class="material-icons search">&#xE8B6;</i>
                                                                <span>Quick view</span>
                                                            </a>
                                                        </div>


                                                    </div>
                                                </div>


                                                <div class="product-description">


                                                    <h1 class="h3 product-title" itemprop="name"><a
                                                            href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/home/2-brown-bear-printed-sweater.html">Lorem
                                                            ipsum dolor sit...</a></h1>



                                                    <div class="product-price-and-shipping">

                                                        <span class="sr-only">Regular price</span>
                                                        <span class="regular-price">$44.33</span>
                                                        <span class="discount-percentage discount-product">-20%</span>


                                                        <span class="sr-only">Price</span>
                                                        <span itemprop="price" class="price">$35.46</span>


                                                    </div>









                                                    <p class="product-desc" itemprop="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at
                                                        ante. Mauris eleifend, quam a vulputate dictum
                                                    </p>



                                                    <div class="variant-links">
                                                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/home/2-64-brown-bear-printed-sweater.html#/8-color-white"
                                                            class="color" title="White"
                                                            style="background-color: #ffffff"><span
                                                                class="sr-only">White</span></a>
                                                        <span class="js-count count"></span>
                                                    </div>


                                                    <div class="cart-block">
                                                        <div class="product-add-to-cart">
                                                            <form
                                                                action="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/cart"
                                                                method="post" class="add-to-cart-or-refresh">
                                                                <div class="product-quantity" style="display:none;">
                                                                    <input type="number" name="id_product" value="2"
                                                                        class="product_page_product_id">
                                                                    <input type="number" name="id_customization"
                                                                        value="0" class="product_customization_id">
                                                                    <input type="hidden" name="token"
                                                                        value="9407b95b9bb08d999434e20be614587e">
                                                                    <input type="number" name="qty"
                                                                        class="quantity_wanted input-group" value="1"
                                                                        min="1" />
                                                                </div>
                                                                <button
                                                                    class="button ajax_add_to_cart_button add-to-cart btn btn-default"
                                                                    data-button-action="add-to-cart"
                                                                    title="Add to cart">
                                                                    <span>Add to cart</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="highlighted-informations hidden-sm-down">

                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                        <i class="material-icons search">&#xE8B6;</i> Quick view
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </article>



                                    <article class="product-miniature js-product-miniature " data-id-product="18"
                                        data-id-product-attribute="40" itemscope itemtype="http://schema.org/Product">
                                        <div class="thumbnail-container">
                                            <div class="product-inner">
                                                <div class="thumbnail-inner">
                                                    <div class="inner">

                                                        <div class="product-img">

                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/18-mountain-fox-notebook.html"
                                                                class="thumbnail product-thumbnail">

                                                                <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/30-home_default/mountain-fox-notebook.jpg"
                                                                    alt="Vestibulum ut nulla"
                                                                    data-full-size-image-url="https://infinitytemplate.com/Prestashop/PRS01/PRS012/30-large_default/mountain-fox-notebook.jpg">
                                                                <img class="second_image img-responsive"
                                                                    src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/31-home_default/mountain-fox-notebook.jpg"
                                                                    alt="" title="" />
                                                            </a>






                                                        </div>
                                                       

                                                        <ul class="product-flags">
                                                            <li class="product-flag discount">-15%</li>
                                                            <li class="product-flag new">New</li>
                                                        </ul>

                                                    </div>

                                                    <div class="kkproducthover">
                                                        

                                                        <div class="quick-view-block">
                                                            <a href="#" class="quick-view btn"
                                                                data-link-action="quickview" title="Quick view">
                                                                <i class="material-icons search">&#xE8B6;</i>
                                                                <span>Quick view</span>
                                                            </a>
                                                        </div>


                                                    </div>
                                                </div>


                                                <div class="product-description">


                                                    <h1 class="h3 product-title" itemprop="name"><a
                                                            href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/18-mountain-fox-notebook.html">Vestibulum
                                                            ut nulla</a></h1>



                                                    <div class="product-price-and-shipping">

                                                        <span class="sr-only">Regular price</span>
                                                        <span class="regular-price">$30.90</span>
                                                        <span class="discount-percentage discount-product">-15%</span>


                                                        <span class="sr-only">Price</span>
                                                        <span itemprop="price" class="price">$26.27</span>


                                                    </div>









                                                    <p class="product-desc" itemprop="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at
                                                        ante. Mauris eleifend, quam a vulputate dictum, massa quam
                                                        dapibus leo.
                                                    </p>



                                                    <div class="variant-links">
                                                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/18-40-mountain-fox-notebook.html#/1-size-s/12-color-camel"
                                                            class="color" title="Camel"
                                                            style="background-color: #C19A6B"><span
                                                                class="sr-only">Camel</span></a>
                                                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/18-41-mountain-fox-notebook.html#/1-size-s/13-color-orange"
                                                            class="color" title="Orange"
                                                            style="background-color: #F39C11"><span
                                                                class="sr-only">Orange</span></a>
                                                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/18-42-mountain-fox-notebook.html#/1-size-s/14-color-blue"
                                                            class="color" title="Blue"
                                                            style="background-color: #5D9CEC"><span
                                                                class="sr-only">Blue</span></a>
                                                        <span class="js-count count"></span>
                                                    </div>


                                                    <div class="cart-block">
                                                        <div class="product-add-to-cart">
                                                            <form
                                                                action="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/cart"
                                                                method="post" class="add-to-cart-or-refresh">
                                                                <div class="product-quantity" style="display:none;">
                                                                    <input type="number" name="id_product" value="18"
                                                                        class="product_page_product_id">
                                                                    <input type="number" name="id_customization"
                                                                        value="0" class="product_customization_id">
                                                                    <input type="hidden" name="token"
                                                                        value="9407b95b9bb08d999434e20be614587e">
                                                                    <input type="number" name="qty"
                                                                        class="quantity_wanted input-group" value="1"
                                                                        min="1" />
                                                                </div>
                                                                <button
                                                                    class="button ajax_add_to_cart_button add-to-cart btn btn-default"
                                                                    data-button-action="add-to-cart"
                                                                    title="Add to cart">
                                                                    <span>Add to cart</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="highlighted-informations hidden-sm-down">

                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                        <i class="material-icons search">&#xE8B6;</i> Quick view
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </article>



                                    <article class="product-miniature js-product-miniature " data-id-product="19"
                                        data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                        <div class="thumbnail-container">
                                            <div class="product-inner">
                                                <div class="thumbnail-inner">
                                                    <div class="inner">

                                                        <div class="product-img">

                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/home-accessories/19-customizable-mug.html"
                                                                class="thumbnail product-thumbnail">

                                                                <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/25-home_default/customizable-mug.jpg"
                                                                    alt="Neque Porro Suisquam"
                                                                    data-full-size-image-url="https://infinitytemplate.com/Prestashop/PRS01/PRS012/25-large_default/customizable-mug.jpg">
                                                                <img class="second_image img-responsive"
                                                                    src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/26-home_default/customizable-mug.jpg"
                                                                    alt="" title="" />
                                                            </a>






                                                        </div>
                                                       

                                                        <ul class="product-flags">
                                                            <li class="product-flag discount">-10%</li>
                                                            <li class="product-flag new">New</li>
                                                        </ul>

                                                    </div>

                                                    <div class="kkproducthover">
                                                       


                                                        <div class="quick-view-block">
                                                            <a href="#" class="quick-view btn"
                                                                data-link-action="quickview" title="Quick view">
                                                                <i class="material-icons search">&#xE8B6;</i>
                                                                <span>Quick view</span>
                                                            </a>
                                                        </div>


                                                    </div>
                                                </div>


                                                <div class="product-description">


                                                    <h1 class="h3 product-title" itemprop="name"><a
                                                            href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/home-accessories/19-customizable-mug.html">Neque
                                                            Porro Suisquam</a></h1>



                                                    <div class="product-price-and-shipping">

                                                        <span class="sr-only">Regular price</span>
                                                        <span class="regular-price">$15.55</span>
                                                        <span class="discount-percentage discount-product">-10%</span>


                                                        <span class="sr-only">Price</span>
                                                        <span itemprop="price" class="price">$14.00</span>


                                                    </div>









                                                    <p class="product-desc" itemprop="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at
                                                        ante. Mauris eleifend, quam a vulputate dictum, massa quam
                                                        dapibus leo.
                                                    </p>





                                                    <div class="cart-block">
                                                        <div class="product-add-to-cart">
                                                            <form
                                                                action="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/cart"
                                                                method="post" class="add-to-cart-or-refresh">
                                                                <div class="product-quantity" style="display:none;">
                                                                    <input type="number" name="id_product" value="19"
                                                                        class="product_page_product_id">
                                                                    <input type="number" name="id_customization"
                                                                        value="0" class="product_customization_id">
                                                                    <input type="hidden" name="token"
                                                                        value="9407b95b9bb08d999434e20be614587e">
                                                                    <input type="number" name="qty"
                                                                        class="quantity_wanted input-group" value="1"
                                                                        min="1" />
                                                                </div>
                                                                <button
                                                                    class="button ajax_add_to_cart_button add-to-cart btn btn-default"
                                                                    data-button-action="add-to-cart" title="Add to cart"
                                                                    disabled>
                                                                    <span>Add to cart</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="highlighted-informations no-variants hidden-sm-down">

                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                        <i class="material-icons search">&#xE8B6;</i> Quick view
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </article>



                                    <article class="product-miniature js-product-miniature " data-id-product="16"
                                        data-id-product-attribute="52" itemscope itemtype="http://schema.org/Product">
                                        <div class="thumbnail-container">
                                            <div class="product-inner">
                                                <div class="thumbnail-inner">
                                                    <div class="inner">

                                                        <div class="product-img">

                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/16-mountain-fox-notebook.html"
                                                                class="thumbnail product-thumbnail">

                                                                <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/40-home_default/mountain-fox-notebook.jpg"
                                                                    alt="Eled doming deserunt"
                                                                    data-full-size-image-url="https://infinitytemplate.com/Prestashop/PRS01/PRS012/40-large_default/mountain-fox-notebook.jpg">
                                                                <img class="second_image img-responsive"
                                                                    src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/41-home_default/mountain-fox-notebook.jpg"
                                                                    alt="" title="" />
                                                            </a>






                                                        </div>
                                                        

                                                        <ul class="product-flags">
                                                            <li class="product-flag discount">-28%</li>
                                                            <li class="product-flag new">New</li>
                                                        </ul>

                                                    </div>

                                                    <div class="kkproducthover">
           


                                                        <div class="quick-view-block">
                                                            <a href="#" class="quick-view btn"
                                                                data-link-action="quickview" title="Quick view">
                                                                <i class="material-icons search">&#xE8B6;</i>
                                                                <span>Quick view</span>
                                                            </a>
                                                        </div>


                                                    </div>
                                                </div>


                                                <div class="product-description">


                                                    <h1 class="h3 product-title" itemprop="name"><a
                                                            href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/16-mountain-fox-notebook.html">Eled
                                                            doming deserunt</a></h1>



                                                    <div class="product-price-and-shipping">

                                                        <span class="sr-only">Regular price</span>
                                                        <span class="regular-price">$15.99</span>
                                                        <span class="discount-percentage discount-product">-28%</span>


                                                        <span class="sr-only">Price</span>
                                                        <span itemprop="price" class="price">$11.51</span>


                                                    </div>









                                                    <p class="product-desc" itemprop="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at
                                                        ante. Mauris eleifend, quam a vulputate dictum, massa quam
                                                        dapibus leo.
                                                    </p>



                                                    <div class="variant-links">
                                                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/16-54-mountain-fox-notebook.html#/1-size-s/10-color-red"
                                                            class="color" title="Red"
                                                            style="background-color: #E84C3D"><span
                                                                class="sr-only">Red</span></a>
                                                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/16-53-mountain-fox-notebook.html#/1-size-s/11-color-black"
                                                            class="color" title="Black"
                                                            style="background-color: #434A54"><span
                                                                class="sr-only">Black</span></a>
                                                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/16-52-mountain-fox-notebook.html#/1-size-s/18-color-pink"
                                                            class="color" title="Pink"
                                                            style="background-color: #FCCACD"><span
                                                                class="sr-only">Pink</span></a>
                                                        <span class="js-count count"></span>
                                                    </div>


                                                    <div class="cart-block">
                                                        <div class="product-add-to-cart">
                                                            <form
                                                                action="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/cart"
                                                                method="post" class="add-to-cart-or-refresh">
                                                                <div class="product-quantity" style="display:none;">
                                                                    <input type="number" name="id_product" value="16"
                                                                        class="product_page_product_id">
                                                                    <input type="number" name="id_customization"
                                                                        value="0" class="product_customization_id">
                                                                    <input type="hidden" name="token"
                                                                        value="9407b95b9bb08d999434e20be614587e">
                                                                    <input type="number" name="qty"
                                                                        class="quantity_wanted input-group" value="1"
                                                                        min="1" />
                                                                </div>
                                                                <button
                                                                    class="button ajax_add_to_cart_button add-to-cart btn btn-default"
                                                                    data-button-action="add-to-cart"
                                                                    title="Add to cart">
                                                                    <span>Add to cart</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="highlighted-informations hidden-sm-down">

                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                        <i class="material-icons search">&#xE8B6;</i> Quick view
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </article>



                                    <article class="product-miniature js-product-miniature " data-id-product="14"
                                        data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                        <div class="thumbnail-container">
                                            <div class="product-inner">
                                                <div class="thumbnail-inner">
                                                    <div class="inner">

                                                        <div class="product-img">

                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/art/14-hummingbird-vector-graphics.html"
                                                                class="thumbnail product-thumbnail">

                                                                <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/52-home_default/hummingbird-vector-graphics.jpg"
                                                                    alt="Brown bear cushion"
                                                                    data-full-size-image-url="https://infinitytemplate.com/Prestashop/PRS01/PRS012/52-large_default/hummingbird-vector-graphics.jpg">
                                                                <img class="second_image img-responsive"
                                                                    src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/58-home_default/hummingbird-vector-graphics.jpg"
                                                                    alt="" title="" />
                                                            </a>






                                                        </div>
                                                      

                                                        <ul class="product-flags">
                                                            <li class="product-flag discount">-45%</li>
                                                            <li class="product-flag new">New</li>
                                                        </ul>

                                                    </div>

                                                    <div class="kkproducthover">
                                                      

                                                        <div class="quick-view-block">
                                                            <a href="#" class="quick-view btn"
                                                                data-link-action="quickview" title="Quick view">
                                                                <i class="material-icons search">&#xE8B6;</i>
                                                                <span>Quick view</span>
                                                            </a>
                                                        </div>


                                                    </div>
                                                </div>


                                                <div class="product-description">


                                                    <h1 class="h3 product-title" itemprop="name"><a
                                                            href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/art/14-hummingbird-vector-graphics.html">Brown
                                                            bear cushion</a></h1>



                                                    <div class="product-price-and-shipping">

                                                        <span class="sr-only">Regular price</span>
                                                        <span class="regular-price">$15.99</span>
                                                        <span class="discount-percentage discount-product">-45%</span>


                                                        <span class="sr-only">Price</span>
                                                        <span itemprop="price" class="price">$8.79</span>


                                                    </div>









                                                    <p class="product-desc" itemprop="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at
                                                        ante. Mauris eleifend, quam a vulputate dictum, massa quam
                                                        dapibus leo.
                                                    </p>





                                                    <div class="cart-block">
                                                        <div class="product-add-to-cart">
                                                            <form
                                                                action="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/cart"
                                                                method="post" class="add-to-cart-or-refresh">
                                                                <div class="product-quantity" style="display:none;">
                                                                    <input type="number" name="id_product" value="14"
                                                                        class="product_page_product_id">
                                                                    <input type="number" name="id_customization"
                                                                        value="0" class="product_customization_id">
                                                                    <input type="hidden" name="token"
                                                                        value="9407b95b9bb08d999434e20be614587e">
                                                                    <input type="number" name="qty"
                                                                        class="quantity_wanted input-group" value="1"
                                                                        min="1" />
                                                                </div>
                                                                <button
                                                                    class="button ajax_add_to_cart_button add-to-cart btn btn-default"
                                                                    data-button-action="add-to-cart"
                                                                    title="Add to cart">
                                                                    <span>Add to cart</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="highlighted-informations no-variants hidden-sm-down">

                                                    <a class="quick-view" href="#" data-link-action="quickview">
                                                        <i class="material-icons search">&#xE8B6;</i> Quick view
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </section>



                    <div class="modal fade js-product-images-modal" id="product-modal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <figure>
                                        <img class="js-modal-product-cover product-cover-modal" width="771"
                                            src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/94-large_default/today-is-a-good-day-framed-poster.jpg"
                                            alt="" title="" itemprop="image">
                                        <figcaption class="image-caption">

                                            <div id="product-description-short" itemprop="description">
                                                <p><span
                                                        style="font-size:10pt;font-family:Arial;font-weight:normal;font-style:normal;color:#000000;">Printed
                                                        on rigid paper with matt finish and smooth surface.</span></p>
                                            </div>

                                        </figcaption>
                                    </figure>
                                    <aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center">

                                        <div class="js-modal-mask mask  nomargin ">
                                            <ul class="product-images js-modal-product-images">
                                                <li class="thumb-container">
                                                    <img data-image-large-src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/94-large_default/today-is-a-good-day-framed-poster.jpg"
                                                        class="thumb js-modal-thumb"
                                                        src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/94-home_default/today-is-a-good-day-framed-poster.jpg"
                                                        alt="" title="" width="370" itemprop="image">
                                                </li>
                                                <li class="thumb-container">
                                                    <img data-image-large-src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/92-large_default/today-is-a-good-day-framed-poster.jpg"
                                                        class="thumb js-modal-thumb"
                                                        src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/92-home_default/today-is-a-good-day-framed-poster.jpg"
                                                        alt="" title="" width="370" itemprop="image">
                                                </li>
                                                <li class="thumb-container">
                                                    <img data-image-large-src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/89-large_default/today-is-a-good-day-framed-poster.jpg"
                                                        class="thumb js-modal-thumb"
                                                        src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/89-home_default/today-is-a-good-day-framed-poster.jpg"
                                                        alt="" title="" width="370" itemprop="image">
                                                </li>
                                                <li class="thumb-container">
                                                    <img data-image-large-src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/90-large_default/today-is-a-good-day-framed-poster.jpg"
                                                        class="thumb js-modal-thumb"
                                                        src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/90-home_default/today-is-a-good-day-framed-poster.jpg"
                                                        alt="" title="" width="370" itemprop="image">
                                                </li>
                                                <li class="thumb-container">
                                                    <img data-image-large-src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/95-large_default/today-is-a-good-day-framed-poster.jpg"
                                                        class="thumb js-modal-thumb"
                                                        src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/95-home_default/today-is-a-good-day-framed-poster.jpg"
                                                        alt="" title="" width="370" itemprop="image">
                                                </li>
                                            </ul>
                                        </div>

                                    </aside>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <?php
}else{
    echo 'Sản phẩm này không có !';
}
?>