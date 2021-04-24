<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

    
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Product</h4>
                                    <p class="text-muted font-14 mb-3">
                                    This is product.
                                    </p>
                                    <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th width="10">STT</th>
                                                    <th width="120">Name</th>
                                                    <th width="130">Price</th>
                                                    <th width="20">Image</th>
                                                    <th width="10">Hot</th>
                                                    <th >Description</th>
                                                    <th width="5">properties</th>
                                                    <th width="5">Del</th>
                                                    <th width="5">Edit</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                        $stt = 0;
                                            foreach ($ProductList as $row) {
                                                $stt++;
                                                // $anHien = ($row['AnHien']=='1') ? '<span class="badge badge-success">Hiện</span>': '<span class="badge badge-danger">Ẩn</span>';
                                                $hot = ($row['Hot']=='1') ? '<input type="radio" checked onclick="return false">': '<input  type="radio" onclick="return false">';
                                                
                                                $linkProperty = '?ctrl=properties&act=edit&idedit='.$row['id'];
                                                $linkDel = "'?ctrl=product&act=delete&id=".$row['id']."'";
                                                $linkEdit = '?ctrl=product&act=edit&id='.$row['id'];
                                                
                                                if(is_file(PATH_IMG_SITE.explode(",",$row['image_list'])[0])){
                                                    $img = PATH_IMG_SITE.explode(",",$row['image_list'])[0];
                                                }else{
                                                    $img = PATH_IMG_SITE.'logo.png';
                                                }
                                                echo '<tr>
                                                        <td>'.$stt.'</td>
                                                        <td class="" >'.$row['name'].'</td>
                                                        <td><del class="giacu">'.($row['price']).' đ</del><br> <span class="giamoi fw-bold text-danger ">'.$this->lib->forMatTien($row['GiaKM']).' đ</span> </td>
                                                        <td><img style="object-fit:cover;" class="img-admin" width="100" height="100" src="'.$img.'"></td>
                                                        <td> '.$hot.'</td>
                                                        <td>'.substr($row['description'],0,10).' ..</td>
                                                        <td>'.substr($row['properties'],0,10).' ..</td>
                                                        <td><div  onclick="checkDelete('.$linkDel.')"  class="btn btn-danger" role="button"><i class="fa fa-trash"></i></div></td>
                                                        <td><a href=""><a name="" id="" class="btn btn-primary" href="'.$linkEdit.'" role="button"><span class="mdi mdi-pencil"></span></a></a></a></td>
                                                    </tr>';
                                            }
                                        ?>
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row d-flex justify-content-end">
                            <div class="col-lg-5">
                                <nav>
                                    <ul class="pagination pagination-split">
                                        <?php
                                        echo $Pagination;
                                        ?>      
                                    </ul>
                                </nav>    
                                  
                            </div>
                        </div>
                             
                     
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->


            </div>
    