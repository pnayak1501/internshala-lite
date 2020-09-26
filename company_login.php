<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <style>
        body{
            background: url("images/login2.jpg") no-repeat center center fixed;
            background-size: cover;
        }
    </style>
    <title>Login</title>
</head>
<body>
   
   <div class="container" style="margin-top:5%;">
    <p class="display-1 animate__animated animate__pulse animate__infinite" style="text-align:center;color:white;font-weight:500;">Login <i class="fas fa-sign-in-alt"></i> </p>
       <div class="row">
           <div class="col-3"></div>
           <div class="col-6">
               <form method="post" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1" style="color:white;">Username <i class="fas fa-signature"></i></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cname">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:white;">Password <i class="fas fa-key"></i></label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="cpass">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Submit <i class="fas fa-thumbs-up"></i></button>
</form>
       
   </div>
       </div>
       <div class="col-3"></div>
       </div>   
    
</body>
</html>