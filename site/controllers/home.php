<?php 
require_once "../system/config.php";
require_once "../system/database.php";
// require_once "../lib/myfunctions.php";

require_once "models/home.php"; 
require_once "models/user.php";
class Home{
    function __construct()   {
        $this->model = new model_home();
        $this->modelUser = new Model_user();
      //   $this->lib = new lib();
       
        if(isset($_GET['q'])){
            $this->cat();
         }
        $act = "home";
        if(isset($_GET["act"])==true) $act=$_GET["act"];
        switch ($act) {    
	      case "home": $this->home(); break;
         case "detail": $this->detail(); break;
         case "cart": $this->cart(); break;
         case "cartview": $this->cartView(); break;
         case "checkout": $this->checkout(); break;
         case "savebill": $this->saveBill(); break;
         case "thankyou": $this->thankYou(); break;
         case "cat": $this->cat(); break;
         case "register": $this->register(); break;
         case "ttthanhcong": $this->ttthanhcong(); break;
         case "login": $this->login();break;
         case "active":$this->active();break;
         case "logout":$this->logout();break; 
         case "product":$this->product();break;
         case "changepass":$this->changePass();break;
         case "contact":$this->contact();break;
        }
        
     }

     function home()
     {
   
        $getAllProSpecial = $this->model->getAllProSpecial();
        $getAllProAsc = $this->model->getAllProAsc();
        $getAllByHotAsc = $this->model->getAllByHotAsc();
        $getAllByBuyed = $this->model->getAllByBuyed();
        $getAllProByDeal =  $this->model->getAllProByDeal();
        $getMenuParent = $this->model->getMenuParent();
        $page_title ="Danh sách nhà sản xuất";
        $viewFile = "views/home.php";
        require_once "views/layout.php";  
     }

     function product()
     {
      
      $getMenuParent = $this->model->getMenuParent();
      $getCateFromId = $this->model->getCateFromId($_GET['maloai']);

      
      if(isset($_GET['maloai'])==true&&($_GET['maloai']>0))
      $maLoai= $_GET['maloai'];

      $PageNum=1;
      if(isset($_GET['Page'])==true) $PageNum = $_GET['Page'];

      settype($maLoai,"int");
      settype($PageNum,"int");

      if($PageNum<=0) $PageNum = 1;

      if($maLoai)
      {
          $ds = $this->model-> GetProductList($maLoai,$PageNum);
          $TotalProduct = (int)$this->model->countAllProduct($maLoai);
      }
      
      if($TotalProduct == 0) $TotalProduct =1;

      $BaseLink= 'cate';
      $PageSize = PAGE_SIZE_PRO;
      $Pagination =  $this->model->Page($TotalProduct ,$PageNum,$PageSize, $BaseLink);

      $page_title ="Danh sách nhà sản xuất";
      $viewFile = "views/product.php";
      require_once "views/layout.php";  
     }

     function detail()
     {
        $getAllProSpecial = $this->model->getAllProSpecial();
        $getMenuParent = $this->model->getMenuParent();
        
        $slug = $_GET['slug'];
      
        $sp = $this->model->getOnePro($slug);   
        $viewFile = "views/Product-Detail.php";     
        require_once "views/layout.php";  
     }

     function cat(){

         $producer = $this->model->getAllProducer();
      
         $slug = $_GET['slug'];
         
         if(isset($_GET['to'])) $to = $_GET['to']; else $to = NULL;
         if(isset($_GET['from'])) $from = $_GET['from']; else $from = NULL;
         if(isset($_POST['hot'])) $hot = $_POST['hot']; else $hot = NULL;

         if (isset($_GET['Page'])) $CurrentPage = $_GET['Page']; else $CurrentPage = 1;
         
         if(isset($_GET['q'])) $query = $_GET['q']; else $query = NULL;

         $TotalProduct = $this->model->countAllPhone($slug,$from,$to,$hot,$query);
 
         if($TotalProduct == 0) $TotalProduct =1;
   
         $ProductList = $this->model-> GetProductList($slug,$CurrentPage,$from,$to,$hot,$query);
         
 
         $Pagination =  $this->model->Page($TotalProduct, $CurrentPage);

         $viewFile ="views/shop.php";
         require_once "views/layout.php";
     }

     function cartView(){
         $producer = $this->model->getAllProducer();

         $viewFile ="views/product.php";
         require_once "views/layout.php";
     }

     function cart()
     {
         $id = $_GET['id'];
        
         $what = "";
         if(isset($_GET['what'])) $what = $_GET['what'];
        
         if ($what=="remove")
         {
            unset($_SESSION['giohang'][$id]);
            header("location: ". ROOT_URL."/gio-hang");
         }
     }

