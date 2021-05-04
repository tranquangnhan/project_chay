<?php
//fetch_data.php

require_once "../../lib/myfunctions.php";
require_once "../../system/config.php";
require_once "../../system/database.php";
require_once "../models/home.php";
$home = new Model_home();
$model = new Model_db();
    $lib = new lib();
function formatMoney($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}

if(isset($_POST["action"]))
{
    $PageNum = 1;
   
    if(isset($_POST['slug']) && $_POST['slug'] != "")
    {
        $query ="SELECT * from product where cosan=? and Brand=?"; 
        if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
        {
            $query .= " AND price BETWEEN ".$_POST["minimum_price"]." AND ".$_POST["maximum_price"]."";
        }
        if(isset($_POST["brand"]))
        {
            $brand_filter = implode("','", $_POST["brand"]);
            // $brand_filter = $lib->slug($brand_filter);
            $query .= " AND Brand IN('".$brand_filter."')";
        }
        
        if(isset($_POST["key"]))
        {
            $key = $_POST["key"];
            $query .= " ORDER BY ".$key;
        }
            $query .=" LIMIT ".($PageNum - 1) * PAGE_SIZE_PRO.", ".PAGE_SIZE_PRO; 
      $kqne = $model->result1(0,$query,$_POST['maloai'],$_POST['slug']);  
    }
    else
    {
        $query ="SELECT * from product where catalog_id=?"; 
        $par = $home->getCateFromId($_POST['maloai']);
        if ($par['parent'] != 2) {
            $idcatalog = $par['parent'];
            $query .= " AND cosan=?";
            $id = $par['hangcosan'];
            if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
            {
                $query .= " AND price BETWEEN ".$_POST["minimum_price"]." AND ".$_POST["maximum_price"]."";
            }
            if(isset($_POST["brand"]))
            {
                $brand_filter = implode("','", $_POST["brand"]);
                // $brand_filter = $lib->slug($brand_filter);
                $query .= " AND Brand IN('".$brand_filter."')";
            }
            
            if(isset($_POST["key"]))
            {
                $key = $_POST["key"];
                $query .= " ORDER BY ".$key;
            }
                $query .=" LIMIT ".($PageNum - 1) * PAGE_SIZE_PRO.", ".PAGE_SIZE_PRO; 
                $kqne = $model->result1(0,$query,$idcatalog,$id);
        } else {
            $idcatalog = $par['id'];
            if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
            {
                $query .= " AND price BETWEEN ".$_POST["minimum_price"]." AND ".$_POST["maximum_price"]."";
            }
            if(isset($_POST["brand"]))
            {
                $brand_filter = implode("','", $_POST["brand"]);
                // $brand_filter = $lib->slug($brand_filter);
                $query .= " AND Brand IN('".$brand_filter."')";
            }
            
            if(isset($_POST["key"]))
            {
                $key = $_POST["key"];
                $query .= " ORDER BY ".$key;
            }
                $query .=" LIMIT ".($PageNum - 1) * PAGE_SIZE_PRO.", ".PAGE_SIZE_PRO; 
                $kqne = $model->result1(0,$query,$idcatalog);
        }
        
         
    }
    // echo $query;
    
    $kq_Dem = count($kqne);
    
    if($kq_Dem > 0)
    {
        foreach ($kqne as $row) {
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
            $output .= ' <article class="product-miniature js-product-miniature col-lg-3 col-md-4 col-sm-6 col-xs-12  " data-id-product="19" data-id-product-attribute="0" itemscope itemtype="">
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
    }
    else
    {
        $output = '<h3 class="ml-4">Hông có sản phẩm nào hết</h3>';
    }
    echo $output;
}