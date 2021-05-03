<aside id="notifications">
    <div class="container">



    </div>
</aside>








<section id="wrapper">


    <div class="container">
        <div class="row">

            <div id="_desktop_left_column" class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <div id="left-column" class="">




                    <div class="block-categories">

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
                    </div>

                    <div id="search_filters_wrapper" class="hidden-sm-down">
                        <div id="search_filter_controls" class="hidden-md-up">
                            <span id="_mobile_search_filters_clear_all"></span>
                            <button class="btn btn-secondary ok">
                                <i class="material-icons rtl-no-flip">&#xE876;</i>
                                OK
                            </button>
                        </div>
                        <div id="search_filters">

                            <p class="text-uppercase h6 hidden-sm-down">Lọc</p>


                            <section class="facet clearfix">
                                <p class="h6 facet-title hidden-sm-down">Nhãn hiệu</p>

                                <div class="title hidden-md-up" data-target="#facet_21014" data-toggle="collapse">
                                    <p class="h6 facet-title">Nhãn hiệu</p>
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
                                      foreach ($getAllCate as $row) {
                                              $name = $row['name'];
                                          
                                        echo '  <li>
                                            <label class="facet-label" for="facet_input_21014_0">
                                                <span class="custom-checkbox">
                                                    <input id="facet_input_21014_0" data-search-url="" type="checkbox">
                                                    <span class="ps-shown-by-js"><i
                                                            class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                                                </span>

                                                <a href="'.ROOT_URL.'/cate/'.$row['slug'].'-'.$row['id'].'/page-1" class="" >
                                                    '.$name.'
                                                    <span class="magnitude">('.$this->model->countAllProduct($row['id']).')</span>
                                                </a>
                                            </label>
                                        </li>';
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
                                </ul>
                                
                                    

                                       


                                    
                            </div>
                            <!-- <a class="all-product-link h4" href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/new-products">
      All new products<i class="material-icons">&#xE315;</i>
    </a> -->
                        </div>
                    </section>
                    <!-- 
                    <div id="custom-leftbannerblock"
                        class="leftbannercms col-lg-3 col-md-12 hb-animate-element left-to-right clearfix">
                        <div id="custom-leftbannerblock" class="clearfix">
                            <div id="kkleftbanners" class="kkleftbanners-container">
                                <div class="image-container slider">
                                    <a href="#" class="kk-customhover-fadeintopbottom" title="LeftCmsBanner 1">
                                        <img src="views/assets/img/8ae59e977dd1c5a52a889a12ac2785f20660dd0c_Left-banners.jpg"
                                            alt="LeftCmsBanner 1" title="LeftCmsBanner 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
                                        <div class="row sort-by-row">
                                                     <?php 

                                                        // /print_r(http_build_query($_GET));
                                                      ?>
                                                <?php 
                                                    if($_GET['maloai'] == ''){
                                                        $sortNameAsc = ROOT_URL.'/cate/page-'.$_GET['slug'].'/nameasc';
                                                        $sortNameDesc = ROOT_URL.'/cate/page-'.$_GET['slug'].'/namedesc';
                                                        $sortPriceAsc = ROOT_URL.'/cate/page-'.$_GET['slug'].'/priceasc';
                                                        $sortPriceDesc = ROOT_URL.'/cate/page-'.$_GET['slug'].'/pricedesc';
                                                    }else{
                                                        $sortNameAsc = ROOT_URL.'/cate/'.$_GET['slug'].'-'.$_GET['maloai'].'/page-'.$_GET['Page'].'/nameasc';
                                                        $sortNameDesc = ROOT_URL.'/cate/'.$_GET['slug'].'-'.$_GET['maloai'].'/page-'.$_GET['Page'].'/namedesc';
                                                        $sortPriceAsc = ROOT_URL.'/cate/'.$_GET['slug'].'-'.$_GET['maloai'].'/page-'.$_GET['Page'].'/priceasc';
                                                        $sortPriceDesc = ROOT_URL.'/cate/'.$_GET['slug'].'-'.$_GET['maloai'].'/page-'.$_GET['Page'].'/pricedesc';
                                                    }
                                                    if($_GET['slug']==''){
                                                        $sortNameAsc = ROOT_URL.'/cate/page-1/nameasc';
                                                        $sortNameDesc = ROOT_URL.'/cate/page-1/namedesc';
                                                        $sortPriceAsc = ROOT_URL.'/cate/page-1/priceasc';
                                                        $sortPriceDesc = ROOT_URL.'/cate/page-1/pricedesc';
                                                    }
                                                ?>
                                            <span class="col-sm-3 col-md-3 hidden-sm-down sort-by"> Sắp xếp</span>
                                            <div class="col-sm-9 col-xs-8 col-md-9 products-sort-order dropdown">
                                                <button class="btn-unstyle select-title" rel="nofollow"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Tên từ a - z <i class="material-icons float-xs-right">&#xE5C5;</i>
                                                </button>
                                               
                                                <div class="dropdown-menu">
                                                    <a rel="nofollow"
                                                        href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/3-clothes?order=product.position.asc"
                                                        class="select-list current js-search-link">
                                                        Tên từ a - z
                                                    </a>
                                                    
                                                    
                                                    <a rel="nofollow"
                                                        href="<?=$sortNameDesc?>"
                                                        class="select-list ">
                                                        Tên từ z - a
                                                    </a>
                                                    <a rel="nofollow"
                                                        href="<?=$sortPriceAsc?>"
                                                        class="select-list ">
                                                        Giá từ thấp - cao
                                                    </a>
                                                    <a rel="nofollow"
                                                        href="<?=$sortPriceDesc?>"
                                                        class="select-list ">
                                                        Giá từ cao - thấp
                                                    </a>
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
                                    <div class="products product-thumbs row">

                                        <?php
                                        if(count($ds)>0){
                                        foreach ($ds as $row) {
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
                                                            <img class="second_image img-responsive" height="250" width="200"  src = "'.$imgCover.'" alt = "" title="" />
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
                                      ?></div>


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