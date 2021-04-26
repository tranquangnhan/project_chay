
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
                                            <input type="text" name="name_category"  parsley-trigger="change" required
                                                   placeholder="Type name category" class="form-control" id="category">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea id="editor1" style="height: 300px;width:100%" name="des_category" >
                                           
                                        </textarea>
                                        </div>
                                        <label for="">Belong</label>
                                        <select class="custom-select form-group" name="IDcate">
                                        
                                            <option value="0" selected>Don't Belong</option>
                                            <?php
                                                foreach ($listchild as $key) {
                                                    echo '<option value="'.$key['id'].'">'.$key['name'].'</option>';
                                                }
                                            ?>
                                        </select>
                                        
            
                                        <div class="form-group text-right mb-0 ">
                                            <input type="submit" name="them" class="btn btn-primary waves-effect waves-light mr-1" value="ADD NEW">
                                            <a href="?ctrl=nhasanxuat&act=index" clas="btn btn-secondary waves-effect waves-light">CANCEL</a>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->
                        </div>
                    </div>
                </div>
            </div>