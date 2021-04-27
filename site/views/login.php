<aside id="notifications">
         <div class="container"></div>
</aside>

<section id="wrapper">
         <div class="container">
                  <div class="row">
                           <div id="content-wrapper" class="col-xs-12">
                                    <section id="main" class="login" >
                                             <header class="page-header">
                                                      <h1 class="kk-innertitle">
                                                               <?=$lang['login']?>
                                                      </h1>
                                             </header>

                                             <section id="content" class="page-content card card-block">
                                                      <section class="login-form">
                                                               <form id="login-form" data-parsley-validate novalidate method="post">
                                                                        <section>
                                                                                 <input type="hidden" name="back" value="my-account" />

                                                                                 <div class="form-group row">
                                                                                          <label class="col-md-3 form-control-label required">
                                                                                          <?=$lang['email']?>
                                                                                          </label>
                                                                                          <div class="col-md-6">
                                                                                                   <input class="form-control" name="email" type="email" value="" required />
                                                                                          </div>

                                                                                          <div class="col-md-3 form-control-comment"></div>
                                                                                 </div>

                                                                                 <div class="form-group row">
                                                                                          <label class="col-md-3 form-control-label required">
                                                                                          <?=$lang['pass']?>
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
                                                                                                                     required
                                                                                                            />
                                                                                                            <span class="input-group-btn">
                                                                                                                     <button class="btn" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
                                                                                                                              Show
                                                                                                                     </button>
                                                                                                            </span>
                                                                                                   </div>
                                                                                          </div>

                                                                                         
                                                                                 </div>
                                                                                 <?php
                                                                                 if($emailexist && $emailexist!=''){
                                                                                    echo '<span style="color:red;">'.$emailexist.'</span>';
                                                                                }
                                                                                  if($checkloginwarn && $checkloginwarn!=''){
                                                                                    echo '<span style="color:red;">'.$checkloginwarn.'</span>';
                                                                                  }
                                                                                 ?>
                                                                                    
                                                                                 <div class="forgot-password">
                                                                                          <a href="#" rel="nofollow">
                                                                                          <?=$lang['forgotpass']?>
                                                                                          </a>
                                                                                 </div>
                                                                        </section>

                                                                        <footer class="form-footer text-sm-center clearfix">
                                                                                 <input type="hidden" name="submitLogin" value="1" />

                                                                                 <button id="submit-login" class="btn btn-primary" name="login" data-link-action="sign-in" type="submit" class="form-control-submit">
                                                                                 <?=$lang['Signin']?>
                                                                                 </button>
                                                                        </footer>
                                                               </form>
                                                      </section>
                                                      <hr />

                                                      <div class="no-account">
                                                               <a href="<?php echo ROOT_URL?>/register" data-link-action="display-register-form">
                                                               <?=$lang['noonesignup']?>
                                                               </a>
                                                      </div>
                                             </section>
                                    </section>
                           </div>
                  </div>
         </div>
</section>

<div class="container">
         <div id="_mobile_left_column" class=""></div>
         <div id="_mobile_right_column" class=""></div>
         <div class="clearfix"></div>
</div>
