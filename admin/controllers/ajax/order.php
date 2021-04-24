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

        case 'comment':
            $array = array();
            
            $lastId = $model->addComment($_POST['review'],$_POST['name'],$_POST['iddt'],$_POST['iduser']);


            $array['datacmt'] = $model->getOneComment($lastId);

            $array['statusCode'] = 1;

            echo json_encode($array);
            break;
        default:
            # code...
            break;
    }
?>