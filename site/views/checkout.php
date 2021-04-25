


    
      
<aside id="notifications">
  <div class="container">
    
    
    
      </div>
</aside>
    

    <section id="wrapper">
      
      
            <nav data-depth="1" class="breadcrumb hidden-sm-down">
  <div class="container">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
      
          
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/">
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
              
                  
  <section  id    = "checkout-personal-information-step"
            class = "checkout-step -current -reachable js-current-step"
  >
    <h1 class="step-title h3">
      <i class="material-icons rtl-no-flip done">&#xE876;</i>
      <span class="step-number">1</span>
      Personal Information
      <!-- <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> Edit</span> -->
    </h1>

    <div class="content">
      
  

      <ul class="nav nav-inline my-2" role="tablist">
      <li class="nav-item">
        <a
          class="nav-link active"
          data-toggle="tab"
          href="#checkout-guest-form"
          role="tab"
          aria-controls="checkout-guest-form"
           aria-selected="true"          >
                      Order as a guest
                  </a>
      </li>

      <li class="nav-item">
        <span class="nav-separator"> | </span>
      </li>

      <li class="nav-item">
        <a
          class="nav-link "
          data-link-action="show-login-form"
          data-toggle="tab"
          href="#checkout-login-form"
          role="tab"
          aria-controls="checkout-login-form"
                  >
          Sign in
        </a>
      </li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane active" id="checkout-guest-form" role="tabpanel" >
        
  
      

<form action="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/order" id="customer-form" class="js-customer-form" method="post">
  <section>
    
              
      
          
  
    <input type="hidden" name="id_customer" value="">
  


        
  
              
      
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Social title
          </label>
    <div class="col-md-6 form-control-valign">

      
        
                      <label class="radio-inline">
              <span class="custom-radio">
                <input
                  name="id_gender"
                  type="radio"
                  value="1"
                                                    >
                <span></span>
              </span>
              Mr.
            </label>
                      <label class="radio-inline">
              <span class="custom-radio">
                <input
                  name="id_gender"
                  type="radio"
                  value="2"
                                                    >
                <span></span>
              </span>
              Mrs.
            </label>
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


        
  
              
      
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              First name
          </label>
    <div class="col-md-6">

      
        
          <input
            class="form-control"
            name="firstname"
            type="text"
            value=""
                                    required          >
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


        
  
              
      
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Last name
          </label>
    <div class="col-md-6">

      
        
          <input
            class="form-control"
            name="lastname"
            type="text"
            value=""
                                    required          >
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


        
  
              
      
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Email
          </label>
    <div class="col-md-6">

      
        
          <input
            class="form-control"
            name="email"
            type="email"
            value=""
                                    required          >
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


        
  
              
        <p>
        <span class="font-weight-bold">Create an account</span> <span class="font-italic">(optional)</span>
        <br>
        <span class="text-muted">And save time on your next order!</span>
      </p>
      
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Password
          </label>
    <div class="col-md-6">

      
        
          <div class="input-group js-parent-focus">
            <input
              class="form-control js-child-focus js-visible-password"
              name="password"
              title="At least 5 characters long"
              type="password"
              value=""
              pattern=".{5,}"
                          >
            <span class="input-group-btn">
              <button
                class="btn"
                type="button"
                data-action="show-password"
                data-text-show="Show"
                data-text-hide="Hide"
              >
                Show
              </button>
            </span>
          </div>
        

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
                 Optional
              
    </div>
  </div>


        
  
              
      
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Birthdate
          </label>
    <div class="col-md-6">

      
        
          <input
            class="form-control"
            name="birthday"
            type="text"
            value=""
            placeholder="MM/DD/YYYY"                                  >
                      <span class="form-control-comment">
              (E.g.: 05/31/1970)
            </span>
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
                 Optional
              
    </div>
  </div>


        
  
              
      
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
          </label>
    <div class="col-md-6">

      
        
          <span class="custom-checkbox">
            <input name="optin" type="checkbox" value="1"  >
            <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
            <label>Receive offers from our partners</label >
          </span>
        

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


        
  
              
      
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
          </label>
    <div class="col-md-6">

      
        
          <span class="custom-checkbox">
            <input name="newsletter" type="checkbox" value="1"  >
            <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
            <label>Sign up for our newsletter<br><em>Wants to get latest updates! sign up for free.</em></label >
          </span>
        

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


        
  
            
    
  </section>

  
    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      
    <button
      class="continue btn btn-primary float-xs-right"
      name="continue"
      data-link-action="register-new-customer"
      type="submit"
      value="1"
    >
        Continue
    </button>

    </footer>
  

