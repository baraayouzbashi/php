<?php

 ob_start();
session_start();

 

// Wrong include path
// require_once 'db_connect.php';
include_once 'actions/db_connect.php';


 

if($_GET['Concert_id']) {

    $Concert_id = $_GET['Concert_id'];

    $sql = "SELECT * FROM concerts WHERE Concert_id = ". $Concert_id;

    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

?>

 

<!DOCTYPE html>

<html>

<head>

    <title>Edit concert</title>
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
  

    <form action="actions/concert_a_update.php" method="post" class="my-2">
              <div class="form-group">
                <label for="exampleInputEmail1">concert name:</label>
                <input type="text"
                class="form-control"
                name="c_name"
                placeholder="Enter concert name"
                value="<?php echo $data['c_name'] ?>"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">location:</label>
                <input type="text"
                class="form-control"
                name="location"
                placeholder="Enter location"
                value="<?php echo $data['location'] ?>"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">web address:</label>
                <input type="text"
                class="form-control"
                name="c_web_address"
                placeholder="Enter web address url"
                value="<?php echo $data['c_web_address'] ?>"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">ticket price:</label>
                <input type="text"
                class="form-control"
                name="ticket_price"
                placeholder="Enter ticket price"
                value="<?php echo $data['ticket_price'] ?>"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">EventDate:</label>
                <input type="date"
                class="form-control"
                name="EventDate"
                placeholder="Enter EventDate"
                value="<?php echo $data['EventDate'] ?>"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">EventTime:</label>
                <input type="text"
                class="form-control"
                name="EventTime"
                placeholder="Enter EventTime"
                value="<?php echo $data['EventTime'] ?>"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">concert img:</label>
                <input type="text"
                class="form-control"
                name="concerts_img"
                placeholder="Enter place img URL"
                value="<?php echo $data['concerts_img'] ?>"
                >
              </div>

              
              <input type="hidden" name="Concert_id" value="<?php echo $data['Concert_id']?>">

              

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

