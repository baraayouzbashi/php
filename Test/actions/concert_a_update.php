<?php

require_once 'db_connect.php';

if($_POST) {

    $c_name =$_POST['c_name'];
    $location =$_POST['location'];
    $EventDate =$_POST['EventDate'];
    $EventTime =$_POST['EventTime'];
    $ticket_price =$_POST['ticket_price'];
    $c_web_address =$_POST['c_web_address'];
    $concerts_img =$_POST['concerts_img'];

    $Concert_id  = $_POST['Concert_id'];
    
    
    

    $sql= "UPDATE concerts SET
            c_name ='$c_name',
            location='$location',
            EventDate ='$EventDate',
            EventTime ='$EventTime',
            ticket_price ='$ticket_price',
            c_web_address ='$c_web_address',
            concerts_img ='$concerts_img'
            
            
            WHERE Concert_id = {$Concert_id}";


    if($connect->query($sql) === TRUE) {

        echo'<html>

    <head>

    <title>PHP CRUD  |  update concert</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script><body>'
        ;

        echo "<h1 class='text-danger text-center'>Succcessfully Updated</h1>";
        echo "<div class=' text-center container'>";
        echo "<a href='../update.php?Concert_id=".$Concert_id."'><button type='button'class='btn btn-warning mx-1'>Back</button></a>";

        echo "<a href='../index.php'><button type='button' class='btn btn-warning mx-1'>Home</button></a>";
        echo'</div></body>

            </html>';

        } else {

            echo "Erorr while updating record : ". $connect->error;
        }

        $connect->close();

}

?>

