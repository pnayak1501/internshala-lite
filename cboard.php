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
    $cname=$_SESSION['username'];
    $cid=$_SESSION['userid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="alert-success">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Svadhyaya</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="post_job.php">Post Jobs<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $cname; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Log out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    <p class="display-4" style="text-decoration:underline; text-align:center;">Your applicants:</p>
    
    <div class="row">
        <?php
        $query = "Select * from apply where acid = $cid";
        $exec_query = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($exec_query)){
            $aname = $row['aname'];
            $aemail = $row['aemail'];
            $aedu = $row['aedu'];
            $askill = $row['askill'];
            $arole = $row['arole'];
            $aavai = $row['aavai'];
            $apro = $row['apro'];
            $num = rand(1,3);
        ?>
        
        <div class="col-12 <?php 
                    if($num == 1)
                        echo "alert-primary";
                    else if($num == 2)
                        echo "alert-danger";
                    else if($num == 3)
                        echo "alert-warning";
                    
                    ?>" style="margin-top:30px;">
            
            <div class="row">
                <div class="col-3">Name: <?php echo $aname; ?></div>
                <div class="col-3">email: <?php echo $aemail; ?></div>
                <div class="col-3">Education: <?php echo $aedu; ?></div>
                <div class="col-3">Skills: <?php echo $askill; ?></div>
            </div> <br>
            <div class="row">
               <div class="col-12">
                <p class="lead">Why should you be hired for this role?</p>
                <p><?php echo $arole; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <p class="lead">Are you available within 1 month ,starting immediately ,for a work from home job?</p>
                <p><?php echo $aavai; ?></p>
                </div>
            </div>
            <div class="row">
            <div class="col-12">
                <p class="lead">Share the link of your intresting project.</p>
                <p><?php echo $apro; ?></p>
                </div>
            </div>
            
            
        </div> 
                <?php } ?>

        
    </div>
    
</div>

</body>
</html>