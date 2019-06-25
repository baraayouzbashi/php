<?php

 ob_start();
session_start();

 

require_once 'actions/db_connect.php';

 

if($_GET['place_id']) {

    $place_id = $_GET['place_id'];

 

    $sql = "SELECT * FROM place WHERE place_id = {$place_id}";

    $result = $connect->query($sql);

 

    $data = $result->fetch_assoc();

 

    $connect->close();

 

?>

 

<!DOCTYPE html>

<html>

<head>

    <title>Edit place</title>
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
                    
                
                <a class="navbar-brand text-white">CodeReview 11</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                                  <a class="nav-link btn btn-outline-danger" href="#" data-toggle="modal" data-target="#exampleModalCenter4"> Add New Book <span class="sr-only">(current)</span></a>
                                  
                </li>
                 -->
                 
                </ul>
                <form class="form-inline my-2 my-md-0">
          
                </form>
            </div>
            </div>
            </nav>
        </div>
<div class="container">
  

    <form action="actions/place_a_update.php" method="post" class="my-2">
              <div class="form-group">
                <label for="exampleInputEmail1">place name:</label>
                <input type="text"
                class="form-control"
                name="p_name"
                placeholder="Enter restaurant name"
                value="<?php echo $data['p_name'] ?>"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">address:</label>
                <input type="text"
                class="form-control"
                name="p_address"
                placeholder="Enter address"
                value="<?php echo $data['p_address'] ?>"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">web address:</label>
                <input type="text"
                class="form-control"
                name="p_web_address"
                placeholder="Enter web address url"
                value="<?php echo $data['p_web_address'] ?>"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">short description:</label>
                <input type="text"
                class="form-control"
                name="p_short_description"
                placeholder="Enter short description"
                value="<?php echo $data['p_short_description'] ?>"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">place img:</label>
                <input type="text"
                class="form-control"
                name="place_img"
                placeholder="Enter place img URL"
                value="<?php echo $data['place_img'] ?>"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">type:</label>
                <select class="custom-select" name="p_type">
                <option selected>Choose...</option>
                <option value="museum">museum</option>
                <option value="historical_site">historical_site</option>
                <option value="must_see">must_see</option>
              </select>
              </div>
              <input type="hidden" name="place_id" value="<?php echo $data['place_id']?>">

              

              <button class="btn btn-danger" value="">
                Save Changes
              </button>
              <a href="index.php"><button type="button" class=" btn btn-danger">Back</button>
            </form> 

 </div>



 

</body>

</html>

 

<?php

}
ob_end_flush(); 
?>

