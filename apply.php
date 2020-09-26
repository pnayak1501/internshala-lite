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
    <title>Apply</title>
</head>
<body style="background:lightblue;">
    
    <div class="container">
       <p class="display-4">Assessment Questions</p>
       <p class="text-muted">Please answer the questions carefully</p>
       <?php
        if(isset($_POST['submit'])){
            $aname = $_POST['aname'];
            $aemail = $_POST['aemail'];
            $aedu = $_POST['aedu'];
            $askill = $_POST['askill'];
            $arole = $_POST['arole'];
            $aavai = $_POST['aavai'];
            $apro = $_POST['apro'];
            $apid = $_GET['apply'];
            $acid = $_GET['company'];
            $query = "INSERT INTO apply (aname,aemail,aedu,askill,arole,aavai,apro,apid,acid) VALUES ('$aname','$aemail','$aedu','$askill','$arole','$aavai','$apro','$apid','$acid')";
            $exec_query = mysqli_query($connection,$query);
            
            if(!$exec_query){
                die("Connection failed".mysqli_error($connection));
            }
        }
        ?>
        
        <form action="" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="aname" class="form-control">
        </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="aemail">
      </div>
      <div class="form-group">
          <label for="education">Highest Education</label>
          <input type="text" name="aedu" class="form-control">
      </div>
        <div class="form-group">
          <label for="skills">Skills</label>
          <input type="text" name="askill" class="form-control">
      </div>
        <div class="form-group">
        <label for="why">Why should you be hired for this role?</label>
        <textarea class="form-control" rows="5" name="arole"></textarea>
      </div>
        <div class="form-group">
        <label for="why">Are you available for 1 month ,starting immediately ,for a work from home internship?</label>
        <textarea class="form-control" rows="5" name="aavai"></textarea>
        </div>
        <div class="form-group">
        <label for="why">Share the link of your intresting project.</label>
        <textarea class="form-control" rows="5" name="apro"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
</form>
        
        
    </div>
    
</body>
</html>