<?php 
require_once "models/product.php"; 
require_once "models/categories.php"; 
require_once "../lib/myfunctions.php"; 
class Product{
    function __construct()
    {
        $this->model = new Model_product();
        $this->modelCate = new Model_categories();
        $this->lib = new lib();
        $act = "index";

        if(isset($_GET["act"])==true) $act = $_GET['act'];

        switch ($act) {
            case 'index':
                $this->index();
                break;
            case 'addnew':
                $this->addNew();
                break; 
            case 'edit':
                $this->addNew();
                break;
            case 'update':
        
                break;
            case 'delete':
                $this->delete();
                break;   
            default:
         
                break;
        }

    }
    function index()
    {   
    
        if (isset($_GET['Page'])) $CurrentPage = $_GET['Page']; else $CurrentPage = 1;
     
        
        $TotalProduct = $this->model->countAllProduct();

        if($TotalProduct == 0) $TotalProduct =1;
  
        $ProductList = $this->model-> GetProductList($CurrentPage);


        $Pagination =  $this->model->Page($TotalProduct, $CurrentPage);

        $page_title ="Danh sách nhà sản xuất";
        $page_file = "views/product_index.php";
        require_once "views/layout.php";
    }
    function addNew()
    {  
        if(isset($_GET['id'])&&($_GET['act']='product')){
            $oneRecode = $this->model->showOnePhone($_GET['id']);
            $producer = $this->modelCate->getParentOfPro();
            $page_title ="Sửa Điện Thoại";
            $page_file = "views/product_edit.php";
        }else{
            $producer = $this->modelCate->getParentOfPro();
            $page_title ="Thêm Điện Thoại";
            $page_file = "views/product_add.php";
        }

        if(isset($_POST['them'])&&$_POST['them'])
        {

            $name =$this->lib->stripTags($_POST['name_product']);
            $price = $_POST['price'];
            $discount = $_POST['discount'];
            $img = $_FILES['img'];
            
            $imgs = $this->lib->checkUpLoadMany($img);
            if($imgs){
                $checkIMG = explode(",",$imgs);
            
                for ($i=0; $i <count($checkIMG) ; $i++) { 
                    $checkIMG[$i] = explode(".",$checkIMG[$i]);
                    $checkIMG[$i][1] = strtolower($checkIMG[$i][1]);
                    if($checkIMG[$i][1] != "jpg" && $checkIMG[$i][1] != "jpeg" && $checkIMG[$i][1] != "png" && $checkIMG[$i][1] != "gif" && $checkIMG[$i][1] != "webp"){
                        $checkimg = "This is not IMAGE";
                        break;
                    }
                }
            }
            
            $IDCate = $_POST['IDCate'];
            $hot = $_POST['hot'];
            if ($hot) {
                $hot = 1;
            }else{
                $hot = 0;
            }
            // xử lý chọn size
            $arr = array();
            if(isset($_POST['size1'])){
                $size1 = $_POST['size1'];
                array_push($arr,$size1);
            }
            if(isset($_POST['size2'])){
                $size2 = $_POST['size2'];
                array_push($arr,$size2);
            }
            if(isset($_POST['size3'])){
                $size3 = $_POST['size3'];
                array_push($arr,$size3);
            }
            if(isset($_POST['size4'])){
                $size4 = $_POST['size4'];
                array_push($arr,$size4);
            }
            $size='';
            for ($i=0; $i < count($arr) ; $i++) { 
                if($i<count($arr) - 1){
                    $size .= $arr[$i] .',';
                }else{
                    $size .= $arr[$i];
                }
            }
            
            $color = $_POST['color'];
            $Description = $_POST['Description'];
            $Properties = $_POST['Properties'];
            $slug = $this->lib->slug($name);
            

            settype($price,"float");
            settype($discount,"int");
            settype($IDCate,"int");
            settype($inventory,"int");
            settype($hot,"int");
            
            $_SESSION['message'] = "";
            if($name == ""){
                $_SESSION['message'] = "Bạn chưa nhập tên";
            } 
            elseif($name_ge == "")
            {
                $_SESSION['message'] = "Bạn chưa tên";
            }
            elseif($img == "")
            {
                $_SESSION['message'] = "Bạn chưa chọn ảnh";
            }
            elseif($checkimg)
            {
                $_SESSION['message'] = $checkimg;
            }
            elseif($IDCate == "")
            {
                $_SESSION['message'] = "Bạn chưa chọn danh mục";
            }
            if($_SESSION['message']){
                header("location: ?ctrl=thongbao");
            }
            else
            {
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    settype($id,"int");
                    // echo 'oke';
                    $this->edit($name,$slug,$price,$discount,$imgs,$IDCate,$hot,$size,$color,$Description,$Properties,$id);
                
                }else
                {
                    // echo 'oke';
                    $this->store($name,$slug,$price,$discount,$imgs,$IDCate,$hot,$size,$color,$Description,$Properties);
                }    
            }

           
        }
     
        require_once "views/layout.php";
    }//thêm mới dữ liệu vào db


    function store($name,$slug,$price,$discount,$imgs,$IDCate,$hot,$size,$color,$Description,$Properties){   
        $idLastPhone = $this->model->addNewProduct($name,$slug,$price,$discount,$imgs,$IDCate,$hot,$size,$color,$Description,$Properties);
        if($idLastPhone != null)
        {
            echo "<script>alert('Thêm thành công')</script>";
            header("location: ?ctrl=product");
        }else
        {
            echo "<script>alert('Thêm thất bại')</script>";
        }

        require_once "views/layout.php";
    }

    function edit($name,$slug,$price,$discount,$imgs,$IDCate,$hot,$size,$color,$Description,$Properties,$id)
    {
        if($this->model->editProduct($name,$slug,$price,$discount,$imgs,$IDCate,$hot,$size,$color,$Description,$Properties,$id))
        {
            echo "<script>alert('Sửa thành công')</script>";
            header("location: ?ctrl=product");
        }else
        {
            echo "<script>alert('Sửa thất bại')</script>";
        }
        require_once "views/layout.php";
    }

    function delete()
    {
        if(isset($_GET['id'])&&($_GET['ctrl']=='product')){
            $id = $_GET['id'];
            settype($id,"int");
            if($this->model->deleteProduct($id)){
                echo "<script>alert('Xoá thành công')</script>";
                header("location: ?ctrl=product");
            }else{
                echo "<script>alert('Xoá thất bại')</script>";
            }
        }
        require_once "views/layout.php";
    }
}
?>