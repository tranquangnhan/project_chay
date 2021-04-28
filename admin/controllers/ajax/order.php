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
            $array =  [];
           $kq = $model->CheckChildCate();
           $kq1 = (int)($model->CheckChildHasPro($_POST['IDcate']));
           if($kq1 > 0) $array[0] = 1; else $array[0] = 0;
            foreach ($kq as $key) {
                if($_POST['IDcate'] == $key['parent']){
                    $array[0] = 2;
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