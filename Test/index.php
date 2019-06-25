<?php require_once 'actions/db_connect.php'; ?>

 <?php
ob_start();
session_start();

if( !isset($_SESSION['admin']) ) {
 header("Location: start.php");
 
 exit;
}

$res=mysqli_query($connect, "SELECT * FROM users WHERE userId=".$_SESSION['admin']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

?>

<!DOCTYPE html>

<html>

<head>

    <title>PHP CRUD</title>
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
                    
                
                <a class="navbar-brand text-white" href="index.php">CodeReview 11</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                 
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">create new data</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                 <a class="dropdown-item" href="restaurant_create.php">add new restaurant</a>
                <a class="dropdown-item" href="concert_create.php">add new concert</a>
                <a class="dropdown-item" href="place_create.php">add new place</a>
                </div>
                </li>
                
                </ul>
            </div>
            </div>
            </nav>
            </div>
            </div>
            <div id="hero" class="container">
                <h5 class="text-right text-sucsses"> Hi <?php echo $userRow['userName']; ?>
            
           <a href="logout.php?logout">Sign Out</a></h5>
                <div class="row mb-2">
            

            <?php

            $sql = "
              select * from location
              RIGHT JOIN `restaurant` on  location.fk_restaurant = restaurant.restaurant_id 
              
              "
            ;
            //--------------------------------------------------------
            $sql3 = "
            select * from location
            RIGHT JOIN concerts on  location.fk_Concerts=concerts.Concert_id

              "
            ;
            //--------------------------------------------------------
            $sql2 = "
            select * from location
            RIGHT JOIN place on  location.fk_place=place.place_id
              "
            ;
            //--------------------------------------------------------

           
                $result = $connect->query($sql);
                $i=0;

                if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                
                echo '<div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="'.$row["restaurant_img"].'" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">'.$row["r_short_description"].'</p>
                  <a class="text-info" href="#" data-toggle="modal" data-target="#exampleModalCenter1'.$i.'">
                    show more
                    </a>
<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter1'.$i.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle'.$i.'">'
        .$row["restaurant_name"].'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="'.$row["restaurant_img"].'" data-holder-rendered="true"><hr>
        <h5>'.$row["r_address"].'</h5>
        <p><a href="'.$row["r_web_address"].'">'.$row["r_web_address"].'</a></p>
        <p class="card-text">'.$row["r_short_description"].'</p>
        <p>'.$row["r_type"].'</p>
        <p><a href="'.$row["r_telephone_number"].'"><i class="fas fa-phone"></i>'.$row["r_telephone_number"].'</a></p>
        </div>
        <div class="modal-footer">

        </div>
        </div>
        </div>
    </div>
                  
                  <div class="d-flex justify-content-between align-items-center my-3">
                    <div class="btn-group">
                <a href="update.php?restaurant_id='.$row['restaurant_id'].'">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                      </a>
                      <a href="delete.php?restaurant_id='.$row['restaurant_id'].'">
                      <button type="button" class="btn btn-sm btn-outline-secondary">delete</button></a>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            ';$i++;
        }}
//--------------------------------------------------------------------------
                $result2 = $connect->query($sql2);
                $k=0;

                if($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()){

echo '<div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img class="card-img-top"
            style="height:225px;width:100%;display:block;"
            src="'.$row2["place_img"].'"
            data-holder-rendered="true">
        <div class="card-body">
            <p class="card-text">'.$row2["p_short_description"].'</p>
            <a class="text-info"
            href="#"
            data-toggle="modal"
            data-target="#exampleModal1'.$k.'">
                show more
            </a>
<!-- Modal -->
    <div class="modal fade" id="exampleModal1'.$k.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenter'.$k.'">'
        .$row2["p_name"].'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="'.$row2["place_img"].'" data-holder-rendered="true"><hr>
        <h5>'.$row2["p_address"].'</h5>
        <p><a href="'.$row2["p_web_address"].'">'.$row2["p_web_address"].'</a></p>
        <p class="card-text">'.$row2["p_short_description"].'</p>
        <p>'.$row2["p_type"].'</p>
        
        </div>
        <div class="modal-footer">

        </div>
        </div>
        </div>
    </div>
                  
                  <div class="d-flex justify-content-between align-items-center my-3">
                    <div class="btn-group">
                <a href="place_update.php?place_id='.$row2['place_id'].'">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                      </a>
                      <a href="place_delete.php?place_id='.$row2['place_id'].'">
                      <button type="button" class="btn btn-sm btn-outline-secondary">delete</button></a>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            ';$k++;
        }}
//--------------------------------------------------------------------------
                $result3 = $connect->query($sql3);
                $n=0;

                if($result3->num_rows > 0) {
                while($row3 = $result3->fetch_assoc()){

echo '<div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img class="card-img-top"
            style="height:225px;width:100%;display:block;"
            src="'.$row3["concerts_img"].'"
            data-holder-rendered="true">
        <div class="card-body">
            <p class="card-text">'.$row3["c_name"].'</p>
            <p>'.$row3["ticket_price"].'</p>
            <p>'.$row3["c_web_address"].'</p>
            <a class="text-info"
            href="#"
            data-toggle="modal"
            data-target="#Center1'.$n.'">
                show more
            </a>
<!-- Modal -->
    <div class="modal fade" id="Center1'.$n.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModal'.$n.'">'
        .$row3["c_name"].'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="'.$row3["concerts_img"].'" data-holder-rendered="true"><hr>
        <h5>'.$row3["location"].'</h5>
        <p><a href="'.$row3["c_web_address"].'">'.$row3["c_web_address"].'</a></p>
        <p class="card-text">'.$row3["ticket_price"].'</p>
        <p>'.$row3["EventDate"].'</p>
        <p>'.$row3["EventTime"].'</p>
        </div>
        <div class="modal-footer">

        </div>
        </div>
        </div>
    </div>
                  
                  <div class="d-flex justify-content-between align-items-center my-3">
                    <div class="btn-group">
                <a href="concert_update.php?Concert_id='.$row3['Concert_id'].'">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                      </a>
                      <a href="concert_delete.php?Concert_id='.$row3['Concert_id'].'">
                      <button type="button" class="btn btn-sm btn-outline-secondary">delete</button></a>
                    </div>
                    <small class="text-muted">'.$row3["EventDate"].'</small>
                  </div>
                </div>
              </div>
            </div>
            ';$n++;
             }}

             

            ?>
        </div>
         </div>
<?php ob_end_flush(); ?>