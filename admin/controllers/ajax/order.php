<?php 
    require_once "../../../system/config.php";
    require_once "../../../system/database.php";
    require_once "../../models/order.php";
    $model = new Model_order;
    session_start();
    switch ($_POST['Action']) {
        case 'updateStatus':
            $array = array();

            $array['StatusCode'] = (int)((($model->updataStatus($_POST['iddh']))=== true) ? 0 : 1);            
            echo json_encode($array);
            break;

        case 'CheckChildCate':
            $array = array();
            
           $kq = $model->CheckChildCate();
           
            foreach ($kq as $key) {
                if($_POST['IDcate'] == $key['parent']){
                    array_push($array,1);
                    break;
                }
            }
            echo json_encode($array);
            
            break;
        default:
            # code...
            break;
    }
?>