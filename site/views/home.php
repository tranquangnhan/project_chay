<aside id="notifications">
    <div class="container">



    </div>
</aside>

<div id="top_column">
    <div class="kkimgslider clearfix ">
        <div class="flexslider" data-interval="5000" data-pause="hover">
            <ul class="slides">
                <li class="slide">

                    <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_kkslider&amp;utm_campaign=back-office-EN&amp;utm_content=download"
                        title="kslider-1">
                        <img src="views/assets/img/kslider-1.jpg" alt="kslider-1" title="KSlider1" />
                    </a>
                    <!-- position absolute > li -->

                </li>
                <li class="slide">

                    <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_kkslider&amp;utm_campaign=back-office-EN&amp;utm_content=download"
                        title="kslider-2">
                        <img src="views/assets/img/kslider-2.jpg" alt="kslider-2" title="KSlider2" />
                    </a>
                    <!-- position absolute > li -->

                </li>
            </ul>
        </div>
    </div>
</div>
<div id="Home_top">
    <div class="container">
        <div class="kk_banner hb-animate-element  bottom-to-top clearfix ">
            <div class="row">
                <div class="center-banner list-unstyled">
                    <div class="slider banner1 col-lg-4 col-md-12">
                        <a href="#" class="kk-customhover-fadeintopbottom">
                            <img src="views/assets/img/kbanner-1.jpg" alt="kbanner-1"
                                class="img-responsive center-block" />
                        </a>
                        <div class="overlay"></div>
                    </div>

                    <div class="slider banner2  col-lg-4 col-md-12">
                        <a href="#" class="kk-customhover-fadeintopbottom">
                            <img src="views/assets/img/kbanner-2.jpg" alt="kbanner-2"
                                class="img-responsive center-block" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="slider banner2  col-lg-4 col-md-12">
                        <a href="#" class="kk-customhover-fadeintopbottom">
                            <img src="views/assets/img/kbanner-3.jpg" alt="kbanner-3"
                                class="img-responsive center-block" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="kkproductsblock" class="clearfix hb-animate-element bottom-to-top">
            <div class="kkproductsblock-container">
                <div class="producttab">
                    <h2 class="kk-title">Trending Products</h2>

                    <ul id="kkproductstab" class="nav nav-tabs clearfix">
                        <li class="nav-item first_item">
                            <a class="nav-link active" href="#featured-products-block" data-toggle="tab">Featured</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="#new-products-block" data-toggle="tab">Latest</a>
                        </li>
                        <li class="nav-item last_item">
                            <a class="nav-link " href="#bestseller-products-block" data-toggle="tab">Best sellers</a>
                        </li>
                    </ul>
                </div>

                <div class="product_content ">
                    <div class="tab-content">

                        <div id="featured-products-block" class="tab-pane fadeIn animated active">
                            <div class="block_content row">
                                <div id="kk-featured-products" class="owl-carousel owl-loaded owl-drag">
                                    <?php
                                        foreach ($getAllProAsc as $row){
                                          if(is_file(PATH_IMG_SITE.explode(",",$row['image_list'])[0])){
                                            $img = PATH_IMG_SITE.explode(",",$row['image_list'])[0];
                                        }else{
                                            $img = PATH_IMG_SITE.'logo.png';
                                        }
                                        if(is_file(PATH_IMG_SITE.explode(",",$row['image_list'])[1])){
                                          $imgCover = PATH_IMG_SITE.explode(",",$row['image_list'])[1];
                                        }else{
                                            $imgCover = PATH_IMG_SITE.'logo.png';
                                        }
                                        if($row['new'] == 1){
                                          $new = ' <li class="product-flag new">New</li>';
                                        }else{
                                          $new = '';
                                        }
                                        if($row['discount'] > 0){
                                          $discount = ' <li class="product-flag discount">'.$row['discount'].'%</li>';
                                          $giaDiscount = ' <div class="product-price-and-shipping">
              
                                                          <span class="sr-only">Regular price</span>
                                                          <span class="regular-price">'.$row['price'].'</span>
                                                          <span class="discount-percentage discount-product">-'.$row['discount'].'%</span>
            
            
                                                          <span class="sr-only">Price</span>
                                                          <span itemprop="price" class="price">'.($row['price'] - ($row['discount']*$row['price'])/100) .'€</span>
                                                      </div>';
                                        }else{
                                          $discount = '';
                                          $giaDiscount = '<div class="product-price-and-shipping">
                                  
                        
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">'.$row['price'].'€</span>
                                                          
                                                          
                                                      </div>';
                                        }

                                            echo '<div class="kktab-block">
                                          <article class="product-miniature js-product-miniature " data-id-product="17"
                                            data-id-product-attribute="46" itemscope itemtype="http://schema.org/Product">
                                            <div class="thumbnail-container">
                                                <div class="product-inner">
                                                    <div class="thumbnail-inner">
                                                        <div class="inner">
                
                                                            <div class="product-img">
                
                                                                <a href=""
                                                                    class="thumbnail product-thumbnail">
                
                                                                    <img src="'. $img.'"
                                                                        alt="Pellentesque augue"
                                                                        data-full-size-image-url="../uploads/mountain-fox-notebook.jpg">
                                                                    <img class="second_image img-responsive"
                                                                        src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/36-home_default/mountain-fox-notebook.jpg"
                                                                        alt="" title="" />
                                                                </a>
                                                            </div>
                                                            <ul class="product-flags">
                                                              '.$discount.'
                                                                '.$new.'
                                                              
                                                            </ul>
                
                                                        </div>
                
                                                        <div class="kkproducthover">
                                                
                                                            <div class="quick-view-block">
                                                                <a href="#" class="quick-view btn" data-link-action="quickview"
                                                                    title="Quick view">
                                                                    <i class="material-icons search">&#xE8B6;</i> <span>Quick
                                                                        view</span>
                                                                </a>
                                                            </div>
                
                
                                                        </div>
                                                    </div>
                
                
                                                    <div class="product-description">
                
                
                                                        <h3 class="h3 product-title" itemprop="name"><a
                                                                href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-mountain-fox-notebook.html">'.$row['name'].'</a></h3>
                
                
                                                        '.$giaDiscount.'

                                                        <p class="product-desc" itemprop="description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris
                                                            eleifend, quam a vulputate dictum, massa quam dapibus leo.
                                                        </p>
                
                
                
                                                        <div class="variant-links">
                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-46-mountain-fox-notebook.html#/3-size-l/15-color-green"
                                                                class="color" title="Green" style="background-color: #A0D468"><span
                                                                    class="sr-only">Green</span></a>
                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-47-mountain-fox-notebook.html#/3-size-l/16-color-yellow"
                                                                class="color" title="Yellow" style="background-color: #F1C40F"><span
                                                                    class="sr-only">Yellow</span></a>
                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-48-mountain-fox-notebook.html#/3-size-l/17-color-brown"
                                                                class="color" title="Brown" style="background-color: #964B00"><span
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
                                                                        <input type="number" name="id_customization" value="0"
                                                                            class="product_customization_id">
                                                                        <input type="hidden" name="token"
                                                                            value="9407b95b9bb08d999434e20be614587e">
                                                                        <input type="number" name="qty"
                                                                            class="quantity_wanted input-group" value="1" min="1" />
                                                                    </div>
                                                                    <button
                                                                        class="button ajax_add_to_cart_button add-to-cart btn btn-default"
                                                                        data-button-action="add-to-cart" title="Add to cart">
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
                                        </div>';
                                          }
                                      
                                      ?>
                                </div>
                            </div>

                        </div>
                        <div id="new-products-block" class="tab-pane fadeIn animated ">
                            <div class="block_content row">
                                <div id="kk-featured-products" class="owl-carousel">
                                    <?php
                                        foreach ($getAllByHotAsc as $row){
                                          if(is_file(PATH_IMG_SITE.explode(",",$row['image_list'])[0])){
                                            $img = PATH_IMG_SITE.explode(",",$row['image_list'])[0];
                                        }else{
                                            $img = PATH_IMG_SITE.'logo.png';
                                        }
                                        if(is_file(PATH_IMG_SITE.explode(",",$row['image_list'])[1])){
                                          $imgCover = PATH_IMG_SITE.explode(",",$row['image_list'])[1];
                                        }else{
                                            $imgCover = PATH_IMG_SITE.'logo.png';
                                        }
                                        if($row['new'] == 1){
                                          $new = ' <li class="product-flag new">New</li>';
                                        }else{
                                          $new = '';
                                        }
                                        if($row['discount'] > 0){
                                          $discount = ' <li class="product-flag discount">'.$row['discount'].'%</li>';
                                          $giaDiscount = ' <div class="product-price-and-shipping">
              
                                                          <span class="sr-only">Regular price</span>
                                                          <span class="regular-price">'.$row['price'].'</span>
                                                          <span class="discount-percentage discount-product">-'.$row['discount'].'%</span>
            
            
                                                          <span class="sr-only">Price</span>
                                                          <span itemprop="price" class="price">'.($row['price'] - ($row['discount']*$row['price'])/100) .'€</span>
                                                      </div>';
                                        }else{
                                          $discount = '';
                                          $giaDiscount = '<div class="product-price-and-shipping">
                                  
                        
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">'.$row['price'].'€</span>
                                                          
                                                          
                                                      </div>';
                                        }

                                            echo '<div class="kktab-block">
                                          <article class="product-miniature js-product-miniature " data-id-product="17"
                                            data-id-product-attribute="46" itemscope itemtype="http://schema.org/Product">
                                            <div class="thumbnail-container">
                                                <div class="product-inner">
                                                    <div class="thumbnail-inner">
                                                        <div class="inner">
                
                                                            <div class="product-img">
                
                                                                <a href=""
                                                                    class="thumbnail product-thumbnail">
                
                                                                    <img src="'. $img.'"
                                                                        alt="Pellentesque augue"
                                                                        data-full-size-image-url="../uploads/mountain-fox-notebook.jpg">
                                                                    <img class="second_image img-responsive"
                                                                        src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/36-home_default/mountain-fox-notebook.jpg"
                                                                        alt="" title="" />
                                                                </a>
                                                            </div>
                                                            <ul class="product-flags">
                                                              '.$discount.'
                                                                '.$new.'
                                                              
                                                            </ul>
                
                                                        </div>
                
                                                        <div class="kkproducthover">
                                                
                                                            <div class="quick-view-block">
                                                                <a href="#" class="quick-view btn" data-link-action="quickview"
                                                                    title="Quick view">
                                                                    <i class="material-icons search">&#xE8B6;</i> <span>Quick
                                                                        view</span>
                                                                </a>
                                                            </div>
                
                
                                                        </div>
                                                    </div>
                
                
                                                    <div class="product-description">
                
                
                                                        <h3 class="h3 product-title" itemprop="name"><a
                                                                href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-mountain-fox-notebook.html">'.$row['name'].'</a></h3>
                
                
                                                        '.$giaDiscount.'

                                                        <p class="product-desc" itemprop="description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris
                                                            eleifend, quam a vulputate dictum, massa quam dapibus leo.
                                                        </p>
                
                
                
                                                        <div class="variant-links">
                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-46-mountain-fox-notebook.html#/3-size-l/15-color-green"
                                                                class="color" title="Green" style="background-color: #A0D468"><span
                                                                    class="sr-only">Green</span></a>
                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-47-mountain-fox-notebook.html#/3-size-l/16-color-yellow"
                                                                class="color" title="Yellow" style="background-color: #F1C40F"><span
                                                                    class="sr-only">Yellow</span></a>
                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-48-mountain-fox-notebook.html#/3-size-l/17-color-brown"
                                                                class="color" title="Brown" style="background-color: #964B00"><span
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
                                                                        <input type="number" name="id_customization" value="0"
                                                                            class="product_customization_id">
                                                                        <input type="hidden" name="token"
                                                                            value="9407b95b9bb08d999434e20be614587e">
                                                                        <input type="number" name="qty"
                                                                            class="quantity_wanted input-group" value="1" min="1" />
                                                                    </div>
                                                                    <button
                                                                        class="button ajax_add_to_cart_button add-to-cart btn btn-default"
                                                                        data-button-action="add-to-cart" title="Add to cart">
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
                                        </div>';
                                          }
                                      
                                      ?>
                                </div>
                            </div>

                        </div>
                        <div id="bestseller-products-block" class="tab-pane fadeIn animated ">
                            <div class="block_content row">
                                <div id="kk-featured-products" class="owl-carousel">
                                    <?php
                                        foreach ($getAllByBuyed as $row){
                                          if(is_file(PATH_IMG_SITE.explode(",",$row['image_list'])[0])){
                                            $img = PATH_IMG_SITE.explode(",",$row['image_list'])[0];
                                        }else{
                                            $img = PATH_IMG_SITE.'logo.png';
                                        }
                                        if(is_file(PATH_IMG_SITE.explode(",",$row['image_list'])[1])){
                                          $imgCover = PATH_IMG_SITE.explode(",",$row['image_list'])[1];
                                        }else{
                                            $imgCover = PATH_IMG_SITE.'logo.png';
                                        }
                                        if($row['new'] == 1){
                                          $new = ' <li class="product-flag new">New</li>';
                                        }else{
                                          $new = '';
                                        }
                                        if($row['discount'] > 0){
                                          $discount = ' <li class="product-flag discount">'.$row['discount'].'%</li>';
                                          $giaDiscount = ' <div class="product-price-and-shipping">
              
                                                          <span class="sr-only">Regular price</span>
                                                          <span class="regular-price">'.$row['price'].'</span>
                                                          <span class="discount-percentage discount-product">-'.$row['discount'].'%</span>
            
            
                                                          <span class="sr-only">Price</span>
                                                          <span itemprop="price" class="price">'.($row['price'] - ($row['discount']*$row['price'])/100) .'€</span>
                                                      </div>';
                                        }else{
                                          $discount = '';
                                          $giaDiscount = '<div class="product-price-and-shipping">
                                  
                        
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">'.$row['price'].'€</span>
                                                          
                                                          
                                                      </div>';
                                        }

                                            echo '<div class="kktab-block">
                                          <article class="product-miniature js-product-miniature " data-id-product="17"
                                            data-id-product-attribute="46" itemscope itemtype="http://schema.org/Product">
                                            <div class="thumbnail-container">
                                                <div class="product-inner">
                                                    <div class="thumbnail-inner">
                                                        <div class="inner">
                
                                                            <div class="product-img">
                
                                                                <a href=""
                                                                    class="thumbnail product-thumbnail">
                
                                                                    <img src="'. $img.'"
                                                                        alt="Pellentesque augue"
                                                                        data-full-size-image-url="../uploads/mountain-fox-notebook.jpg">
                                                                    <img class="second_image img-responsive"
                                                                        src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/36-home_default/mountain-fox-notebook.jpg"
                                                                        alt="" title="" />
                                                                </a>
                                                            </div>
                                                            <ul class="product-flags">
                                                              '.$discount.'
                                                                '.$new.'
                                                              
                                                            </ul>
                
                                                        </div>
                
                                                        <div class="kkproducthover">
                                                
                                                            <div class="quick-view-block">
                                                                <a href="#" class="quick-view btn" data-link-action="quickview"
                                                                    title="Quick view">
                                                                    <i class="material-icons search">&#xE8B6;</i> <span>Quick
                                                                        view</span>
                                                                </a>
                                                            </div>
                
                
                                                        </div>
                                                    </div>
                
                
                                                    <div class="product-description">
                
                
                                                        <h3 class="h3 product-title" itemprop="name"><a
                                                                href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-mountain-fox-notebook.html">'.$row['name'].'</a></h3>
                
                
                                                        '.$giaDiscount.'

                                                        <p class="product-desc" itemprop="description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris
                                                            eleifend, quam a vulputate dictum, massa quam dapibus leo.
                                                        </p>
                
                
                
                                                        <div class="variant-links">
                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-46-mountain-fox-notebook.html#/3-size-l/15-color-green"
                                                                class="color" title="Green" style="background-color: #A0D468"><span
                                                                    class="sr-only">Green</span></a>
                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-47-mountain-fox-notebook.html#/3-size-l/16-color-yellow"
                                                                class="color" title="Yellow" style="background-color: #F1C40F"><span
                                                                    class="sr-only">Yellow</span></a>
                                                            <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-48-mountain-fox-notebook.html#/3-size-l/17-color-brown"
                                                                class="color" title="Brown" style="background-color: #964B00"><span
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
                                                                        <input type="number" name="id_customization" value="0"
                                                                            class="product_customization_id">
                                                                        <input type="hidden" name="token"
                                                                            value="9407b95b9bb08d999434e20be614587e">
                                                                        <input type="number" name="qty"
                                                                            class="quantity_wanted input-group" value="1" min="1" />
                                                                    </div>
                                                                    <button
                                                                        class="button ajax_add_to_cart_button add-to-cart btn btn-default"
                                                                        data-button-action="add-to-cart" title="Add to cart">
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
                                        </div>';
                                          }
                                      
                                      ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="kkparallaxcms" class="parallax parallaxcms-outer hb-animate-element bottom-to-top "
            data-source-url="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/infinityparallaxblock/views/img/Parallax-1.jpg">
            <div class="container">
                <div class="parallaxcms-inner container">
                    <div class="parallaxcms">
                        <div class="parallax-inner">

                            <div class="parallax-caption1 ">Beauty &amp; Cosmetic</div>
                            <div class="parallax-caption2 ">Massage oils and creams containing only Natural Products
                            </div>
                            <div class="parallax-btn "><a href="#" class="shopnow-button">Shop Now</a></div>

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
                        <?php 
                          foreach ($getAllProSpecial as $row) {
                              if(is_file(PATH_IMG_SITE.explode(",",$row['image_list'])[0])){
                                  $img = PATH_IMG_SITE.explode(",",$row['image_list'])[0];
                              }else{
                                  $img = PATH_IMG_SITE.'logo.png';
                              }
                              if(is_file(PATH_IMG_SITE.explode(",",$row['image_list'])[1])){
                                $imgCover = PATH_IMG_SITE.explode(",",$row['image_list'])[1];
                            }else{
                                $imgCover = PATH_IMG_SITE.'logo.png';
                            }
                            if($row['new'] == 1){
                              $new = ' <li class="product-flag new">New</li>';
                            }else{
                              $new = '';
                            }
                            if($row['discount'] > 0){
                              $discount = ' <li class="product-flag discount">'.$row['discount'].'%</li>';
                              $giaDiscount = ' <div class="product-price-and-shipping">
  
                                              <span class="sr-only">Regular price</span>
                                              <span class="regular-price">'.$row['price'].'</span>
                                              <span class="discount-percentage discount-product">-'.$row['discount'].'%</span>


                                              <span class="sr-only">Price</span>
                                              <span itemprop="price" class="price">'.($row['price'] - ($row['discount']*$row['price'])/100) .'€</span>
                                          </div>';
                            }else{
                              $discount = '';
                              $giaDiscount = '<div class="product-price-and-shipping">
                      
            
                                                <span class="sr-only">Price</span>
                                                <span itemprop="price" class="price">'.$row['price'].'€</span>
                                              
                                              
                                          </div>';
                            }
                            
                              echo ' <article class="product-miniature js-product-miniature " data-id-product="17"
                              data-id-product-attribute="46" itemscope itemtype="http://schema.org/Product">
                              <div class="thumbnail-container">
                                  <div class="product-inner">
                                      <div class="thumbnail-inner">
                                          <div class="inner">
  
                                              <div class="product-img">
  
                                                  <a href=""
                                                      class="thumbnail product-thumbnail">
  
                                                      <img src="'. $img.'"
                                                          alt="Pellentesque augue"
                                                          data-full-size-image-url="../uploads/mountain-fox-notebook.jpg">
                                                      <img class="second_image img-responsive"
                                                          src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/36-home_default/mountain-fox-notebook.jpg"
                                                          alt="" title="" />
                                                  </a>
                                              </div>
                                              <ul class="product-flags">
                                                 '.$discount.'
                                                  '.$new.'
                                                 
                                              </ul>
  
                                          </div>
  
                                          <div class="kkproducthover">
                                   
                                              <div class="quick-view-block">
                                                  <a href="#" class="quick-view btn" data-link-action="quickview"
                                                      title="Quick view">
                                                      <i class="material-icons search">&#xE8B6;</i> <span>Quick
                                                          view</span>
                                                  </a>
                                              </div>
  
  
                                          </div>
                                      </div>
  
  
                                      <div class="product-description">
  
  
                                          <h3 class="h3 product-title" itemprop="name"><a
                                                  href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-mountain-fox-notebook.html">Pellentesque
                                                  augue</a></h3>
  
  
                                          '.$giaDiscount.'
  
  
  
  
  
  
  
  
  
                                          <p class="product-desc" itemprop="description">
                                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris
                                              eleifend, quam a vulputate dictum, massa quam dapibus leo.
                                          </p>
  
  
  
                                          <div class="variant-links">
                                              <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-46-mountain-fox-notebook.html#/3-size-l/15-color-green"
                                                  class="color" title="Green" style="background-color: #A0D468"><span
                                                      class="sr-only">Green</span></a>
                                              <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-47-mountain-fox-notebook.html#/3-size-l/16-color-yellow"
                                                  class="color" title="Yellow" style="background-color: #F1C40F"><span
                                                      class="sr-only">Yellow</span></a>
                                              <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-48-mountain-fox-notebook.html#/3-size-l/17-color-brown"
                                                  class="color" title="Brown" style="background-color: #964B00"><span
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
                                                          <input type="number" name="id_customization" value="0"
                                                              class="product_customization_id">
                                                          <input type="hidden" name="token"
                                                              value="9407b95b9bb08d999434e20be614587e">
                                                          <input type="number" name="qty"
                                                              class="quantity_wanted input-group" value="1" min="1" />
                                                      </div>
                                                      <button
                                                          class="button ajax_add_to_cart_button add-to-cart btn btn-default"
                                                          data-button-action="add-to-cart" title="Add to cart">
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
                          </article>';
                          }
                        ?>


                    </div>
                </div>
            </div>
        </section>
    </div>
