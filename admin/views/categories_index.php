             <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

    
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Danh mục</h4>
                                    

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                        <thead>
                                        <tr>
                                        <th>STT</th>
                                        <th width="20%">Tên danh mục</th> 
                                        <th width="40%">Mô tả</th>
                                        <th >Hình</th>                
                                        <th>Cấp</th>
                                        <th>Xóa</th>
                                        <th>Sửa</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <?php
                                        $stt = 0;
                                            foreach ($list as $row) {
                                                $stt++;
                                                $linkDel = "'?ctrl=categories&act=delete&id=".$row['id']."'";
                                                $linkEdit = '?ctrl=categories&act=edit&id='.$row['id'];
                                                if(is_file(PATH_IMG_SITE.explode(",",$row['image_list'])[0])){
                                                    $img = PATH_IMG_SITE.explode(",",$row['image_list'])[0];
                                                }else{
                                                    $img = PATH_IMG_SITE.'logo.png';
                                                }
                                                echo '<tr>
                                                        <td>'.$stt.'</td>
                                                        <td>'.$row['name'].'</td>
                                                        <td>'.substr($row['description'],0,100).'</td>
                                                        <td><img style="object-fit:cover;" class="img-admin" width="150" height="110" src="'.$img.'"></td>
                                                        <td>'.$row['parent'].'</td>
                                                        <td><div  onclick="checkDeleteCate('.$linkDel.','.$row['id'].')"  class="btn btn-danger" role="button"><i class="fa fa-trash"></i></div></td>
                                                        <td><a><a name="" id="" class="btn btn-primary" href="'.$linkEdit.'" role="button"><i class="fa fa-edit"></i></a></a></a></td>
                                                    </tr>';
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->


            </div>
    