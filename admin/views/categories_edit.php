

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

                                    <h4 class="header-title mt-0 mb-3">Category</h4>

                                    <form data-parsley-validate novalidate method="post">
                                        <div class="form-group">
                                            <label for="">Name Category</label>
                                            <input type="text" name="name_category" value="<?=$oneRecode['name']?>"  parsley-trigger="change" required
                                                   placeholder="Nhập tên danh mục" class="form-control" id="userName">
                                        </div>
                                        <select class="custom-select form-group" name="IDcate">
                                            
                                            <?php
                                                
                                                foreach ($listchild as $row) {
                                                    if($row['id'] == $oneRecode['parent']){
                                                        echo '<option value='.$row['id'].' selected>'.$row['name'].'</option>';
                                                    }else{
                                                        echo '<option value='.$row['id'].'>'.$row['name'].'</option>';
                                                    }
                                                }   
                                            
                                            ?>
                                            <option value="0" >Don't Belong</option>
                                        </select>
                                       
                                        <div class="form-group text-right mb-0 ">
                                            <input type="submit" name="them" class="btn btn-primary waves-effect waves-light mr-1" value="UPDATE">
                                            <a href="?ctrl=nhasanxuat&act=index" clas="btn btn-secondary waves-effect waves-light">CANCEL</a>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->
                        </div>
                    </div>
                </div>
            </div>