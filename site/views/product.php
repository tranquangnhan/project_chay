<aside id="notifications">
    <div class="container">



    </div>
</aside>








<section id="wrapper">


    <div class="container">
        <div class="row">

            <div id="_desktop_left_column" class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <div id="left-column" class="">




                    <!-- <div class="block-categories">

                        <div class="title clearfix hidden-md-up collapsed" data-target="#categories"
                            data-toggle="collapse">
                            <a class="text-uppercase h6"
                                href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/3-clothes">Clothes</a>
                            <span class="navbar-toggler collapse-icons">
                                <i class="material-icons add">&#xE145;</i>
                                <i class="material-icons remove">&#xE15B;</i>
                            </span>
                        </div>

                        <ul id="categories" class="category-top-menu collapse toggle">
                            <li><a class="left-product-title text-uppercase h6"
                                    href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/3-clothes">Clothes</a>
                            </li>
                            <li>
                                <ul class="category-sub-menu">
                                    <li data-depth="0"><a
                                            href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/4-men">Men</a>
                                        <div class="navbar-toggler collapse-icons" data-toggle="collapse"
                                            data-target="#exCollapsingNavbar4"><i
                                                class="material-icons add">&#xE145;</i><i
                                                class="material-icons remove">&#xE15B;</i></div>
                                        <div class="collapse" id="exCollapsingNavbar4">
                                            <ul class="category-sub-menu">
                                                <li data-depth="1"><a class="category-sub-link"
                                                        href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/10-outlook">Outlook</a>
                                                </li>
                                                <li data-depth="1"><a class="category-sub-link"
                                                        href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/11-t-shirt">T-shirt</a>
                                                </li>
                                                <li data-depth="1"><a class="category-sub-link"
                                                        href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/12-jackets">Jackets</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li data-depth="0"><a
                                            href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/5-women">Women</a>
                                        <div class="navbar-toggler collapse-icons" data-toggle="collapse"
                                            data-target="#exCollapsingNavbar5"><i
                                                class="material-icons add">&#xE145;</i><i
                                                class="material-icons remove">&#xE15B;</i></div>
                                        <div class="collapse" id="exCollapsingNavbar5">
                                            <ul class="category-sub-menu">
                                                <li data-depth="1"><a class="category-sub-link"
                                                        href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/13-handbags">Handbags</a>
                                                </li>
                                                <li data-depth="1"><a class="category-sub-link"
                                                        href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/14-loungewear">Loungewear</a>
                                                </li>
                                                <li data-depth="1"><a class="category-sub-link"
                                                        href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/15-sports-wear">Sports
                                                        Wear</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div> -->

                    <div id="search_filters_wrapper" class="hidden-sm-down">
                        <div id="search_filter_controls" class="hidden-md-up">
                            <span id="_mobile_search_filters_clear_all"></span>
                            <button class="btn btn-secondary ok">
                                <i class="material-icons rtl-no-flip">&#xE876;</i>
                                OK
                            </button>
                        </div>
                        <div id="search_filters">

                            <p class="text-uppercase h6 hidden-sm-down">Lọc Giá</p>


                            <section class="facet clearfix">
                                <p class="h6 facet-title hidden-sm-down">GIÁ</p>

                                <div class="title hidden-md-up" data-target="#facet_21014" data-toggle="collapse">
                                    <p class="h6 facet-title">GIÁ</p>
                                    <span class="float-xs-right">
                                        <span class="navbar-toggler collapse-icons">
                                            <i class="material-icons add">&#xE145;</i>
                                            <i class="material-icons remove">&#xE15B;</i>
                                        </span>
                                    </span>
                                </div>
                                <ul id="facet_21014" class="collapse">
                                <input type="hidden" id="hidden_minimum_price" value="1000" />
                                <label for="customRange3" class="form-label">1.000đ - 60.000.000đ</label>
                                <input type="range" class="form-range" min="1000" max="60000000" step="500000" id="hidden_maximum_price" value="60000000"> <br>
                                <span class="ml-0 mt-2" id="SHOW_PRICE_FILTER">60000000đ</span>
                         </ul>


                            </section>
                            
                        </div>
                        <div id="search_filters">

                            <p class="text-uppercase h6 hidden-sm-down">Lọc</p>


                            <section class="facet clearfix">
                                <p class="h6 facet-title hidden-sm-down">THƯƠNG HIỆU</p>

                                <div class="title hidden-md-up" data-target="#facet_21014" data-toggle="collapse">
                                    <p class="h6 facet-title">THƯƠNG HIỆU</p>
                                    <span class="float-xs-right">
                                        <span class="navbar-toggler collapse-icons">
                                            <i class="material-icons add">&#xE145;</i>
                                            <i class="material-icons remove">&#xE15B;</i>
                                        </span>
                                    </span>
                                </div>


                                <ul id="facet_21014" class="collapse">
                                  <?php
                                      $this->model = new Model_home();
                                      $arr = [];
                                      $i =0;
                                      foreach ($getsizeALLpro as $row) {
                                            
                                        echo '  <li>
                                            <label class="facet-label" for="facet_input_21014_0'.$i.'">
                                                <span class="custom-checkbox">
                                                    <input id="facet_input_21014_0'.$i.'" type="checkbox" value="'.$row['name'].'" class="common_selector brand">
                                                    <span class="ps-shown-by-js"><i
                                                            class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                                                </span>

                                                <a  class="" >
                                                    '.$row['name'].'
                                                   
                                                </a>
                                            </label>
                                        </li>';
                                        $i++;
                                      }
                                  ?>
                                  

                                </ul>


                            </section>
                            
                        </div>
                        
                    </div>
                    <section class="featured-products clearfix mt-3 hb-animate-element right-to-left">
                        <h3 class="h1 products-section-title left-product-title text-uppercase hidden-md-down ">
                            Sản phẩm mới
                        </h3>


                        <div class="left-product-title  clearfix hidden-md-up collapsed"
                            data-target="#newproducts-container" data-toggle="collapse">
                            <span class="h1 text-uppercase">Sản phẩm mới</span>

                            <span class="float-xs-right">
                                <span class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE145;</i>
                                    <i class="material-icons remove">&#xE15B;</i>
                                </span>
                            </span>

                        </div>



                        <div id="newproducts-container" class="collapse data-toggler">
                            <div id="owl-new" class="owl-carousel products">
                                <!-- Number of Row -->
                                <ul>
                                    <li>
                                        <?php
                                            foreach ($getAllProDesc as $row) {
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
                                                  $price = $row['price'];
                                               
                                              if($row['discount'] > 0){
                                                $discount = ' <li class="product-flag discount">'.$row['discount'].'%</li>';
                                                $giaDiscount = '<span class="sr-only">'.floatval($price).'</span>
                                                                <span class="regular-price">'.($price - ($row['discount']*$price)/100).'</span>
                                                                <span class="discount-percentage discount-product">'.$row['discount'].'</span>';
                                                           
                                              }else{
                                                $discount = '';
                                                $giaDiscount = '<span class="sr-only">Price</span>
                                                                <span itemprop="price" class="price">'.floatval($price).'</span>';
                                              }
                                              if($price<=0 ||$price =='' ){
                                                $giaDiscount = ' ';
                                             }
                                                $name = $row['name'];
                                            
                                              $link = ROOT_URL."/product/".$row['slug'];
                                                echo '<article class="product-miniature js-product-miniature" data-id-product="19"
                                                data-id-product-attribute="0" itemscope
                                                itemtype="http://schema.org/Product">
                                                <div class="product-container">
                                                
                                                    <div class="thumbnail-container">
                                                        <div class="thumbnail-inner">
    
                                                            <a href="'.$link.'"
                                                                class="thumbnail product-thumbnail">
                                                                <img src="'.$img.'"
                                                                    alt="Neque Porro Suisquam"
                                                                    data-full-size-image-url="'.$img.'" width="70" height="90">
                                                                <img class="second_image img-responsive"
                                                                    src="'.$imgCover.'"
                                                                    alt="" title="" />
                                                            </a>
    
    
                                                        </div>
                                                    </div>
                                                    <div class="product-description">
    
                                                        <h1 class="h3 product-title" itemprop="name"><a
                                                                href="'.$link.'">'.$name.'</a></h1>
    
    
    
                                                        <div class="product-price-and-shipping">
    
    
                                                           '.$giaDiscount.'

    
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>';
                                            }
                                        
                                        ?>
                                    

                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                    <?php
                                            foreach ($getAllProDescoffset as $row) {
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
                                                  $price = $row['price'];
                                             
                                              if($row['discount'] > 0){
                                                $discount = ' <li class="product-flag discount">'.$row['discount'].'%</li>';
                                                $giaDiscount = '<span class="sr-only">'.floatval($price).'</span>
                                                                <span class="regular-price">'.($price - ($row['discount']*$price)/100).'</span>
                                                                <span class="discount-percentage discount-product">'.$row['discount'].'</span>';
                                                           
                                              }else{
                                                $discount = '';
                                                $giaDiscount = '<span class="sr-only">Price</span>
                                                                <span itemprop="price" class="price">'.floatval($price).'</span>';
                                              }
                                              if($price<=0 ||$price =='' ){
                                                $giaDiscount = ' ';
                                              }
                                                $name = $row['name'];
                                            
                                              $link = ROOT_URL."/product/".$row['slug'];
                                                echo '<article class="product-miniature js-product-miniature" data-id-product="19"
                                                data-id-product-attribute="0" itemscope
                                                itemtype="http://schema.org/Product">
                                                <div class="product-container">
                                                
                                                    <div class="thumbnail-container">
                                                        <div class="thumbnail-inner">
    
                                                            <a href="'.$link.'"
                                                                class="thumbnail product-thumbnail">
                                                                <img src="'.$img.'"
                                                                    alt="Neque Porro Suisquam"
                                                                    data-full-size-image-url="'.$img.'" width="70" height="90">
                                                                <img class="second_image img-responsive"
                                                                    src="'.$imgCover.'"
                                                                    alt="" title="" />
                                                            </a>
    
    
                                                        </div>
                                                    </div>
                                                    <div class="product-description">
    
                                                        <h1 class="h3 product-title" itemprop="name"><a
                                                                href="'.$link.'">'.$name.'</a></h1>
    
    
    
                                                        <div class="product-price-and-shipping">
    
    
                                                           '.$giaDiscount.'

    
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>';
                                            }
                                        
                                        ?>

                                    </li>
                                </ul></div>
                       
                        </div>
                    </section>
                    
                    <section class="featured-products clearfix mt-3 hb-animate-element left-to-right">
                        <h3 class="h1 products-section-title left-product-title text-uppercase hidden-md-down ">
                            Bán chạy
                        </h3>

                        <div class="left-product-title  clearfix hidden-md-up collapsed"
                            data-target="#BestSellers-container" data-toggle="collapse">
                            <span class="h1 text-uppercase">Bán chạy</span>
                            <span class="float-xs-right">
                                <span class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE145;</i>
                                    <i class="material-icons remove">&#xE15B;</i>
                                </span>
                            </span>
                        </div>

                        <div id="BestSellers-container" class="collapse data-toggler">
                            <div id="owl-best" class="owl-carousel products">

                                <ul>
                                    <li>
                                    <?php
                                            foreach ($getAllByBuyed as $row) {
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
                                                  $price = $row['price'];
                                             
                                              if($row['discount'] > 0){
                                                $discount = ' <li class="product-flag discount">'.$row['discount'].'%</li>';
                                                $giaDiscount = '<span class="sr-only">'.floatval($price).'</span>
                                                                <span class="regular-price">'.($price - ($row['discount']*$price)/100).'</span>
                                                                <span class="discount-percentage discount-product">'.$row['discount'].'</span>';
                                                           
                                              }else{
                                                $discount = '';
                                                $giaDiscount = '<span class="sr-only">Price</span>
                                                                <span itemprop="price" class="price">'.floatval($price).'</span>';
                                              }
                                              if($price<=0 ||$price =='' ){
                                                $giaDiscount = ' ';
                                             }
                                                $name = $row['name'];
                                            
                                              $link = ROOT_URL."/product/".$row['slug'];
                                                echo '<article class="product-miniature js-product-miniature" data-id-product="19"
                                                data-id-product-attribute="0" itemscope
                                                itemtype="http://schema.org/Product">
                                                <div class="product-container">
                                                
                                                    <div class="thumbnail-container">
                                                        <div class="thumbnail-inner">
    
                                                            <a href="'.$link.'"
                                                                class="thumbnail product-thumbnail">
                                                                <img src="'.$img.'"
                                                                    alt="Neque Porro Suisquam"
                                                                    data-full-size-image-url="'.$img.'" width="70" height="90">
                                                                <img class="second_image img-responsive"
                                                                    src="'.$imgCover.'"
                                                                    alt="" title="" />
                                                            </a>
    
    
                                                        </div>
                                                    </div>
                                                    <div class="product-description">
    
                                                        <h1 class="h3 product-title" itemprop="name"><a
                                                                href="'.$link.'">'.$name.'</a></h1>
    
    
    
                                                        <div class="product-price-and-shipping">
    
    
                                                           '.$giaDiscount.'

    
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>';
                                            }
                                        
                                        ?>

                                    </li>
                                </ul>
                                <ul>
                                         <?php
                                            foreach ($etAllByBuyedoffset as $row) {
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
                                                  $price = $row['price'];
                                             
                                              if($row['discount'] > 0){
                                                $discount = ' <li class="product-flag discount">'.$row['discount'].'%</li>';
                                                $giaDiscount = '<span class="sr-only">'.floatval($price).'</span>
                                                                <span class="regular-price">'.($price - ($row['discount']*$price)/100).'</span>
                                                                <span class="discount-percentage discount-product">'.$row['discount'].'</span>';
                                                           
                                              }else{
                                                $discount = '';
                                                $giaDiscount = '<span class="sr-only">Price</span>
                                                                <span itemprop="price" class="price">'.floatval($price).'</span>';
                                              }
                                              if($price<=0 ||$price =='' ){
                                                $giaDiscount = ' ';
                                                }
                                                    $name = $row['name'];
                                               
                                              $link = ROOT_URL."/product/".$row['slug'];
                                                echo '<article class="product-miniature js-product-miniature" data-id-product="19"
                                                data-id-product-attribute="0" itemscope
                                                itemtype="http://schema.org/Product">
                                                <div class="product-container">
                                                
                                                    <div class="thumbnail-container">
                                                        <div class="thumbnail-inner">
    
                                                            <a href="'.$link.'"
                                                                class="thumbnail product-thumbnail">
                                                                <img src="'.$img.'"
                                                                    alt="Neque Porro Suisquam"
                                                                    data-full-size-image-url="'.$img.'" width="70" height="90">
                                                                <img class="second_image img-responsive"
                                                                    src="'.$imgCover.'"
                                                                    alt="" title="" />
                                                            </a>
    
    
                                                        </div>
                                                    </div>
                                                    <div class="product-description">
    
                                                        <h1 class="h3 product-title" itemprop="name"><a
                                                                href="'.$link.'">'.$name.'</a></h1>
    
    
    
                                                        <div class="product-price-and-shipping">
    
    
                                                           '.$giaDiscount.'

    
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>';
                                            }
                                        
                                        ?>
                                </ul>

                            </div>

                            <!--  <a class="all-product-link h4" href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/best-sales">
      All new products<i class="material-icons">&#xE315;</i>
    </a> -->

                        </div>
                    </section>
                </div>
            </div>



            <div id="content-wrapper" class="left-column col-xs-12 col-sm-12 col-md-12 col-lg-9">

                <nav data-depth="2" class="breadcrumb hidden-sm-down">
                    <div class="container">
                        <ol itemscope itemtype="http://schema.org/BreadcrumbList">


                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="#">
                                    <span itemprop="name">Trang chủ</span>
                                </a>
                                <meta itemprop="position" content="1">
                            </li>



                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="#">
                                    <span itemprop="name"><?=$getCateFromId['name']?></span>
                                </a>
                                <meta itemprop="position" content="2">
                            </li>



                        </ol>
                    </div>
                </nav>






                <section id="main">


                    <div class="block-category card card-block hidden-sm-down">

                        <div class="category-cover">
                            <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/c/3-category_default/clothes.jpg"
                                alt="Clothes">
                        </div>
                        <?php
                            
                        
                        ?>
                        <h1 class="h1 title-category"><?php echo $getCateFromId['name']; ?></h1>
                        <p><?php echo $getCateFromId['description']; ?></p>

                        <div class="text-sm-center hidden-md-up">
                            <h1 class="h1"><?php echo $getCateFromId['name']; ?></h1>
                        </div>






                        <section id="products">

                            <div>

                                <div id="js-product-list-top" class="row products-selection">
                                    <div class="col-md-6 hidden-sm-down total-products">
                                        <!-- Grid-List Buttons -->
                                        <div class="grid-list col-md-2">
                                            <span id="kkgrid" class="active"></span>
                                            <span id="kklist"></span>
                                        </div>


                                        <p>Có tất cả <?= $TotalProduct?> sản phẩm.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row sort-by-row"><span class="col-sm-8 col-md-8 hidden-sm-down sort-by"> Sắp xếp</span>
                                            <div class="col-sm-4 col-md-4 products-sort-order dropdown">
                                            <div class="input-group ">
                                                <select class="custom-select" id="sort_by">
                                             
                                                    <option value="price ASC" class="select-list ">
                                                        Giá từ thấp - cao
                                                    </option>
                                                    <option value="price DESC" class="select-list ">
                                                        Giá từ cao - thấp
                                                    </option>
                                                    <option value="Hot DESC" class="select-list ">
                                                        Sản phẩm hot nhất
                                                    </option>
                                                </select>
                                              
                                                </div>
                                               
                                                
                                            </div>


                                            <div class="col-sm-3 col-xs-4 hidden-md-up filter-button">
                                                <button id="search_filter_toggler" class="btn btn-secondary">
                                                    Filter
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 hidden-md-up text-sm-center showing">

                                    </div>
                                </div>

                            </div>


                            <div id="" class="hidden-sm-down">
                                <section id="js-active-search-filters" class="hide">

                                    <h1 class="h6 hidden-xs-up">Active filters</h1>


                                </section>

                            </div>


                            <div>

                                <div id="js-product-list">
                                    <input type="hidden" name="" id="slug" value="<?php if(isset($_GET['slug'])) echo $_GET['slug']; ?>">
                                    <input type="hidden" name="" id="slug1" value="<?php if(isset($_GET['slug1'])) echo $_GET['slug1']; ?>">
                                    <input type="hidden" name="" id="maloai" value="<?php if(isset($_GET['maloai'])) echo $_GET['maloai']; ?>">
                                    <div class="products product-thumbs row" id="filter_data">

                                        <?php
                                        
                                        if(count($GetProductListCosan)>0){
                                        foreach ($GetProductListCosan as $row) {
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
                                              $price = $row['price'];
                                         
                                          if($row['discount'] > 0){
                                            $discount = ' <li class="product-flag discount">'.$row['discount'].'%</li>';
                                            $giaDiscount = ' <div class="product-price-and-shipping">

                                                            <span class="sr-only">Regular price</span>
                                                            <span class="regular-price">'.floatval($price).'</span>
                                                            <span class="discount-percentage discount-product">-'.$row['discount'].'%</span>


                                                            <span class="sr-only">Price</span>
                                                            <span itemprop="price" class="price">'.($price - ($row['discount']*$price)/100).'</span>
                                                        </div>';
                                          }else{
                                            $discount = '';
                                            $giaDiscount = '<div class="product-price-and-shipping">
                                    

                                                              <span class="sr-only">Price</span>
                                                              <span itemprop="price" class="price">'.floatval($price).'</span>
                                                            
                                                            
                                                        </div>';
                                          }
                                          if($price<=0 ||$price =='' ){
                                            $giaDiscount = ' ';
                                            }
                                                $name = $row['name'];
                                            
                                          $link = ROOT_URL."/product/".$row['slug'];
                                          echo ' <article class="product-miniature js-product-miniature " data-id-product="19" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                          <div class="thumbnail-container">
                                            <div class="product-inner">
                                              <div class="thumbnail-inner">
                                                <div class="inner">
                                                  <div class="product-img">
                                                                    <a href="'.$link.'" class="thumbnail product-thumbnail">
                                                        <img
                                                            src = "'.$img.'"
                                                            alt = "loading..."
                                                            data-full-size-image-url = "'.$img.'"  height="250">
                                                            
                                                          </a> </div>
                                              </div><div class="kkproducthover"></div>
                                              </div>
                                              <div class="product-description">
                                                  <h1 class="h3 product-title" itemprop="name"><a href="'. $link.'">'.$name.'</a></h1><div class="product-price-and-shipping"><span class="sr-only">Regular price</span>
                                                  '.$giaDiscount.'
                                              </div>
                                              
                                              <div class="cart-block">
                                                <div class="product-add-to-cart">
                                        
                                        </div>        </div>
                                  
                                      </article>';
                                        }
                                      }else{
                                        echo '<p style="margin-left:3rem"> No product !</p>';
                                      }
                                      ?>
                                      </div>


                                    <nav class="pagination">
                                        <div class="col-md-4 col-xs-12 pagination-desc">


                                        </div>

                                        <div class="col-md-8 col-xs-12 pr-0 pagination-kkbtn">

                                            <ul class="page-list clearfix">
                                                <?php
                                              echo $Pagination;
                                            ?>
                                            </ul>

                                        </div>

                                    </nav>


                                </div>
                            </div>

                            <div id="js-product-list-bottom">

                                <div id="js-product-list-bottom"></div>

                            </div>

                        </section>

                </section>


            </div>



        </div>
    </div>



    </div>

</section>



<div class="container">
    <div id="_mobile_left_column" class=""></div>
    <div id="_mobile_right_column" class=""></div>
    <div class="clearfix"></div>
</div>