<?php
    require_once "../languages/".$_SESSION['lang'].".php";
?>
<!doctype html>
<html lang="en">

<head>
    <base href="/project_chay/site/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hằng ELLA</title>
    <meta name="description" content="Shop powered by PrestaShop">
    <meta name="keywords" content="">
   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/vnd.microsoft.icon" href="views/assets/img/Logo-hang-Ella.png">
    <link rel="shortcut icon" type="image/x-icon" href="views/assets/img/Logo-hang-Ella.png">
    <link rel="stylesheet" href="views/assets/css/theme-3950e66.css" type="text/css" media="all">
    <link rel="stylesheet" href="views/assets/css/SweetAlert2.css">
    <script type="text/javascript">
    var baseDir = "\/project_chay\/site\/";
    var kkproductsblock = {
        "columnsmobile": "1",
        "columnstablet": "2",
        "columnslaptop": "4",
        "columnsdesktop": "5"
    };
    var prestashop = {
        "cart": {
            "products": [],
            "totals": {
                "total": {
                    "type": "total",
                    "label": "Total",
                    "amount": 0,
                    "value": "$0.00"
                },
                "total_including_tax": {
                    "type": "total",
                    "label": "Total (tax incl.)",
                    "amount": 0,
                    "value": "$0.00"
                },
                "total_excluding_tax": {
                    "type": "total",
                    "label": "Total (tax excl.)",
                    "amount": 0,
                    "value": "$0.00"
                }
            },
            "subtotals": {
                "products": {
                    "type": "products",
                    "label": "Subtotal",
                    "amount": 0,
                    "value": "$0.00"
                },
                "discounts": null,
                "shipping": {
                    "type": "shipping",
                    "label": "Shipping",
                    "amount": 0,
                    "value": "Free"
                },
                "tax": {
                    "type": "tax",
                    "label": "Taxes",
                    "amount": 0,
                    "value": "$0.00"
                }
            },
            "products_count": 0,
            "summary_string": "0 items",
            "vouchers": {
                "allowed": 0,
                "added": []
            },
            "discounts": [],
            "minimalPurchase": 0,
            "minimalPurchaseRequired": ""
        },
        "currency": {
            "name": "US Dollar",
            "iso_code": "USD",
            "iso_code_num": null,
            "sign": "$"
        },
        "customer": {
            "lastname": null,
            "firstname": null,
            "email": null,
            "birthday": null,
            "newsletter": null,
            "newsletter_date_add": null,
            "optin": null,
            "website": null,
            "company": null,
            "siret": null,
            "ape": null,
            "is_logged": false,
            "gender": {
                "type": null,
                "name": null
            },
            "addresses": []
        },
        "language": {
            "name": "English (English)",
            "iso_code": "en",
            "locale": "en-US",
            "language_code": "en-us",
            "is_rtl": "0",
            "date_format_lite": "m\/d\/Y",
            "date_format_full": "m\/d\/Y H:i:s",
            "id": 1
        },
        "page": {
            "title": "",
            "canonical": null,
            "meta": {
                "title": "Demo Shop",
                "description": "Shop powered by PrestaShop",
                "keywords": "",
                "robots": "index"
            },
            "page_name": "index",
            "body_classes": {
                "lang-en": true,
                "lang-rtl": false,
                "country-US": true,
                "currency-USD": true,
                "layout-full-width": true,
                "page-index": true,
                "tax-display-disabled": true
            },
            "admin_notifications": []
        },
        "shop": {
            "name": "Demo Shop",
            "logo": "../\img\/demo-shop-logo-1538137004.jpg",
            "stores_icon": "../\img\/logo_stores.png",
            "favicon": "../\img\/favicon.ico"
        },
        "urls": {
            "base_url": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/",
            "current_url": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/",
            "shop_domain_url": "https:\/\/infinitytemplate.com",
            "img_ps_url": "https:\/\/infinitytemplate.com../\img\/",
            "img_cat_url": "https:\/\/infinitytemplate.com../\img\/c\/",
            "img_lang_url": "https:\/\/infinitytemplate.com../\img\/l\/",
            "img_prod_url": "https:\/\/infinitytemplate.com../\img\/p\/",
            "img_manu_url": "https:\/\/infinitytemplate.com../\img\/m\/",
            "img_sup_url": "https:\/\/infinitytemplate.com../\img\/su\/",
            "img_ship_url": "https:\/\/infinitytemplate.com../\img\/s\/",
            "img_store_url": "https:\/\/infinitytemplate.com../\img\/st\/",
            "img_col_url": "https:\/\/infinitytemplate.com../\img\/co\/",
            "img_url": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/themes\/PRS012\/assets\/img\/",
            "css_url": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/themes\/PRS012\/assets\/css\/",
            "js_url": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/themes\/PRS012\/assets\/js\/",
            "pic_url": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/upload\/",
            "pages": {
                "address": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/address",
                "addresses": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/addresses",
                "authentication": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/login",
                "cart": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/cart",
                "category": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/index.php?controller=category",
                "cms": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/index.php?controller=cms",
                "contact": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/contact-us",
                "discount": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/discount",
                "guest_tracking": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/guest-tracking",
                "history": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/order-history",
                "identity": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/identity",
                "index": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/",
                "my_account": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/my-account",
                "order_confirmation": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/order-confirmation",
                "order_detail": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/index.php?controller=order-detail",
                "order_follow": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/order-follow",
                "order": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/order",
                "order_return": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/index.php?controller=order-return",
                "order_slip": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/credit-slip",
                "pagenotfound": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/page-not-found",
                "password": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/password-recovery",
                "pdf_invoice": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/index.php?controller=pdf-invoice",
                "pdf_order_return": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/index.php?controller=pdf-order-return",
                "pdf_order_slip": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/index.php?controller=pdf-order-slip",
                "prices_drop": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/prices-drop",
                "product": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/index.php?controller=product",
                "search": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/search",
                "sitemap": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/sitemap",
                "stores": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/stores",
                "supplier": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/supplier",
                "register": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/login?create_account=1",
                "order_login": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/order?login=1"
            },
            "alternative_langs": {
                "en-us": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/",
                "es-es": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/es\/"
            },
            "theme_assets": "\/Prestashop\/PRS01\/PRS012\/themes\/PRS012\/assets\/",
            "actions": {
                "logout": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/?mylogout="
            },
            "no_picture_image": {
                "bySize": {
                    "cart_default": {
                        "url": "https:\/\/infinitytemplate.com../\img\/p\/en-default-cart_default.jpg",
                        "width": 85,
                        "height": 104
                    },
                    "small_default": {
                        "url": "https:\/\/infinitytemplate.com../\img\/p\/en-default-small_default.jpg",
                        "width": 85,
                        "height": 104
                    },
                    "home_default": {
                        "url": "https:\/\/infinitytemplate.com../\img\/p\/en-default-home_default.jpg",
                        "width": 370,
                        "height": 454
                    },
                    "medium_default": {
                        "url": "https:\/\/infinitytemplate.com../\img\/p\/en-default-medium_default.jpg",
                        "width": 470,
                        "height": 577
                    },
                    "large_default": {
                        "url": "https:\/\/infinitytemplate.com../\img\/p\/en-default-large_default.jpg",
                        "width": 771,
                        "height": 942
                    }
                },
                "small": {
                    "url": "https:\/\/infinitytemplate.com../\img\/p\/en-default-cart_default.jpg",
                    "width": 85,
                    "height": 104
                },
                "medium": {
                    "url": "https:\/\/infinitytemplate.com../\img\/p\/en-default-home_default.jpg",
                    "width": 370,
                    "height": 454
                },
                "large": {
                    "url": "https:\/\/infinitytemplate.com../\img\/p\/en-default-large_default.jpg",
                    "width": 771,
                    "height": 942
                },
                "legend": ""
            }
        },
        "configuration": {
            "display_taxes_label": false,
            "display_prices_tax_incl": false,
            "is_catalog": false,
            "show_prices": true,
            "opt_in": {
                "partner": true
            },
            "quantity_discount": {
                "type": "discount",
                "label": "Discount"
            },
            "voucher_enabled": 0,
            "return_enabled": 0
        },
        "field_required": [],
        "breadcrumb": {
            "links": [{
                "title": "Home",
                "url": "https:\/\/infinitytemplate.com\/Prestashop\/PRS01\/PRS012\/en\/"
            }],
            "count": 1
        },
        "link": {
            "protocol_link": "https:\/\/",
            "protocol_content": "https:\/\/"
        },
        "time": 1619192342,
        "static_token": "9407b95b9bb08d999434e20be614587e",
        "token": "c3228a43270800c705bb6563d1e5ba3c"
    };
    </script>
    <script type="text/javascript">
    var kkpc_labels = ['days', 'hours', 'minutes', 'seconds'];
    var kkpc_labels_lang = {
        'days': 'days',
        'hours': 'hours',
        'minutes': 'minutes',
        'seconds': 'seconds'
    };
    var kkpc_show_weeks = 0;
    </script>
