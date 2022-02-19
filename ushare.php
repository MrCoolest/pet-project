<?php
session_start();
     $json = file_get_contents('./Json/context.json');

     //Decode JSON
     $json_data = json_decode($json,true);
     

$username = trim($json_data["context"]["Admin"]);
//echo $username;

if(isset($_SESSION['username']) && $_SESSION['username'] !== $username){
      header("location:./login_form.php");
      exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>User panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
</head>
<style>
     .card{
          display : inline-block;
          margin : 2rem;
          height : 20rem;
          
     }
     .card img{
          height : 10rem;
     }
</style>
<body>

<div class="container mt-3">
 
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link " href="adminqu.php">Querries</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active " href="ushare.php">User Share</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="badminsub.php">Subscriptions</a>
    </li>
  </ul>
</div><br>
<div class="container mt-3">
  
  <?php
        require_once "./config.php";

        $sql = "SELECT id, first_name, last_name, img,Age_group,State,Pet_Name FROM pet_posts WHERE Activate IS NULL";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
             echo '<div class="card" style="width:20rem">
             <img class="card-img-top" src="./images/posts/'.$row["img"].'" alt="Card image" style="width:80%; height: 300px; margin-left: 2.5rem; margin-top: 1rem;">
             <div class="card-body">
               <h4 class="card-title" style="text-align: center;">'.$row["Age_group"].'</h4>
               <h4 class="card-title" style="text-align: center;">'.$row["State"].'</h4>
              
            <a href="./Activate.php?id='.$row["id"].'"  class="btn btn-danger">Accept</a>
             </div>
           </div>';
        
          }
        } 
        $conn->close();

       
?>

  <br>
  
  
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
