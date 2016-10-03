<?php

include './connection.php';



//--------------prevent load page without logging-------------------------------
if(array_key_exists('pageProtect', $_POST)){

session_start();

if(isset($_SESSION['name'])&& isset($_SESSION['userid'])){
if($_SESSION['name'] !=md5($_SERVER['userid']))
{
echo 1;

}
else {
echo 0;
}
}
else {
echo 1;
}
}


//---------------logout---------------------------------------------------------
if(array_key_exists('logout', $_POST)){

session_start();

unset($_SESSION['name']);
unset($_SESSION['id']);
unset($_SESSION['HTTP_USER_AGENT']);

echo 1;
}























//if(array_key_exist('pageProtect',$_POST){
//session_start();
//
//if(){
//    
//}
//    
//    
//    
//});
?>