</div>





<section id="wrapper">


    <div class="container">
        <div class="row">




            <div id="content-wrapper" class="col-xs-12">



                <section id="main">







                    <section id="content" class="page-home">





                        <div id="kktestimonials" class="col-lg-6 col-sm-12 hb-animate-element bottom-to-top clearfix">

                            <div class="parallax" data-source-url="">
                                <div class="testimonial_inner">

                                    <h3 class="kk-title">Testimonials</h3>

                                    <div id="kktestimonials-item" class="container owl-carousel">
                                        <div id="kktestimonialsblock">
                                            <div class="row">
                                                <div class="testimonial-img">
                                                    <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/kktestimonials/views/img/testimonial-1.jpg"
                                                        alt="Tammy Qualls" />
                                                </div>
                                                <div class="testimonial-data">

                                                    <div class="tes_userinfo">
                                                        <div class="testi-userinfo">

                                                            <span class="testimonial-name">
                                                                Tammy Qualls
                                                            </span>
                                                            <span class="testimonial-author">
                                                                Web Designer / Consultant
                                                            </span>
                                                        </div>
                                                        <div class="testimonial-disc">
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry&#039;s standard dummy text ever since the 1500s.
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div id="kktestimonialsblock">
                                            <div class="row">
                                                <div class="testimonial-img">
                                                    <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/kktestimonials/views/img/testimonial-2.jpg"
                                                        alt="Tammy Qualls" />
                                                </div>
                                                <div class="testimonial-data">

                                                    <div class="tes_userinfo">
                                                        <div class="testi-userinfo">

                                                            <span class="testimonial-name">
                                                                Tammy Qualls
                                                            </span>
                                                            <span class="testimonial-author">
                                                                Web Designer / Consultant
                                                            </span>
                                                        </div>
                                                        <div class="testimonial-disc">
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry&#039;s standard dummy text ever since the 1500s.
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div id="kktestimonialsblock">
                                            <div class="row">
                                                <div class="testimonial-img">
                                                    <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/kktestimonials/views/img/testimonial-3.jpg"
                                                        alt="Tammy Qualls" />
                                                </div>
                                                <div class="testimonial-data">

                                                    <div class="tes_userinfo">
                                                        <div class="testi-userinfo">

                                                            <span class="testimonial-name">
                                                                Tammy Qualls
                                                            </span>
                                                            <span class="testimonial-author">
                                                                Web Designer / Consultant
                                                            </span>
                                                        </div>
                                                        <div class="testimonial-disc">
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry&#039;s standard dummy text ever since the 1500s.
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 kk_banner clearfix hb-animate-element bottom-to-top">
                            <div class="kk_sub_banner row">
                                <div class="slider banner1  col-lg-6 col-xs-12 hb-animate-element bottom-to-top">
                                    <a href="#" class="kk-customhover-fadeintopbottom" title="This is Caption">
                                        <div class="kkmultibanner-hover">
                                            <img src="views/assets/img/demo_img_1.jpg" class="img-responsive"
                                                alt="This is Caption" />
                                        </div>
                                    </a>
                                </div>


                                <div class="slider banner1  col-lg-6 col-xs-12 hb-animate-element bottom-to-top">
                                    <a href="#" class="kk-customhover-fadeintopbottom" title="This is Caption">
                                        <div class="kkmultibanner-hover">
                                            <img src="views/assets/img/demo_img_2.jpg" class="img-responsive"
                                                alt="This is Caption" />
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </section>

                    <!-- Footer Start-->
                </section>
                <footer class="page-footer">

                    <!-- Footer content -->

                </footer>
