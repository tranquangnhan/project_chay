<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

    
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Contact</h4>
                                    <p class="text-muted font-14 mb-3">
                                    This is contact.
                                    </p>

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                        <thead>
                                        <tr>
                                        <th width="3%">STT</th>
                                        <th>Name</th>
                                        <th width="25%">Email</th>
                                        <th>Subject</th>
                                        <th width="40%">Messenges</th>
                                        <th >ID Product</th>
                                        
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <?php
                                        $stt = 1;
                                            foreach ($listcontact as $key) {
                                                if($key['subject'] == 2){
                                                    $sub = 'Customer service';
                                                }else{
                                                    $sub = 'Webmaster';
                                                }
                                                echo '<tr>
                                                <td width="3%">'.$stt++.'</td>
                                                <td>'.$key['name'].'</td>
                                                <td width="25%">'.$key['email'].'</td>
                                                <td>'.$sub.'</td>
                                                <td width="40%">'.$key['messeges'].'</td>
                                                <td width="40%">'.$key['idsp'].'</td>
                                                
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
    