</form>


      </div>
      <div class="tab-pane " id="checkout-login-form" role="tabpanel" aria-hidden="true">
        

  
      

  <form id="login-form" action="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/order" method="post">

    <section>
      
                  
            
  
    <input type="hidden" name="back" value="">
  


          
                  
            
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Email
          </label>
    <div class="col-md-6">

      
        
          <input
            class="form-control"
            name="email"
            type="email"
            value=""
                                    required          >
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


          
                  
            
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Password
          </label>
    <div class="col-md-6">

      
        
          <div class="input-group js-parent-focus">
            <input
              class="form-control js-child-focus js-visible-password"
              name="password"
              title="At least 5 characters long"
              type="password"
              value=""
              pattern=".{5,}"
              required            >
            <span class="input-group-btn">
              <button
                class="btn"
                type="button"
                data-action="show-password"
                data-text-show="Show"
                data-text-hide="Hide"
              >
                Show
              </button>
            </span>
          </div>
        

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


          
              
      <div class="forgot-password">
        <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/password-recovery" rel="nofollow">
          Forgot your password?
        </a>
      </div>
    </section>

    
      <footer class="form-footer text-sm-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        
  <button
    class="continue btn btn-primary float-xs-right"
    name="continue"
    data-link-action="sign-in"
    type="submit"
    value="1"
  >
    Continue
  </button>

      </footer>
    

  </form>


      </div>
    </div>


  
    </div>
  </section>


  
  



              
            </div>
            <div class="cart-grid-right col-xs-12 col-lg-4">

              
                <section id="js-checkout-summary" class="card js-cart" data-refresh-url="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/cart?ajax=1&action=refresh">
  <div class="card-block">
    
      
    

    
      <div class="cart-summary-products">

        <p>2 items</p>

        <p>
          <a href="#" data-toggle="collapse" data-target="#cart-summary-product-list">
            show details
            <i class="material-icons">expand_more</i>
          </a>
        </p>

        
          <div class="collapse" id="cart-summary-product-list">
            <ul class="media-list">
                              <li class="media">
  <div class="media-left">
    <a href="https://infinitytemplate.com/Prestashop/PRS01/PRS012/en/home-accessories/15-pack-mug-framed-poster.html" title="Pack Mug + Esse Cillum Dolore">
      <img class="media-object" src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/46-cart_default/pack-mug-framed-poster.jpg" alt="Pack Mug + Esse Cillum Dolore">
    </a>
  </div>
  <div class="media-body">
    <span class="product-name">Pack Mug + Esse Cillum Dolore</span>
    <span class="product-quantity">x2</span>
    <span class="product-price float-xs-right">$15.99</span>
    
  
       <br/>

  </div>

</li>
                          </ul>
          </div>
        
      </div>
    

  
    

            <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-products">

        <span class="label">
            Subtotal
        </span>

        <span class="value">
          $31.98
        </span>
      </div>
                      <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-shipping">

        <span class="label">
            Shipping
        </span>

        <span class="value">
          $7.00
        </span>
      </div>
            


  

  </div>

  
    
<hr class="separator">
<div class="card-block ">

  
    <div class="cart-summary-line cart-total">
      <span class="label">Total (tax excl.)</span>
      <span class="value">$38.98</span>
    </div>
  

  
    <div class="cart-summary-line">
      <span class="label sub">Taxes</span>
      <span class="value sub">$0.00</span>
    </div>
  

</div>
<hr class="separator">  
  <hr class="separator">
  
      

</section>              

                <div id="block-reassurance">
    <ul>
              <li>
          <div class="block-reassurance-item">
            <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png" alt="Security policy (edit with Customer reassurance module)">
            <span class="h6">Security policy (edit with Customer reassurance module)</span>
          </div>
        </li>
              <li>
          <div class="block-reassurance-item">
            <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/blockreassurance/img/ic_local_shipping_black_36dp_1x.png" alt="Delivery policy (edit with Customer reassurance module)">
            <span class="h6">Delivery policy (edit with Customer reassurance module)</span>
          </div>
        </li>
              <li>
          <div class="block-reassurance-item">
            <img src="https://infinitytemplate.com/Prestashop/PRS01/PRS012/modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png" alt="Return policy (edit with Customer reassurance module)">
            <span class="h6">Return policy (edit with Customer reassurance module)</span>
          </div>
        </li>
          </ul>
  </div>

            </div>
          </div>
        </section>
      
      </div>
      
    </section>

    