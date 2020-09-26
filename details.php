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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Details</title>
</head>
<body style=" background: -webkit-linear-gradient(left,#E67E22,#f98a35);
">
    
         <?php
            if(isset($_GET['pid'])){
                $get_pid = $_GET['pid'];
                    $query = "SELECT * FROM posts where pid = $get_pid ";
                    $select_query = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($select_query)){
                        $pid = $row['pid'];
                        $pname = $row['pname'];
                        $pdomain = $row['pdomain'];
                        $prole = $row['prole'];
                        $pexp = $row['pexp'];
                        $psal = $row['psal'];
                        $pabt = $row['pabt'];
                        $pcid = $row['pcid'];
    ?>
           <h1 class="display-4"> <div class="container" style="font-family: 'Satisfy', cursive; text-decoration:underline; text-align:center;"><?php echo $pname; ?> </div></h1> 
               <div class="container">
                   <p style="font-size:20px;"> <span style="text-decoration:underline;">Domain</span>: <?php  echo $pdomain;?> </p>
                   <p style="font-size:20px;"> <span style="text-decoration:underline;">Role</span>: <?php  echo $prole;?> </p>
                   <p style="font-size:20px;"> <span style="text-decoration:underline;">Duration of Internship:</span>: <?php  echo $pexp;?> </p>
                   <p style="font-size:20px;"> <span style="text-decoration:underline;"> Stipend Offered </span>: $<?php  echo $psal;?> </p>
                   <p style="font-size:20px;"> <span style="text-decoration:underline;">About </span>: <br><?php  echo $pabt;?> </p>
                   <a href="apply.php?apply=<?php echo $pid ?>&company=<?php echo $pcid; ?>"><button class="btn btn-dark">Apply Now</button></a>
            </div>
          
    
       <?php  }} ?>
        
</body>
</html>