</section>
</div>
</div>
</div>
</div>
</div>
</section>


<div id="bottom_home">
    <section id="itspecialdeals" class="container featured-products clearfix mt-3 hb-animate-element bottom-to-top">

        <h2 class="kk-title">Deal of the day</h2>

        <div id="itspecialdeals-carousel" class="owl-carousel products collapse data-toggler">
                  
             <?php
              foreach ($getAllProByDeal as $row) {
                if(is_file(PATH_IMG_SITE.explode(",",$row['image_list'])[0])){
                  $img = PATH_IMG_SITE.explode(",",$row['image_list'])[0];
              }else{
                  $img = PATH_IMG_SITE.'logo.png';
              }
              if(is_file(PATH_IMG_SITE.explode(",",$row['image_list'])[1])){
                $imgCover = PATH_IMG_SITE.explode(",",$row['image_list'])[1];
            }else{
                $imgCover = PATH_IMG_SITE.'logo.png';
            }
            if($row['new'] == 1){
              $new = ' <li class="product-flag new">New</li>';
            }else{
              $new = '';
            }
            if($row['discount'] > 0){
              $discount = ' <li class="product-flag discount">'.$row['discount'].'%</li>';
              $giaDiscount = ' <div class="product-price-and-shipping">

                              <span class="sr-only">Regular price</span>
                              <span class="regular-price">'.$row['price'].'</span>
                              <span class="discount-percentage discount-product">-'.$row['discount'].'%</span>


                              <span class="sr-only">Price</span>
                              <span itemprop="price" class="price">'.($row['price'] - ($row['discount']*$row['price'])/100) .'€</span>
                          </div>';
            }else{
              $discount = '';
              $giaDiscount = '<div class="product-price-and-shipping">
      

                                <span class="sr-only">Price</span>
                                <span itemprop="price" class="price">'.$row['price'].'€</span>
                              
                              
                          </div>';
            }
            
                echo '<article class="product-miniature js-product-miniature " data-id-product="17" data-id-product-attribute="46"
                itemscope itemtype="http://schema.org/Product">
                <div class="thumbnail-container">
                    <div class="product-inner col-xs-12">
                        <div class="thumbnail-inner col-xs-12 col-sm-4">
                            <div class="inner">

                                <div class="product-img">

                                    <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-46-mountain-fox-notebook.html#/3-size-l/15-color-green"
                                        class="thumbnail product-thumbnail ">

                                        <img src="'.$img.'" alt="Pellentesque augue"
                                            data-full-size-image-url="'.$img.'">
                                        <img class="second_image img-responsive"
                                            src="'.$imgCover.'" alt="" title="" />
                                    </a>

                                </div>
                            </div>

                            <div class="kkproducthover">
              

                            </div>
                        </div>


                        <div class="product-description col-xs-12 col-sm-8">

                            <h3 class="h3 product-title" itemprop="name"><a
                                    href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-46-mountain-fox-notebook.html#/3-size-l/15-color-green">'.$row['name'].'</a></h3>



                            '.$giaDiscount.'

                            <p class="product-desc" itemprop="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris
                                eleifend, quam a vulputate dictum, massa quam dapibus leo.
                            </p>



                            <div class="variant-links">
                                <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-46-mountain-fox-notebook.html#/3-size-l/15-color-green"
                                    class="color" title="Green" style="background-color: #A0D468"><span
                                        class="sr-only">Green</span></a>
                                <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-47-mountain-fox-notebook.html#/3-size-l/16-color-yellow"
                                    class="color" title="Yellow" style="background-color: #F1C40F"><span
                                        class="sr-only">Yellow</span></a>
                                <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/stationery/17-48-mountain-fox-notebook.html#/3-size-l/17-color-brown"
                                    class="color" title="Brown" style="background-color: #964B00"><span
                                        class="sr-only">Brown</span></a>
                                <span class="js-count count"></span>
                            </div>


                        </div>
                        <div class="highlighted-informations hidden-sm-down">

                            <a class="quick-view" href="#" data-link-action="quickview">
                                <i class="material-icons search">&#xE8B6;</i> Quick view
                            </a>

                        </div>

                    </div>
                </div>
            </article>';
              }
             ?>             
            


        </div>

    </section>



    <div class="kkmanufacturer container hb-animate-element bottom-to-top clearfix">

        <h3 class="kk-title">Brands</h3>


        <div class="block_content row">
            <div id="kkbrandlogo" class="owl-carousel">
                <div class="items">
                    <div class="image-container">
                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/brand/3-manufacture3"
                            title="Manufacture3">
                            <img src="views/assets/img/3.jpg" alt="Manufacture3" />
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="image-container">
                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/brand/4-manufacture4"
                            title="Manufacture4">
                            <img src="views/assets/img/4.jpg" alt="Manufacture4" />
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="image-container">
                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/brand/5-manufacture5"
                            title="Manufacture5">
                            <img src="views/assets/img/5.jpg" alt="Manufacture5" />
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="image-container">
                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/brand/6-manufacture6"
                            title="Manufacture6">
                            <img src="views/assets/img/6.jpg" alt="Manufacture6" />
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="image-container">
                        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/brand/7-manufacture7"
                            title="Manufacture7">
                            <img src="views/assets/img/7.jpg" alt="Manufacture7" />
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>