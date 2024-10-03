<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $color_code = array  ('#252E33', '#D9C3BA', '#05D0EB','#0BD67E','#EB638B',);
    $random_color = $color_code[array_rand($color_code)];
    
    ?>

    <html>
        <body style="background:<?php echo $random_color;?>">
</body>
</html>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tristan's Crud System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
</head>
<body>
    <center>
    <h1>Your Informations</h1>
</center>
</head>
    <body>
</body>


<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php"class="text-light">Add User</a>
        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $sql="Select * from `students`";
  $result=mysqli_query($con,$sql);
  if($result){
   while( $row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];
    echo ' <tr>
    <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>

      <td>
      <button class="btn btn-primary"><a href="update.php? updateid='.$id.'"class="text-light">Update</a>
      </button>
      <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"class="text-light">Delete</a>
      </button>
      </td>
    </tr>';
   }
  }
  ?>
   
  </tbody>
</table>
</div>
    
</body>
</html>