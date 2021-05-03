

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

                                    <h4 class="header-title mt-0 mb-3">Sản phẩm</h4>

                                    <form data-parsley-validate id="formadd" novalidate onsubmit="return submitForm()"  method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">Image</label><span style="color:red;"> (*)</span>
                                            <br>
                                            <?php
                                                if(is_file(PATH_IMG_SITE.explode(",",$oneRecode['image_list'])[0])){
                                                    $img = PATH_IMG_SITE.explode(",",$oneRecode['image_list'])[0];
                                                }else{
                                                    $img = PATH_IMG_SITE.'logo.png';
                                                }
                                            ?>
                                            <img width="200" style="object-fit: cover;" height="200" src="<?= $img?>" alt="">
                                            <br>
                                           <input class="mt-2" type="file" name="img[]" multiple>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tên sản phẩm</label><span style="color:red;"> (*)</span>
                                                    <input type="text" name="name_product"  parsley-trigger="change" required
                                                        placeholder="Type name product" value="<?=$oneRecode['name']?>" class="form-control" id="userName">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                                    <label for="">Giá</label>
                                                    <input  type="number" name="price" parsley-trigger="change" id="discount"
                                                        placeholder="Type rice" value="<?=$oneRecode['price']?>" class="form-control" >
                                                </div>    
                                            </div>
                                        </div>
                                       <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Giảm giá</label>
                                                    <input  type="number" name="discount" parsley-trigger="change" 
                                                        placeholder="Type discount (%)" value="<?=$oneRecode['discount']?>" class="form-control" id="emailAddress">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Màu</label> 
                                                    <input type="text" class="form-control" value="<?=$oneRecode['color']?>" name="color"  placeholder="#000,#fff,#999,..." id="color">
                                                    <span id="ErrorColor"></span>
                                                </div> 
                                            </div>
                                        </div>

                                       
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Danh mục</label><span style="color:red;"> (*)</span>
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
                                            <?php 
                                                if($oneRecode['size']!=''){
                                                    $arrsize = explode(',',$oneRecode['size']);
                                                    
                                                }
                                            ?>
                                            <div class="col-lg-6">
                                            <div class="form-group"><label for="">Kích cỡ</label><br/></div>
                                                <div class="form-group radio">
                                                    <div class="input-radio size">
                                                        <label for="size1 ">S</label>
                                                        <input type="checkbox" name="size1" id="size1" value="S" <?php 
                                                        if(is_array($arrsize)){
                                                            for ($i=0; $i < count($arrsize) ; $i++) { 
                                                                if($arrsize[$i] == 'S'){
                                                                    
                                                                    echo 'checked';
                                                                }
                                                            } 
                                                        }
                                                        ?>/>
                                                    </div>
                                                    <div class="input-radio size">
                                                        <label for="size2">M</label>
                                                        <input type="checkbox" name="size2" id="size2" value="M" <?php 
                                                        if(is_array($arrsize)){
                                                            for ($i=0; $i < count($arrsize); $i++) { 
                                                                if($arrsize[$i] == 'M'){
                                                                    echo 'checked';
                                                                }
                                                            } 
                                                        }
                                                        ?>/>
                                                    </div>
                                                    <div class="input-radio size">
                                                        <label for="size3">L</label>
                                                        <input type="checkbox" name="size3" id="size3" value="L" <?php 
                                                        if(is_array($arrsize)){
                                                            for ($i=0; $i < count($arrsize); $i++) { 
                                                                if($arrsize[$i] == 'L'){
                                                                    echo 'checked';
                                                                }
                                                            } 
                                                        }
                                                        ?>/>
                                                    </div>
                                                    <div class="input-radio size">
                                                        <label for="size4">XL</label>
                                                        <input type="checkbox" name="size4" id="size4" value="XL" 
                                                        <?php 
                                                        if(is_array($arrsize)){
                                                            for ($i=0; $i < count($arrsize); $i++) { 
                                                                if($arrsize[$i] == 'XL'){
                                                                    echo 'checked';
                                                                }
                                                            } 
                                                        }
                                                        ?>/>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <input id="remember-2" type="checkbox" name="hot" <?=($oneRecode['hot']==1) ? 'checked' : '';?> data-parsley-multiple="remember-1">
                                                        <label for="remember-2">Hot ? </label>
                                                    </div>
                                                </div>          
                                            </div>
                                            
                                        </div>
                                        <label for="">Mô tả</label>
                                        <textarea id="editor1"  style="height: 300px;width:100%" name="Description" >
                                        
                                        <?=$oneRecode["description"]?>
                                        </textarea>
                                        
                                        <label for="">Thuộc tính</label>
                                        <textarea id="editor2" style="height: 300px;width:100%" name="Properties" >
                                        <?=$oneRecode["properties"]?>
                                        </textarea>
                                        

                                        <div class="form-group text-right mb-0 mt-5">
                                            <input type="submit" name="them" class="btn btn-primary waves-effect waves-light mr-1" value="Sửa">
                                           <a href="<?=ROOT_URL?>/admin/?ctrl=product&act=index" clas="btn btn-secondary waves-effect waves-light">Hủy</a>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->
                        </div>
                    </div>
                </div>
            </div>