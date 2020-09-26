<?php
    

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "svadhyaya";

foreach($db as $key => $value){
    
    define(strtoupper($key),$value);
    
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>

<?php session_start(); ?>


<?php

if(isset($_POST['login'])){
   $username = $_POST['cname'];
   $password = $_POST['cpass'];
    
   $username = mysqli_real_escape_string($connection,$username);
   $password = mysqli_real_escape_string($connection,$password);
    
    $query = "SELECT * FROM company WHERE cname = '{$username}' ";
    $select_user_query = mysqli_query($connection,$query);
    if(!$select_user_query){
        die("QUERY FAILED". mysqli_error($connection));
    }
    
    while($row = mysqli_fetch_array($select_user_query)){
        $db_user_id = $row['cid'];
        $db_username = $row['cname'];
        $db_user_password = $row['cpass'];
    }
    
//    $password = crypt($password, $db_user_password);    
    
    if($username !== $db_username && $password !== $db_user_password){
        header("Location: ../index.php");
    } else if($username == $db_username && $password == $db_user_password){
        header("Location: cboard.php");
        $_SESSION['username'] = $db_username;
        $_SESSION['userid'] = $db_user_id;
    } else{
        header("Location: ../index.php");   
    }
    
}


?>