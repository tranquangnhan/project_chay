<aside id="notifications">
         <div class="container"></div>
</aside>

<section id="wrapper">
         <div class="container">
                  <div class="row">
                           <div id="left-column" class="col-xs-12 col-sm-3">
                                    <div class="contact-rich">
                                             <h4 class="text-uppercase"><?=$lang['storeinfo']?></h4>
                                             <div class="block">
                                                      <div class="icon"><i class="material-icons">&#xE55F;</i></div>
                                                      <div class="data">
                                                      Steinbreite 17a  
37603 Holzminden<br />
                                                               <!-- <?=$lang['unitedS']?> -->
                                                      </div>
                                             </div>

                                             <div class="block">
                                                      <div class="icon"><i class="material-icons">&#xE0CD;</i></div>
                                                      <div class="data">
                                                      <?=$lang['callus']?><br />
                                                               <a href="tel:+34 123-4567-890">+49 176 46778998</a>
                                                      </div>
                                             </div>

                                             <div class="block">
                                                      <div class="icon"><i class="material-icons">&#xE158;</i></div>
                                                      <div class="data email"><?=$lang['emailus']?><br /></div>
                                                      <a href="mailto:admin@gmail.com">hangella1506@gmail.com </a>
                                             </div>
                                    </div>
                           </div>

                           <div id="content-wrapper" class="left-column col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                    <nav data-depth="2" class="breadcrumb hidden-sm-down">
                                             <div class="container">
                                                      <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                                                               <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                                        <a itemprop="item" href="#">
                                                                                 <span itemprop="name"><?=$lang['homeproduct']?></span>
                                                                        </a>
                                                                        <meta itemprop="position" content="1" />
                                                               </li>

                                                               <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                                        <a itemprop="item" href="#">
                                                                                 <span itemprop="name">Contact us</span>
                                                                        </a>
                                                                        <meta itemprop="position" content="2" />
                                                               </li>
                                                      </ol>
                                             </div>
                                    </nav>

                                    <section id="main">
                                             <section id="content" class="page-content card card-block">
                                                      <section class="contact-form">
                                                               <form data-parsley-validate novalidate method="post" enctype="multipart/form-data">
                                                                        <section class="form-fields">
                                                                                 <div class="form-group row">
                                                                                          <div class="col-md-9 col-md-offset-3">
                                                                                                   <h3><?=$lang['contactus']?></h3>
                                                                                          </div>
                                                                                 </div>

                                                                                 <div class="form-group row">
                                                                                          <label class="col-md-3 form-control-label"><?=$lang['subject']?></label>
                                                                                          <div class="col-md-6">
                                                                                                   <select name="id_contact" class="form-control form-control-select">
                                                                                                            <option value="2"><?=$lang['customersv']?></option>
                                                                                                            <option value="1"><?=$lang['webmas']?></option>
                                                                                                   </select>
                                                                                          </div>
                                                                                 </div>

                                                                                 <div class="form-group row">
                                                                                          <label class="col-md-3 form-control-label"><?=$lang['emailadd']?></label>
                                                                                          <div class="col-md-6">
                                                                                                   <input class="form-control" name="email" type="email" value="" placeholder="<?=$lang['emailadd']?>" />
                                                                                          </div>
                                                                                 </div>

                                                                                 <div class="form-group row">
                                                                                          <label class="col-md-3 form-control-label"><?=$lang['fullname']?></label>
                                                                                          <div class="col-md-6">
                                                                                                   <input type="text" class="form-control"placeholder="<?=$lang['fullname']?>"  name="name" class="filestyle"  />
                                                                                          </div>
                                                                                          
                                                                                 </div>

                                                                                 <div class="form-group row">
                                                                                          <label class="col-md-3 form-control-label"><?=$lang['mes']?></label>
                                                                                          <div class="col-md-9">
                                                                                                   <textarea class="form-control" name="message" placeholder="<?=$lang['mes']?>" rows="3"></textarea>
                                                                                          </div>
                                                                                 </div>
                                                                                 <div class="form-group row">
                                                                                 <?php
                                                                                 if($nullerror && $nullerror!=''){
                                                                                    echo '<span style="color:red;margin-left:270px;">'.$nullerror.'</span>';
                                                                                }
                                                                                  if($checkloginwarn && $checkloginwarn!=''){
                                                                                    echo '<span style="color:red;">'.$checkloginwarn.'</span>';
                                                                                  }
                                                                                 ?>
                                                                                 </div>
                                                                        </section>
                                                                       
                                                                        <footer class="form-footer text-sm-right">
                                                                                 <style>
                                                                                          input[name="url"] {
                                                                                                   display: none !important;
                                                                                          }
                                                                                 </style>
                                                                                 <input type="text" name="url" value="" />
                                                                                 <input type="hidden" name="token" value="5db548bd14723731299a8f5ce7a0f63a" />
                                                                                 <input class="btn btn-primary" type="submit" name="submitMessage" value="Send" />
                                                                        </footer>
                                                               </form>
                                                      </section>
                                             </section>

                                             <footer class="page-footer">
                                                      <!-- Footer content -->
                                             </footer>
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
