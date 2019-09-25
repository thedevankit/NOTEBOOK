<?php
session_start();
include_once('config.php');
$message=array();
/*if(isset($_POST['email']) && !empty($_POST['email'])){
    $uname=$_POST['email'];
}else{
    $message[]='Please enter username';
}

if(isset($_POST['password']) && !empty($_POST['password'])){
    $password=mysql_real_escape_string($_POST['password']);
}else{
    $message[]='Please enter password';
}
*/
$name=$_POST['email'];
$password1=mysql_real_escape_string($_POST['password']);
$password=md5($password1);

echo$password;
$countError=count($message);

if($countError > 0){
     for($i=0;$i<$countError;$i++){
              echo ucwords($message[$i]).'<br/><br/>';
     }
}else{
    $query="select * from users where email='".$name."' and password='".$password."'";

    $res=mysql_query($query);
    $checkUser=mysql_num_rows($res);
    if($checkUser > 0){
    	$data=mysql_fetch_array($res);
         $_SESSION['LOGIN_STATUS']=true;
         $_SESSION['authname']=$data['name'];
          header('location:index.php');
         echo 'correct';
    }else{
         echo ucwords('please enter correct user details');
    }
}
?>