      function checkout()
      {
         $producer = $this->model->getAllProducer();
         $viewFile ="views/checkout.php";
         require_once "views/layout.php";
      }

      function saveBill()
      {
         $producer = $this->model->getAllProducer();

         $hoten = trim(strip_tags($_POST['name']));
         $email = trim(strip_tags($_POST['email']));
         $phone = trim(strip_tags($_POST['phone']));
         $address = trim(strip_tags($_POST['address']));
         $note = trim(strip_tags($_POST['note']));
         $methodpay = $_POST['payment-method'];
         $keyBill = $this->model->getLastIdBill(). rand(1000,1000); 

         if (isset($_SESSION['idDH']))
            $idDH= $_SESSION['idDH'];
         else $idDH="-1";
         
         echo $idDH.'cũ';

         $idDH = $this->model->luudonhangnhe($idDH, $hoten, $email,$phone, $address,$note,$keyBill);
         
         echo $idDH.'mới';
       
         if($methodpay == 'vnpay'){
            if ($idDH){
               $_SESSION['idDH'] = $idDH;
               $giohang = $_SESSION['giohang'];
               $this->model->luugiohangnhe($idDH, $giohang);
               header("location: " . SITE_URL."?act=vnpay&idhd=".$idDH."");
            }
         }else{
            if ($idDH){
               $_SESSION['idDH'] = $idDH;
               
               $giohang = $_SESSION['giohang'];
               $this->model->luugiohangnhe($idDH, $giohang);
               $this->model->sendMailBill($keyBill,$email);
               header('location: '.ROOT_URL.'/cam-on');
            }  
         }
      }
      function vnpay()
      {
         
         $viewFile ="views/vnpay/vnpay.php";
         require_once "views/layout.php";
      }
      function ttthanhcong()
      {
           unset($_SESSION['giohang']);
           unset($_SESSION['discount']);
         $viewFile ="views/vnpay/vnpay_return.php";
         require_once "views/layout.php";
      }
      
      function thankYou()
      {
         $producer = $this->model->getAllProducer();
         $viewFile ="views/thankyou.php";
         require_once "views/layout.php";
      }

      function login()
      {  
         if(isset($_POST['login'])){
            $email= $_POST['email'];
            $pass = $_POST['password'];
            $exist = $this->modelUser->checkEmailTonTai($email);
            if($exist != null){
               $checklogin = $this->modelUser->checkUser($email,$pass);
               if($checklogin == true){
                  header('location: ./home');
               }else{
                  $checkloginwarn = 'Your password is not valid';
               }
            }else{
               $emailexist= 'Your email does not exist!';
            }
         }

         $viewFile ="views/login.php";
         require_once "views/layout.php";
      }
      function register()
      {
         if(isset($_POST['register'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $exist = $this->modelUser->checkEmailTonTai($email);
            if($name == '' || $email == '' ||$password == '' ){
               $nullerror = "You have not entered enough information";
            }else{
               if($exist != null){
                  $emailexist= 'Email already exists!';
               }else{
                  $exist = $this->modelUser->registerUser($name,$email,$password);
                    echo '<script>alert("Register success")</script>';
               }
            } 
         }
         $viewFile ="views/register.php";
         require_once "views/layout.php";
      }
      function active()
      {
         
        $userId =  $_GET['userid'];
        $token = $_GET['token'];
        if($this->modelUser->selectRanDomKey($userId) == $_GET['token']){
         $this->modelUser->setThanhVien($userId);

         echo '<script>window.location.href="index.php"</script>';
        }else{
           echo 'Mày hack à ?';
        }
      
      }
      function logout()
      {
         unset($_SESSION['suser']);
         unset($_SESSION['sid']);
         header('location: '.ROOT_URL.'');
      }
      function forgotPass(){

         $viewFile ="views/forgotpass.php";
         require_once "views/layout.php";
      }
      function changePass()
      {
         $viewFile ="views/changepass.php";
         require_once "views/layout.php";
      }
      function contact(){
        
         if(isset($_POST['submitMessage'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['id_contact'];
            $message = $_POST['message'];
            if($name == '' || $email == '' ||$message == '' ){
               $nullerror = "You have not entered enough information";
            }else{
               $this->model->storeContact($name,$email,$subject,$message);
               echo '<script>alert("We wil call you soon !")</script>';
            } 
         }
         $viewFile ="views/contact.php";
         require_once "views/layout.php";
      }
}
?>