</head>

<body id="index" class="lang-en country-us currency-usd layout-full-width page-index tax-display-disabled">
    <!-- <div id="page-loader"></div> -->
    <main>
        <header id="header">
            <div class="header-banner">
            </div>
            <nav class="header-nav">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 left-nav">

                            <div class="language-selector dropdown js-dropdown">
                                <button data-toggle="dropdown" class=" btn-unstyle" aria-haspopup="true"
                                    aria-expanded="false" aria-label="Language dropdown">
                                    <span class="expand-more"><?php echo $lang['lang_en'] ?></span>
                                    <i class="material-icons expand-more"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="language-selector-label">
                                    <li class="current">
                                        <a href="<?=ROOT_URL?>/lang/en"
                                            class="dropdown-item" data-iso-code="en"><?php echo $lang['lang_en'] ?></a>
                                    </li>
                                    <li>
                                        <a href="<?=ROOT_URL?>/lang/ge"
                                            class="dropdown-item" data-iso-code="es"><?php echo $lang['lang_bs'] ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 center-nav">
                            <div id="kkheaderblock" class="clearfix">
                                <div id="kkcmsheader">
                                    <div class="kkheader-service"><?php echo $lang['title'] ?></div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 right-nav">
                     
                            <div id="_desktop_user_info">
                                <div class="user-info-inner">
                                <?php
                                                if (isset($_SESSION['suser'])&&$_SESSION['suser']!='') {
                                                    echo '<div class="logoutH">'.$lang['welcome'].', '.$_SESSION['suser'].'</div>';
                                                    echo '<ul class="user-info logout">
                                                    <li>
                                                           
                                                    <a href="'.ROOT_URL.'/?act=logout"
                                                            >
                                                            
                                                            <span class="hidden-sm-down">'.$lang['logout'].'</span>
                                                        </a></li>
                                                </ul>'
                                                
                                            ?> 
                                    
                                    <?php }else{?> 
                                        <div class="kkuserheading"></div>
                                    <ul class="user-info">
                                        <li>
                                               
                                        <a href="<?php echo ROOT_URL?>/login"
                                                title="Log in to your customer account" rel="nofollow">
                                                <i class="material-icons user">&#xE7FF;</i>
                                                <span class="hidden-sm-down"><?php echo $lang['Signin'] ?></span>
                                            </a></li>
                                    </ul>
                                    <?php } ?> 
                                </div>
                            </div>
                            <div id="_desktop_cart">
                                <div class="shopping-cart">
                                    <div class="blockcart cart-preview inactive"
                                        data-refresh-url="">
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
                                                    data-refresh-url="">
                                                    <span class="no-items"><?php echo $lang['emptycart'] ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            





                            <!-- end cart -->



                        </div>
                    </div>

                </div>
                </div>
            </nav>
            <div class="header-top">
                <div class="container">


                    <div class="desktop_logo">
                        <h1>
                            <a href="<?php echo ROOT_URL?>/home">
                                <img class="logo img-responsive" src="views/assets/img/Logo-hang-Ella.png"
                                    alt="Demo Shop">
                            </a>
                        </h1>
                    </div>


                    <div class="infinityheadercontact">

                        <div class="headercontact">

                            <div class="contact-inner">

                                <div class="subicon contacticon">
                                    <span class="hide">icon</span>
                                </div>

                                <div class="infinitycontact-dec">
                                    <div class="contact-title"><?=$lang['callus']?></div>
                                    <div class="contact-dec">+91 0123-456-789</div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="infinityheaderemail">

                        <div class="headercontact">

                            <div class="email-inner">

                                <div class="subicon emailicon">
                                    <span class="hide">icon</span>
                                </div>

                                <div class="infinitycontact-dec">

                                    <div class="email-title"><?php echo $lang['mailus'] ?></div>

                                    <div class="email-dec">admin@gmail.com</div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="mobile-overlay"></div>
                <div id="mobile_kktop_menu_wrapper" class="hidden-md-up">
                    <div id="top_menu_closer">
                        <div class="leftmenu-title">
                            <i class="material-icons"></i><?=$lang['menu']?>
                        </div>
                    </div>
                    <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
                    <div class="clearfix"></div>

                </div>
            </div>

            <!-----------------------------------End-Header-Top------------------------------------------------->
            <div class="position-static">
                <div class="container">
                    <div class="row">


                        <div class="menu js-top-menu hidden-sm-down" id="_desktop_top_menu">

                            <ul class="top-menu" id="top-menu" data-depth="0">
                                <?php 
                                    $this->model = new Model_home();
                                    $i =0;
                                    foreach ($getMenuParent as $row) {
                                        if($_SESSION['lang'] === 'en'){
                                            $namecha = $row['name'];
                                        }else{
                                            $namecha = $row['name_ge'];
                                        }
                                    
                                        if($row['parent'] ==0){
                                            $linkCha = ROOT_URL.'/'.$row['ctrl'];
                                        }

                                        $menuCon = '';
                                        $kq = '';
                                        foreach ($this->model->showDmCon($row['id']) as $con) {
                                          
                                            if($_SESSION['lang'] === 'en'){
                                                $namecon = $con['name'];
                                            }else{
                                                $namecon = $con['name_ge'];
                                            }
                                           
                                            $menuCon .= ' <li class="category" >
                                                            <a class="dropdown-item"
                                                                href="'.ROOT_URL.'/cate/'.$con['slug'].'-'.$con['id'].'/page-1'.'"
                                                                data-depth="2">
                                                                '.$namecon.'
                                                            </a>
                                                        </li>';
                                        }

                                        $kq .= '<li class="category" >
                                                    <a class="dropdown-item"
                                                        href="'.$linkCha.'"
                                                        data-depth="0">
                                                        <span class="float-xs-right hidden-md-up">
                                                            <span data-target="#top_sub_menu_70770'.$i.'" data-toggle="collapse"
                                                                class="navbar-toggler collapse-icons">
                                                                <i class="material-icons add">&#xE313;</i>
                                                                <i class="material-icons remove">&#xE316;</i>
                                                            </span>
                                                        </span>
                                                       '.$namecha.'
                                                    </a>';
                                                    if($menuCon){
                                                        $kq .= '<div class="popover sub-menu js-sub-menu collapse twocolumn"
                                                        id="top_sub_menu_70770'.$i.'">
                
                                                        <ul class="top-menu" data-depth="1">
                                                            
                                                            <li class="category" id="category-4'.$i.'">
                                                            
                                                            '.$menuCon.'
                                                            </li>
                                                        </ul>
                
                                                    </div>';
                                                    $i++;
                                                    }

                                                $kq .= '</li>';
                                                echo $kq;
                                    }
                                ?>


                            </ul>

                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div class="hidden-md-up text-sm-center mobile">
                        <div id="mobile_menu">
                            <div class="float-xs-left" id="menu-icon">
                                <div class="leftmenu-title">
                                    <i class="material-icons">&#xE5D2;</i><?=$lang['menu']?>
                                </div>
                            </div>
                            <div class="float-xs-right" id="_mobile_cart"></div>
                            <div class="float-xs-right" id="_mobile_search-widget"></div>
                            <div class="float-xs-right" id="_mobile_user_info"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
        </header>
        <!-- Header End -->

        <?php if (file_exists($viewFile)) require_once "$viewFile";?>


        <div class="container">
            <div id="_mobile_left_column" class=""></div>
            <div id="_mobile_right_column" class=""></div>
            <div class="clearfix"></div>
        </div>

        <footer id="footer">


            <div class="container">

                <div class="footer-before col-lg-3 col-sm-12">
                    <div class="container">
                        <div class="row">

                            <div id="kkstoreinfo" class="col-lg-12 links footer-block hb-animate-element left-to-right">

                                <div class="title  hidden-md-up collapsed" data-target="#kkstoreinfo-container"
                                    data-toggle="collapse">

                                    <span class="h3"><?=$lang['aboutus']?></span>

                                    <span class="float-xs-right">

                                        <span class="navbar-toggler collapse-icons">
                                            <i class="material-icons add">&#xE145;</i>
                                            <i class="material-icons remove">&#xE15B;</i>
                                        </span>

                                    </span>

                                </div>

                                <div id="kkstoreinfo-container" class="kkstoreinfo-inner collapse footer-dropdown">
                                    <a href="<?php echo ROOT_URL?>/home" class="store-logo">
                                        <img src="views/assets/img/Logo-hang-Ella.png"
                                            alt="Logo-hang-Ella.png">
                                    </a>
                                    <div class="store-description">
                                        <p>Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>
                    

                        </div>
                    </div>
                </div>

                <div class="footer-container col-lg-9 col-sm-12">
                    <div class="container">
                        <div class="row">

                            <div id="kkservice-block"
                                class="kkservicecms links col-lg-12 col-xs-12 clearfix  hb-animate-element right-to-left">

                                <div class="title  hidden-md-up" data-toggle="collapse"
                                    data-target="#kkservice_block_container">
                                    <span class="h3 block-contact-title"><?=$lang['oursv']?></span>
                                    <span class="float-xs-right">
                                        <span class="navbar-toggler collapse-icons">
                                            <i class="material-icons add">&#xE145;</i>
                                            <i class="material-icons remove">&#xE15B;</i>
                                        </span>
                                    </span>
                                </div>


                                <div class="container">
                                    <div id="kkservice_block_container" class="service-inner collapse row">
                                        <div class="subtitle-part subtitle-part1 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="serviceblock subbanner-part-maininnner1">
                                                <div class="subicon subicon1"><span class="hide">icon</span></div>
                                                <div class="servicedec">
                                                    <div class="subtitile subtitile1"><?php echo $lang['freeship'] ?></div>
                                                    <div class="subtitile subtitile2"><?php echo $lang['orderover99'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="subtitle-part subtitle-part2 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="serviceblock subbanner-part-maininnner2">
                                                <div class="subicon subicon2"><span class="hide">icon</span></div>
                                                <div class="servicedec">
                                                    <div class="subtitile subtitile1"> <?php echo $lang['bigsave'] ?></div>
                                                    <div class="subtitile subtitile2"> <?php echo $lang['moneyback'] ?></div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="subtitle-part subtitle-part3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="serviceblock subbanner-part-maininnner3">
                                                <div class="subicon subicon3"><span class="hide">icon</span></div>
                                                <div class="servicedec">
                                                    <div class="subtitile subtitile1"> <?php echo $lang['gift'] ?></div>
                                                    <div class="subtitile subtitile2"> <?php echo $lang['freegift'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="subtitle-part subtitle-part4 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="serviceblock subbanner-part-maininnner4">
                                                <div class="subicon subicon4"><span class="hide">icon</span></div>
                                                <div class="servicedec">
                                                    <div class="subtitile subtitile1"><?php echo $lang['support'] ?></div>
                                                    <div class="subtitile subtitile2"><?php echo $lang['freesupport'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 linklist links">
                                <div class="row">
                                    <div class="col-md-6 wrapper hb-animate-element bottom-to-top">
                                        <h3 class="h3 hidden-sm-down"><?php echo $lang['product'] ?></h3>
                                        <div class="title  hidden-md-up" data-target="#footer_sub_menu_8589"
                                            data-toggle="collapse">
                                            <span class="h3"><?php echo $lang['product'] ?></span>
                                            <span class="float-xs-right">
                                                <span class="navbar-toggler collapse-icons">
                                                    <i class="material-icons add">&#xE145;</i>
                                                    <i class="material-icons remove">&#xE15B;</i>
                                                </span>
                                            </span>
                                        </div>
                                        <ul id="footer_sub_menu_8589" class="collapse">
                                            <li>
                                                <a id="link-product-page-prices-drop-1" class="cms-page-link"
                                                    href="#"
                                                    title="Our special products">
                                                    <?php echo $lang['priceshop'] ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="link-product-page-new-products-1" class="cms-page-link"
                                                    href="#"
                                                    title="Our new products">
                                                    <?php echo $lang['newpro'] ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="link-product-page-best-sales-1" class="cms-page-link"
                                                    href="#"
                                                    title="Our best sales">
                                                    <?php echo $lang['bestsell'] ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="link-static-page-contact-1" class="cms-page-link"
                                                    href="<?=ROOT_URL?>/contact"
                                                    title="Use our form to contact us">
                                                    <?php echo $lang['contact'] ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 wrapper hb-animate-element bottom-to-top">
                                        <h3 class="h3 hidden-sm-down"><?php echo $lang['ourcompany'] ?></h3>
                                        <div class="title  hidden-md-up" data-target="#footer_sub_menu_3249"
                                            data-toggle="collapse">
                                            <span class="h3"><?php echo $lang['ourcompany'] ?></span>
                                            <span class="float-xs-right">
                                                <span class="navbar-toggler collapse-icons">
                                                    <i class="material-icons add">&#xE145;</i>
                                                    <i class="material-icons remove">&#xE15B;</i>
                                                </span>
                                            </span>
                                        </div>
                                        <ul id="footer_sub_menu_3249" class="collapse">
                                            <li>
                                                <a id="link-cms-page-4-2" class="cms-page-link"
                                                    href="<?=ROOT_URL?>/aboutus"
                                                    title="Learn more about us">
                                                    <?php echo $lang['aboutus'] ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="link-cms-page-5-2" class="cms-page-link"
                                                    href="<?=ROOT_URL?>/term-of-services"
                                                    title="Our secure payment method">
                                                    <?php echo $lang['termofsv'] ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="link-static-page-sitemap-2" class="cms-page-link"
                                                    href="<?=ROOT_URL?>/impressum"
                                                    title="Lost ? Find what your are looking for">
                                                    <?php echo $lang['Impressum'] ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="link-static-page-my-account-2" class="cms-page-link"
                                                    href="<?=ROOT_URL?>/privacy"
                                                    title="">
                                                    <?php echo $lang['privacy'] ?> 
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="block_myaccount_infos" class="col-lg-3 links hb-animate-element bottom-to-top">
                                <h3 class="myaccount-title hidden-sm-down">
                                    <a class="text-uppercase"
                                        href="#"
                                        rel="nofollow">
                                        <?php echo $lang['youracc'] ?>
                                    </a>
                                </h3>
                                <div class="title  hidden-md-up" data-target="#footer_account_list"
                                    data-toggle="collapse">
                                    <span class="h3"><?php echo $lang['youracc'] ?></span>
                                    <span class="float-xs-right">
                                        <span class="navbar-toggler collapse-icons">
                                            <i class="material-icons add">&#xE145;</i>
                                            <i class="material-icons remove">&#xE15B;</i>
                                        </span>
                                    </span>
                                </div>
                                <ul class="account-list collapse" id="footer_account_list">
                                    <li>
                                        <a href="#"
                                            title="Personal info" rel="nofollow">
                                            <?php echo $lang['personalinfo'] ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            title="Orders" rel="nofollow">
                                            <?php echo $lang['order'] ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            title="Credit slips" rel="nofollow">
                                            <?php echo $lang['credit'] ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            title="Addresses" rel="nofollow">
                                            <?php echo $lang['address'] ?>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="block-contact contact-rich col-lg-3 links hb-animate-element bottom-to-top">
                                <h3 class="hidden-sm-down"><?php echo $lang['storeinfo'] ?></h3>
                                <div class="title  hidden-md-up" data-toggle="collapse" data-target="#contact-footer">
                                    <span class="h3 block-contact-title"><?php echo $lang['storeinfo'] ?></span>
                                    <span class="float-xs-right">
                                        <span class="navbar-toggler collapse-icons">
                                            <i class="material-icons add">&#xE145;</i>
                                            <i class="material-icons remove">&#xE15B;</i>
                                        </span>
                                    </span>
                                </div>
                                <ul id="contact-footer" class="collapse">
                                    <li class="block">
                                        <div class="icon"><i class="material-icons">&#xE55F;</i></div>
                                        <div class="data">Demo Shop<br /><?php echo $lang['unitedS'] ?></div>
                                    </li>
                                    <li class="block">
                                        <div class="data">
                                            <div class="icon"><i class="material-icons">&#xE0CD;</i></div>
                                            <span class="title"><?php echo $lang['callus'] ?></span> <span>+34 123-4567-890</span>
                                        </div>
                                    </li>
                                    <li class="block">
                                        <div class="data">
                                        </div>
                                    </li>
                                    <li class="block">
                                        <div class="data">
                                            <div class="icon"><i class="material-icons">&#xE158;</i></div>
                                            <a href="mailto:admin@gmail.com">admin@gmail.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                          

                        </div>
                    </div>
                </div>

            </div>

            <div class="footer-after">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-xs-12 hb-animate-element left-to-right">
                            <p class="footer-aftertext ">

                                <a class="_blank " href="#" target="_blank">
                                    © 2021 -shop make by Nhan-Anh
                                </a>

                            </p>
                        </div>

                        

                    </div>
                </div>
            </div>
        </footer>
    </main>
    <a id="back-to-top" title="Back to top" class=""><i class="material-icons arrow-up">&#xE316;</i></a>
    <div class="newsletter-pop">
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="views/assets/js/SweetAlert2.js"></script>
    <script type="text/javascript" src="views/assets/js/bottom-b769945.js"></script>
    <script src="views/assets/js/jquery.flexslider.js"></script>
    <script src="views/assets/js/jquery.addcart.js"></script>
    
    <script>
    $(window).load(function() {
        if ($('.flexslider').length > 0) {
            $('.flexslider').flexslider({
                slideshowSpeed: $('.flexslider').data('interval'),
                pauseOnHover: $('.flexslider').data('pause'),
                animation: 'fade',
                controlNav: !0,
            })
        }
    });
    </script>



</body>

</html>
<!-- Footer End-->