<?php
include 'connect.php';

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'] ;
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

   $sql="insert into `students` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
   $result=mysqli_query($con,$sql);
   if($result){
    // echo "DATA INSERTED SUCCESSFULLY";
    header('location:display.php');
   }else{
    die(mysqli_error($con));
   }
}

?>




<!doctype html>
<html lang="en">
  <head>
  <?php
    $color_code = array ('#252E33', '#D9C3BA', '#05D0EB','#0BD67E','#EB638B',);
    $random_color = $color_code[array_rand($color_code)];
    
    ?>

    <html>
        <body style="background:<?php echo $random_color;?>">
</body>
</html>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
    <title>Crud System</title>
  </head>
  <body>
    <center>
    <h1>Tristan's Crud System</h1>
</center>
</head>
    <body>
</body>
</html>
   <div class="container my-5">
     <form method="post">
       <div class="form-group">
         <label> NAME </label>
         <input type="text" class="form-control" 
         placeholder="Enter your name" name="name" autocomplete="off">
       </div>
       <div class="form-group">
         <label> Email</label>
         <input type="email" class="form-control" 
         placeholder="Enter your email" name="email" autocomplete="off">
       </div>
         <div class="form-group">
         <label> Mobile</label>
         <input type="text" class="form-control" 
         placeholder="Enter your Mobile number" name="mobile" autocomplete="off">
       </div>
      
         <div class="form-group">
         <label> Password</label>
         <input type="text" class="form-control" 
         placeholder="Enter your Password" name="password" autocomplete="off">
       </div>

       <button type="submit" class="btn 
         btn-primary" name="submit">Submit

       </button>
       </form>
       
 </body>
</html>