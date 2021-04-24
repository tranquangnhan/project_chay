

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

                                    <form data-parsley-validate id="formadd" novalidate method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <?php if($message) echo "<h2 class='text-danger'>".$mesage."</h2>";   ?>    
                                        </div>
                                        <div class="form-group">
                                            <label for="">Image Url</label>
                                           <input type="file" name="img[]" multiple>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Name Product</label>
                                                    <input type="text" name="name_product"  parsley-trigger="change" required
                                                        placeholder="Type name product" value="<?=$oneRecode['TenDT']?>" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Price</label>
                                                    <input  type="number" name="price" parsley-trigger="change" required
                                                        placeholder="Type rice" value="<?=$oneRecode['Gia']?>" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                       <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Discount</label>
                                                    <input  type="number" name="discount" parsley-trigger="change" required
                                                        placeholder="Type discount (%)" value="<?=$oneRecode['GiaKM']?>" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Color</label>
                                                    <input type="text" class="form-control" value="<?=$oneRecode['color']?>" name="color"  placeholder="Size">
                                                </div> 
                                            </div>
                                        </div>

                                        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Category</label>
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
                                                    <label for="">Size</label>
                                                    <input type="text" class="form-control" value="<?=$oneRecode['size']?>" name="size"  placeholder="Size">
                                                </div> 
                                            </div>
                                        </div>
                                     
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <input id="remember-2" type="checkbox" name="hot" value="1" <?=($oneRecode['hot']==1) ? 'checked' : '';?> data-parsley-multiple="remember-1">
                                                        <label for="remember-2">Hot ? </label>
                                                    </div>
                                                </div>          
                                            </div>
                                        </div>
                                      
                                        
                                                            <label for="">Description</label>
                                        <textarea id="editor1" style="height: 300px;width:100%" name="Description" >
                                           
                                        </textarea>
                                        <br>
                                        <label for="">Properties</label>
                                        <textarea id="editor2" style="height: 300px;width:100%" name="Properties" >
                                           
                                        </textarea>
                                      
                                        <div class="form-group text-right mb-0 mt-5">
                                            <input type="submit" name="them" class="btn btn-primary waves-effect waves-light mr-1" value="Thêm">
                                            <a href="?ctrl=dienthoai&act=index" clas="btn btn-secondary waves-effect waves-light">Huỷ</a>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->
                        </div>
                    </div>
                </div>
            </div>