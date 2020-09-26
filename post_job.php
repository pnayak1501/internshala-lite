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
    <style>
        body{
            background: url("images/post2.jpg") no-repeat center center fixed;
            background-size: cover;
        }
        label{
            color:black;
            font-weight: 500;
            font-size: 20px;
        }
    </style>
    <title>Post Internship</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Svadhyaya</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="cboard.php">See Applicants<span class="sr-only">(current)</span></a>
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
  
  <?php
    
    if(isset($_POST['post'])){
        
     $pname = $_POST['pname'];   
     $pdomain = $_POST['pdomain'];   
     $prole = $_POST['prole'];   
     $pexp = $_POST['pexp'];   
     $psal = $_POST['psal'];   
     $pabt = $_POST['pabt'];   
     $pcid = $cid; 
    
        $query = "INSERT INTO posts (pname,pdomain,prole,pexp,psal,pabt,pcid,pstatus) values ('$pname','$pdomain','$prole','$pexp','$psal','$pabt',$pcid,'Disapprove')";
        $insert_post = mysqli_query($connection,$query);
        
    }    
    ?>
   
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="name" >Company Name:</label>
                    <input class="form-control" type="text" name="pname">
                  </div>
                  <div class="form-group">
                    <label for="domain">Domain:</label>
                    <input class="form-control" type="text" name="pdomain">
                  </div>
                  <div class="form-group">
                    <label for="role">Role:</label>
                    <input class="form-control" type="text" name="prole">
                  </div>
                 <div class="form-group">
                    <label for="exp">Duration of the internship:</label>
                    <input class="form-control" type="text" name="pexp">
                  </div>
                <div class="form-group">
                    <label for="sal">Stipend Offered:</label>
                    <input class="form-control" type="text" name="psal">
                  </div>
                  <div class="form-group">
                    <label for="about">About the company:</label>
                    <textarea class="form-control" rows="3" name="pabt"></textarea>
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-success" name="post">
                  </div>
                </form>
        </div>
    </div>
    </div>


</body>
</html>