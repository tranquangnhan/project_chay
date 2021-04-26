<aside id="notifications">
    <div class="container">



    </div>
</aside>

<div id="top_column">
    <div class="kkimgslider clearfix ">
        <div class="flexslider" data-interval="5000" data-pause="hover">
            <ul class="slides">
                <li class="slide">

                    <a href="<?=ROOT_URL?>/cate/product-2"
                        title="kslider-1">
                        <img src="views/assets/img/kslider-1.jpg" alt="kslider-1" title="KSlider1" />
                    </a>
                    <!-- position absolute > li -->

                </li>
                <li class="slide">

                    <a href="<?=ROOT_URL?>/cate/product-2"
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
                        <a href="<?=ROOT_URL?>/cate/product-2" class="kk-customhover-fadeintopbottom">
                            <img src="views/assets/img/kbanner-1.jpg" alt="kbanner-1"
                                class="img-responsive center-block" />
                        </a>
                        <div class="overlay"></div>
                    </div>

                    <div class="slider banner2  col-lg-4 col-md-12">
                        <a href="<?=ROOT_URL?>/cate/product-2" class="kk-customhover-fadeintopbottom">
                            <img src="views/assets/img/kbanner-2.jpg" alt="kbanner-2"
                                class="img-responsive center-block" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="slider banner2  col-lg-4 col-md-12">
                        <a href="<?=ROOT_URL?>/cate/product-2" class="kk-customhover-fadeintopbottom">
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
                                            $imgCover =  PATH_IMG_SITE.explode(",",$row['image_list'])[0];
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
                                                          <span class="regular-price">'.floatval($row['price']).'</span>
                                                          <span class="discount-percentage discount-product">-'.$row['discount'].'%</span>
            
            
                                                          <span class="sr-only">Price</span>
                                                          <span itemprop="price" class="price">'.($row['price'] - ($row['discount']*$row['price'])/100) .'€</span>
                                                      </div>';
                                        }else{
                                          $discount = '';
                                          $giaDiscount = '<div class="product-price-and-shipping">
                                  
                        
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">'.floatval($row['price']).'€</span>
                                                          
                                                          
                                                      </div>';
                                        }
                                        $link = ROOT_URL."/product/".$row['slug'];
                                            echo '<div class="kktab-block">
                                          <article class="product-miniature js-product-miniature " data-id-product="17"
                                            data-id-product-attribute="46" itemscope itemtype="http://schema.org/Product">
                                            <div class="thumbnail-container">
                                                <div class="product-inner">
                                                    <div class="thumbnail-inner">
                                                        <div class="inner">
                
                                                            <div class="product-img">
                
                                                                <a href="'. $link.'"
                                                                    class="thumbnail product-thumbnail">
                
                                                                    <img src="'. $img.'"
                                                                        alt="Pellentesque augue"
                                                                        data-full-size-image-url="'. $img.'" height="250" >
                                                                    <img class="second_image img-responsive"
                                                                        src="'. $imgCover.'"
                                                                        alt="" title="" height="250" width="200" />
                                                                </a>
                                                            </div>
                                                            <ul class="product-flags">
                                                              '.$discount.'
                                                                '.$new.'
                                                              
                                                            </ul>
                
                                                        </div>
                
                                                        <div class="kkproducthover">
                                                
                                                            <div class="quick-view-block">
                                                                <a href="'. $link.'" class=" btn" 
                                                                    title="Quick view">
                                                                 
                                                                </a>
                                                            </div>
                
                
                                                        </div>
                                                    </div>
                
                
                                                    <div class="product-description">
                
                
                                                        <h3 class="h3 product-title" itemprop="name"><a
                                                                href="'. $link.'">'.$row['name'].'</a></h3>
                
                
                                                        '.$giaDiscount.'
                
    
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
                                            $imgCover =  PATH_IMG_SITE.explode(",",$row['image_list'])[0];
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
                                                          <span class="regular-price">'.floatval($row['price']).'</span>
                                                          <span class="discount-percentage discount-product">-'.$row['discount'].'%</span>
            
            
                                                          <span class="sr-only">Price</span>
                                                          <span itemprop="price" class="price">'.($row['price'] - ($row['discount']*$row['price'])/100) .'€</span>
                                                      </div>';
                                        }else{
                                          $discount = '';
                                          $giaDiscount = '<div class="product-price-and-shipping">
                                  
                        
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">'.floatval($row['price']).'€</span>
                                                          
                                                          
                                                      </div>';
                                        }
                                        $link = ROOT_URL."/product/".$row['slug'];
                                        echo '<div class="kktab-block">
                                      <article class="product-miniature js-product-miniature " data-id-product="17"
                                        data-id-product-attribute="46" itemscope itemtype="http://schema.org/Product">
                                        <div class="thumbnail-container">
                                            <div class="product-inner">
                                                <div class="thumbnail-inner">
                                                    <div class="inner">
            
                                                        <div class="product-img">
            
                                                            <a href="'. $link.'"
                                                                class="thumbnail product-thumbnail">
            
                                                                <img src="'. $img.'"
                                                                    alt="Pellentesque augue"
                                                                    data-full-size-image-url="'. $img.'" height="250" >
                                                                <img class="second_image img-responsive"
                                                                    src="'. $imgCover.'"
                                                                    alt="" title="" height="250" width="200" />
                                                            </a>
                                                        </div>
                                                        <ul class="product-flags">
                                                          '.$discount.'
                                                            '.$new.'
                                                          
                                                        </ul>
            
                                                    </div>
            
                                                    <div class="kkproducthover">
                                            
                                                        <div class="quick-view-block">
                                                            <a href="'. $link.'" class=" btn" 
                                                                title="Quick view">
                                                             
                                                            </a>
                                                        </div>
            
            
                                                    </div>
                                                </div>
            
            
                                                <div class="product-description">
            
            
                                                    <h3 class="h3 product-title" itemprop="name"><a
                                                            href="'. $link.'">'.$row['name'].'</a></h3>
            
            
                                                    '.$giaDiscount.'
            

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
                                            $imgCover =  PATH_IMG_SITE.explode(",",$row['image_list'])[0];
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
                                                          <span class="regular-price">'.floatval($row['price']).'</span>
                                                          <span class="discount-percentage discount-product">-'.$row['discount'].'%</span>
            
            
                                                          <span class="sr-only">Price</span>
                                                          <span itemprop="price" class="price">'.($row['price'] - ($row['discount']*$row['price'])/100) .'€</span>
                                                      </div>';
                                        }else{
                                          $discount = '';
                                          $giaDiscount = '<div class="product-price-and-shipping">
                                  
                        
                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">'.floatval($row['price']).'€</span>
                                                          
                                                          
                                                      </div>';
                                        }
                                        $link = ROOT_URL."/product/".$row['slug'];
                                        echo '<div class="kktab-block">
                                      <article class="product-miniature js-product-miniature " data-id-product="17"
                                        data-id-product-attribute="46" itemscope itemtype="http://schema.org/Product">
                                        <div class="thumbnail-container">
                                            <div class="product-inner">
                                                <div class="thumbnail-inner">
                                                    <div class="inner">
            
                                                        <div class="product-img">
            
                                                            <a href="'. $link.'"
                                                                class="thumbnail product-thumbnail">
            
                                                                <img src="'. $img.'"
                                                                    alt="Pellentesque augue"
                                                                    data-full-size-image-url="'. $img.'" height="250" >
                                                                <img class="second_image img-responsive"
                                                                    src="'. $imgCover.'"
                                                                    alt="" title="" height="250" width="200" />
                                                            </a>
                                                        </div>
                                                        <ul class="product-flags">
                                                          '.$discount.'
                                                            '.$new.'
                                                          
                                                        </ul>
            
                                                    </div>
            
                                                    <div class="kkproducthover">
                                            
                                                        <div class="quick-view-block">
                                                            <a href="'. $link.'" class=" btn" 
                                                                title="Quick view">
                                                             
                                                            </a>
                                                        </div>
            
            
                                                    </div>
                                                </div>
            
            
                                                <div class="product-description">
            
            
                                                    <h3 class="h3 product-title" itemprop="name"><a
                                                            href="'. $link.'">'.$row['name'].'</a></h3>
            
            
                                                    '.$giaDiscount.'
            

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
            data-source-url="views/assets/img/Parallax-1.jpg">
            <div class="container">
                <div class="parallaxcms-inner container">
                    <div class="parallaxcms">
                        <div class="parallax-inner">

                            <div class="parallax-caption1 ">Beauty &amp; Cosmetic</div>
                            <div class="parallax-caption2 ">Massage oils and creams containing only Natural Products
                            </div>
                            <div class="parallax-btn "><a href="<?=ROOT_URL?>/cate/product-2" class="shopnow-button">Shop Now</a></div>

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
                                $imgCover = PATH_IMG_SITE.explode(",",$row['image_list'])[0];
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
                                              <span class="regular-price">'.floatval($row['price']).'</span>
                                              <span class="discount-percentage discount-product">-'.$row['discount'].'%</span>


                                              <span class="sr-only">Price</span>
                                              <span itemprop="price" class="price">'.($row['price'] - ($row['discount']*$row['price'])/100) .'€</span>
                                          </div>';
                            }else{
                              $discount = '';
                              $giaDiscount = '<div class="product-price-and-shipping">
                      
            
                                                <span class="sr-only">Price</span>
                                                <span itemprop="price" class="price">'.floatval($row['price']).'€</span>
                                              
                                              
                                          </div>';
                            }
                            $link = ROOT_URL."/product/".$row['slug'];
                            echo '<div class="kktab-block">
                            <article class="product-miniature js-product-miniature " data-id-product="17"
                              data-id-product-attribute="46" itemscope itemtype="http://schema.org/Product">
                              <div class="thumbnail-container">
                                  <div class="product-inner">
                                      <div class="thumbnail-inner">
                                          <div class="inner">
  
                                              <div class="product-img">
  
                                                  <a href="'. $link.'"
                                                      class="thumbnail product-thumbnail">
  
                                                      <img src="'. $img.'"
                                                          alt="Pellentesque augue"
                                                          data-full-size-image-url="'. $img.'" height="250" >
                                                      <img class="second_image img-responsive"
                                                          src="'. $imgCover.'"
                                                          alt="" title="" height="250" width="200" />
                                                  </a>
                                              </div>
                                              <ul class="product-flags">
                                                '.$discount.'
                                                  '.$new.'
                                                
                                              </ul>
  
                                          </div>
  
                                          <div class="kkproducthover">
                                  
                                              <div class="quick-view-block">
                                                  <a href="'. $link.'" class=" btn" 
                                                      title="Quick view">
                                                   
                                                  </a>
                                              </div>
  
  
                                          </div>
                                      </div>
  
  
                                      <div class="product-description">
  
  
                                          <h3 class="h3 product-title" itemprop="name"><a
                                                  href="'. $link.'">'.$row['name'].'</a></h3>
  
  
                                          '.$giaDiscount.'
  

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
                                                    <img src="views/assets/img/testimonial-1.jpg"
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
                                                    <img src="views/assets/img/testimonial-2.jpg"
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
                                                    <img src="views/assets/img/testimonial-3.jpg"
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
                                    <a href="<?=ROOT_URL?>/cate/product-2" class="kk-customhover-fadeintopbottom" title="This is Caption">
                                        <div class="kkmultibanner-hover">
                                            <img src="views/assets/img/demo_img_1.jpg" class="img-responsive"
                                                alt="This is Caption" />
                                        </div>
                                    </a>
                                </div>


                                <div class="slider banner1  col-lg-6 col-xs-12 hb-animate-element bottom-to-top">
                                    <a href="<?=ROOT_URL?>/cate/product-2" class="kk-customhover-fadeintopbottom" title="This is Caption">
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
                $imgCover =  PATH_IMG_SITE.explode(",",$row['image_list'])[0];
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
                              <span class="regular-price">'.floatval($row['price']).'</span>
                              <span class="discount-percentage discount-product">-'.$row['discount'].'%</span>


                              <span class="sr-only">Price</span>
                              <span itemprop="price" class="price">'.($row['price'] - ($row['discount']*$row['price'])/100) .'€</span>
                          </div>';
            }else{
              $discount = '';
              $giaDiscount = '<div class="product-price-and-shipping">
      

                                <span class="sr-only">Price</span>
                                <span itemprop="price" class="price">'.floatval($row['price']).'€</span>
                              
                              
                          </div>';
            }
                $link = ROOT_URL."/product/".$row['slug'];
                echo '<article class="product-miniature js-product-miniature " data-id-product="17" data-id-product-attribute="46"
                itemscope itemtype="http://schema.org/Product">
                <div class="thumbnail-container">
                    <div class="product-inner col-xs-12">
                        <div class="thumbnail-inner col-xs-12 col-sm-4">
                            <div class="inner">

                                <div class="product-img">

                                    <a href="'.$link.'"
                                        class="thumbnail product-thumbnail ">

                                        <img src="'.$img.'" alt="Pellentesque augue"
                                            data-full-size-image-url="'.$img.'" width="120" height="130">
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
                                    href="'.$link.'">'.$row['name'].'</a></h3>



                            '.$giaDiscount.'

                            <p class="product-desc" itemprop="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris
                                eleifend, quam a vulputate dictum, massa quam dapibus leo.
                            </p>



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