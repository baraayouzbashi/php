<?php require_once 'actions/db_connect.php'; ?>

 <?php
      session_start();     
?>
<!DOCTYPE html>

<html>

<head>

    <title>PHP CRUD  |  Add concert</title>
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
          
       
        <form action="actions/concert_a_create.php" method="post" class="my-4">
              <div class="form-group">
                <label for="exampleInputEmail1">concert name:</label>
                <input type="text"
                class="form-control"
                name="c_name"
                placeholder="Enter concert name"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1"> EventDate:</label>
                <input type="date"
                class="form-control"
                name="EventDate"
                placeholder="Enter EventDate"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">EventTime:</label>
                <input type="text"
                class="form-control"
                name="EventTime"
                placeholder="Enter EventTime"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">ticket price:</label>
                <input type="text"
                class="form-control"
                name="ticket_price"
                placeholder="Enter ticket price"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">location:</label>
                <input type="text"
                class="form-control"
                name="location"
                placeholder="Enter location"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">web address:</label>
                <input type="text"
                class="form-control"
                name="c_web_address"
                placeholder="Enter web address"
                >
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">concert img:</label>
                <input type="text"
                class="form-control"
                name="concerts_img"
                placeholder="Enter concert img URL"
                >
              </div>
              <button type="submit" class=" btn btn-danger">
                create
              </button>

              <a href="index.php">
              <button type="button" class=" btn btn-danger">
                Back
              </button>
                </a>
            </form> 
              
          </div>
</body>
</html>

