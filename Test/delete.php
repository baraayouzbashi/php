<?php
session_start();
 
require_once 'actions/db_connect.php';

if($_GET['restaurant_id']) {

    $restaurant_id = $_GET['restaurant_id'];
    $sql = "SELECT * FROM restaurant WHERE restaurant_id  = {$restaurant_id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    $connect->close();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete data</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
  <div id="navBar">
            <nav class="navbar navbar-expand-md navbar-dark bg-danger">
                <div class="container">
                    
                
                <a class="navbar-brand text-white" href="#">CodeReview 11</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto"> 
                </ul>
                <form class="form-inline my-2 my-md-0">
          
                </form>
            </div>
            </div>
            </nav>
        </div>
<div class="container">

<h3 class="text-danger text-center mb-4">Do you really want to delete this data?</h3>

<form action="actions/a_delete.php" method="post" class="my-2 text-center">
              <div class="form-group">
                
                <input type="hidden"
                class="form-control"
                name="restaurant_id"
                placeholder="Enter id"
                value="<?php echo $data['restaurant_id'] ?>"
                >
              </div>
            
              <button type="submit" class=" btn btn-danger">
                Yes, delete it!
              </button>
              <a href="index.php">
              <button type="button" class=" btn btn-danger">
                No, go back!
              </button>
                </a>
            </form>    
</div>
 

</body>

</html>

 

<?php

}

?>

