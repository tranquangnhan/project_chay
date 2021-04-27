<?php 
require_once "models/categories.php"; 
require_once "../lib/myfunctions.php"; 
class categories{
    function __construct()
    {
        $this->model = new Model_categories();
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
            case 'delete':
                $this->delete();
                break;   
            default:
         
                break;
        }

    }
    function index()
    {   $list = $this->model->listRecords();
        
        $page_title ="Danh sách danh mục";
        $page_file = "views/categories_index.php";
        require_once "views/layout.php";
    }
    function addNew()
    {  
        if(isset($_GET['id'])&&($_GET['act']='categories')){
            $oneRecode = $this->model->showOneProducer($_GET['id']);
            $listchild = $this->model->showChildrenCategori();
            $page_title ="Sửa danh mục";
            $page_file = "views/categories_edit.php";
        }else{
            $listchild = $this->model->showChildrenCategori();
            $page_title ="Thêm danh mục";
            $page_file = "views/categories_add.php";
        }

        if(isset($_POST['them'])&&$_POST['them']){
            $name = $_POST['name_category'];
            $name_ge = $_POST['name_category_ge'];
            $IDcate = $_POST['IDcate'];
            $des_category = $_POST['des_category'];
            $des_category_ge = $_POST['des_category_ge'];
            $slug = $this->lib->slug($name);
            $slug = strtolower($slug);
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                settype($id,"int");
                $this->edit($name,$name_ge,$IDcate,$slug,$des_category,$des_category_ge,$id);
            }else{
                $this->store($name,$name_ge,$IDcate,$slug,$des_category,$des_category_ge);
            }
           
        }
     
        require_once "views/layout.php";
    }//thêm mới dữ liệu vào db


    function store($name,$name_ge,$IDcate,$slug,$des_category,$des_category_ge){   
        $name = $this->lib->stripTags($name);
        if($this->model->addNewCate($name,$name_ge,$IDcate,$slug,$des_category,$des_category_ge))
        {
            echo "<script>alert('Thêm thành công')</script>";
            header("location: ?ctrl=categories");
        }else
        {
            echo "<script>alert('Thêm thất bại')</script>";
        }

        require_once "views/layout.php";
    }

    function edit($name,$name_ge,$IDcate,$slug,$des_category,$des_category_ge,$id)
    {
        if(isset($_GET['id']))
        {
            
            if($this->model->editCategory($name,$name_ge,$IDcate,$slug,$des_category,$des_category_ge,$id))
            {
                echo "<script>alert('Sửa thành công')</script>";
                header("location: ?ctrl=categories");
            }else
            {
                echo "<script>alert('Sửa thất bại')</script>";
            }
        }
        require_once "views/layout.php";
    }

    function delete()
    {
        echo 'oke';
        if(isset($_GET['id'])&&($_GET['ctrl']=='categories')){
            $id = $_GET['id'];
            settype($id,"int");
            if($this->model->deleteCate($id)){
                echo "<script>alert('Xoá thành công')</script>";
                header("location: ?ctrl=categories");
            }else{
                echo "<script>alert('Xoá thất bại')</script>";
            }
        }
        require_once "views/layout.php";
    }
}
?>