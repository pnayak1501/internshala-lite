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
    <title>All Posts</title>
</head>
<body style="background:#f6d1ab;">

       <div class="container">
            <div class="jumbotron alert-danger">
          <h1 class="display-4">Not getting an internship? Don't worry Svadhyaya is there to your rescue!</h1>
           </div>
           <div class="row">
                 <?php
    
                    $query = "SELECT * FROM posts where pstatus = 'Approve'";
                    $select_query = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($select_query)){
                        $pid = $row['pid'];
                        $pname = $row['pname'];
                        $pdomain = $row['pdomain'];
                        $prole = $row['prole'];
                        $pexp = $row['pexp'];
                        $pabt = $row['pabt'];
                        $pcid = $row['pcid'];
            ?>
               <div class="col-4">
                   <div style="padding-left: 5%; padding-top:5%; margin-top:5%;" class="alert-success">
                        <p class="lead" style="font-weight:bold;"> <?php echo $pname;  ?> </p> 
                        <p class="small">Domain/Role: <?php echo $pdomain; ?> / <?php echo $prole; ?> </p>
                        <p class="small"> Duration of Internship: <?php echo $pexp; ?> </p>
                        <a href="details.php?pid=<?php echo $pid; ?>" > View Details -></a>
                   </div>
               </div>
                    
                       <?php
                }
                        
        ?>
           </div>
       </div>

</body>
</html>