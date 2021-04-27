             <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

    
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Category</h4>
                                    <p class="text-muted font-14 mb-3">
                                    This is Category.
                                    </p>

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                        <thead>
                                        <tr>
                                        <th>STT</th>
                                        <th width="20%">Name Category</th> 
                                        <th width="40%">Description</th>                
                                        <th>Belong</th>
                                        <th>Del</th>
                                        <th>Edit</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <?php
                                        $stt = 0;
                                            foreach ($list as $row) {
                                                $stt++;
                                                $linkDel = "'?ctrl=categories&act=delete&id=".$row['id']."'";
                                                $linkEdit = '?ctrl=categories&act=edit&id='.$row['id'];
                                                echo '<tr>
                                                        <td>'.$stt.'</td>
                                                        <td>'.$row['name'].'</td>
                                                        <td>'.substr($row['description'],0,100).'</td>
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
    