

<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-10">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Product</h4>

                                    <form data-parsley-validate id="formadd" novalidate onsubmit="return submitForm()" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <?php if($message) echo "<h2 class='text-danger'>".$mesage."</h2>";   ?>    
                                        </div>
                                        <div class="boxform boxshowimg ">
                                            <div class="ouputimg">
                                                <br>
                                                <div class="output-fet"><output id="list"></output></div>
                                                <a href="#" id="clear">Xoá</a>
                                            </div>
                                        
                                        </div>
                                        <div class="form-group">
                                            <div class="inputhinh">
                                            <label for="">Image Url</label><span style="color:red;"> (*)</span>
                                           <input type="file" name="img[]" style=" position: absolute;" class="imagefet" id="control" multiple>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Name Product</label><span style="color:red;"> (*)</span>
                                                    <input type="text" name="name_product"  parsley-trigger="change" required
                                                        placeholder="Type name product" value="<?=$oneRecode['TenDT']?>" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Name (German)</label><span style="color:red;"> (*)</span>
                                                    <input  type="text" name="name_product_ge" parsley-trigger="change" required
                                                        placeholder="Type name product GE" value="" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                       <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Discount</label>
                                                    <input  type="number" name="discount" min="0" max="100" parsley-trigger="change" 
                                                        placeholder="Type discount (%)" value="<?=$oneRecode['GiaKM']?>" class="form-control" id="discount">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Color</label>
                                                    <input type="text" class="form-control" value="<?=$oneRecode['color']?>" name="color" id="color"  placeholder="#000,#fff,#999,...">
                                                    <span id="ErrorColor"></span>
                                                </div> 
                                            </div>
                                        </div>

                                        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Category</label><span style="color:red;"> (*)</span>
                                                    <select class="form-control" name="IDCate">
                                                        <?php 
                                                            foreach ($producer as $row) {
                                                                if($producer['id'] == $oneRecode['id']){
                                                                    echo '<option value='.$row['id'].' selected>'.$row['name'].'</option>';
                                                                }else{
                                                                    echo '<option value='.$row['id'].'>'.$row['name'].'</option>';
                                                                }
                                                            }   
                                                        ?>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                                    <label for="">Price</label>
                                                    <input  type="number" name="price" parsley-trigger="change" id="discount"
                                                        placeholder="Type rice" value="<?=$oneRecode['Gia']?>" class="form-control" >
                                                </div>    
                                            </div>

                                        </div>
                                     
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <input id="remember-2" type="checkbox" name="hot" value="1" <?=($oneRecode['hot']==1) ? 'checked' : '';?> data-parsley-multiple="remember-1">
                                                        <label for="remember-2">Hot ? </label>
                                                    </div>
                                                </div>          
                                            </div>
                                            <div class="col-lg-6">
                                            <div class="form-group"><label for="">Size</label><br/></div>
                                                <div class="form-group radio">
                                                    <div class="input-radio size">
                                                        <label for="size1 ">S</label>
                                                        <input type="checkbox" name="size1" id="size1" value="S" />
                                                    </div>
                                                    <div class="input-radio size">
                                                        <label for="size2">M</label>
                                                        <input type="checkbox" name="size2" id="size2" value="M" />
                                                    </div>
                                                    <div class="input-radio size">
                                                        <label for="size3">L</label>
                                                        <input type="checkbox" name="size3" id="size3" value="L" />
                                                    </div>
                                                    <div class="input-radio size">
                                                        <label for="size4">XL</label>
                                                        <input type="checkbox" name="size4" id="size4" value="XL" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        
                                        <label for="">Description</label>
                                        <textarea id="editor1"  style="height: 300px;width:100%" name="Description" >
                                        
                                        <?=$oneRecode["description"]?>
                                        </textarea>
                                        <label for="">Description (German)</label>
                                        <textarea id="editor3"  style="height: 300px;width:100%" name="Description1" >
                                        
                                        <?=$oneRecode["description"]?>
                                        </textarea>
                                        <br>
                                        <label for="">Properties</label>
                                        <textarea id="editor2" style="height: 300px;width:100%" name="Properties" >
                                           
                                        </textarea>
                                      
                                        <div class="form-group text-right mb-0 mt-5">
                                            <input type="submit" name="them" class="btn btn-primary waves-effect waves-light mr-1" value="ADD" id='add_product'>
                                            <a href="<?=ROOT_URL?>/admin/?ctrl=product&act=index" clas="btn btn-secondary waves-effect waves-light">CANCEL</a>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->
                        </div>
                    </div>
                </div>
            </div>