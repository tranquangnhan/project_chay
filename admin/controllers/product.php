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
            $inventory = $_POST['inventory'];
            $IDCate = $_POST['IDCate'];
            $hot = $_POST['hot'];
            if ($hot) {
                $hot = 1;
            }else{
                $hot = 0;
            }
            $size = $_POST['size'];
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
            elseif($price == "")
            {
                $_SESSION['message'] = "Bạn chưa nhập giá";
            }
            elseif($img == "")
            {
                $_SESSION['message'] = "Bạn chưa chọn ảnh";
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