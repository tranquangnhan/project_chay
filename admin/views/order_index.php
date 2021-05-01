<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

    
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Order</h4>
                                    <p class="text-muted font-14 mb-3">
                                    This is order.
                                    </p>

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                        <thead>
                                        <tr>
                                        <th>STT</th>
                                        <th>Name customer</th>
                                        <th>Order time</th>
                                        <th>Phone number</th>
                                        <th>Street</th>
                                        <th>Housenumber</th>
                                        <th>City</th>
                                        <th>Country</th>
                                        <th>Note</th>  
                                        <th>Status</th>
                                        <th>Payments</th>                                        
                                        <th>More Detail</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <?php
                                        $stt = 0;
                                            foreach ($getAllBill as $row) {
                                                $stt++;                  
                                                if($row['status'] == 0 ) $status = '<td><button type="button" class="btn btn-dark" onclick="checkStatus('.$row['id'].')">Pending</button></td>';    
                                                if($row['status'] == 1 ) $status = '<td><button type="button" class="btn btn-danger" >Done</button></td>';                    
                
                                                $linkDel = "'?ctrl=order&act=delete&id=".$row['id']."'";
                                                $linkEdit = '?ctrl=order&act=edit&id='.$row['id'];
                                                $linkDetail = '?ctrl=order&act=detail&id='.$row['id'];
                                                echo '<tr>
                                                        <td>'.$stt.'</td>
                                                        <td>'.$row['firstname'].' '.$row['lastname'].'</td>
                                                        <td>'.$row['ngaydat'].'</td>
                                                        <td>'.$row['phone'].'</td>
                                                        <td>'.$row['street'].'</td>
                                                        <td>'.$row['housenumber'].'</td>
                                                        <td>'.$row['city'].'</td>
                                                        <td>'.$row['country'].'</td>
                                                        <td>'.$row['note'].'</td>
                                                        '.$status.'
                                                        <td>'.$row['payments'].'</td>
                                                        <td><a name="" id="" class="btn btn-success" href="'.$linkDetail.'" role="button"><i class="fa fa-bookmark"></i></a></td>    
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
    