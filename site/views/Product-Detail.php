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




            <div id="content-wrapper" class="col-xs-12" style="margin-top:2rem">



                <section id="main" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="url"
                        content="#">

                    <div class="row">
                        <div class="col-xs-12 col-md-5">

                            <section class="page-content" id="content">

                              

                                <ul class="product-flags">
                                    <li class="product-flag new">New</li>
                                </ul>



                                <div class="images-container">

                                    <div class="product-cover">


                                        <img id="zoom" class="js-qv-product-cover zoomLens"
                                            src="<?=$avt?>"
                                            alt="" title="" height="450" style="width:100%;object-fit:cover" itemprop="image">

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
                                                  <img class="thumb js-thumb selected" data-image-large-src="'.$imgdetail[$i].'"
                                                      src="'.$imgdetail[$i].'"
                                                      alt="" title="" width="100" height="150" itemprop="image">
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
                                        <?php
                                        if($sp['discount']>0){
                                        ?>
                                        <span itemprop="price" content="32.89" style="font-size:13pt;text-decoration:line-through"><?=floatval($sp['price'])?>€</span><br>
                                        <span itemprop="price" content="32.89" style="color:var(--it-brand-primary)"><?=($sp['price'] - ($sp['discount']*$sp['price'])/100)?>€</span>
                                       
                                         <?php }
                                        else{?>
                                            <span itemprop="price" content="32.89" style="color:var(--it-brand-primary)"><?=floatval($sp['price'])?>€</span>
                                        <?php   } ?>
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
                                                    <?php 
                                                    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                                    ?>
                                                    <li class="facebook icon-gray"><a
                                                            href="http://www.facebook.com/sharer.php?u=<?=$actual_link?>"
                                                            class="text-hide" title="Share" target="_blank">Share</a>
                                                    </li>
                                                    <li class="twitter icon-gray"><a
                                                            href="https://twitter.com/intent/tweet?text=Aliquam Lorem Ante <?=$actual_link?>"
                                                            class="text-hide" title="Tweet" target="_blank">Tweet</a>
                                                    </li>
                                                    <li class="pinterest icon-gray"><a
                                                            href="http://www.pinterest.com/pin/create/button/?media=<?=$actual_link?>"
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
                                                <img src="views/assets/img/ic_verified_user_black_36dp_1x.png"
                                                    alt="Security policy (edit with Customer reassurance module)">
                                                <span class="h6">Security policy (edit with Customer reassurance
                                                    module)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="block-reassurance-item">
                                                <img src="views/assets/img/ic_local_shipping_black_36dp_1x.png"
                                                    alt="Delivery policy (edit with Customer reassurance module)">
                                                <span class="h6">Delivery policy (edit with Customer reassurance
                                                    module)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="block-reassurance-item">
                                                <img src="views/assets/img/ic_swap_horiz_black_36dp_1x.png"
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





                    <section class="container  hb-animate-element bottom-to-top ">

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
                                        PATH_IMG_SITE.explode(",",$row['image_list'])[0];
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



                    <div class="modal fade js-product-images-modal" id="product-modal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <figure>
                                        <img class="js-modal-product-cover product-cover-modal" width="771"
                                            src="<?=$img?>"
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
                                                        <img data-image-large-src="'.$imgdetail[$i].'"
                                                            class="thumb js-modal-thumb"
                                                            src="'.$imgdetail[$i].'"
                                                            alt="" title="" width="370" itemprop="image">
                                                    </li>';
                                                }
                                                
                                            ?>
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