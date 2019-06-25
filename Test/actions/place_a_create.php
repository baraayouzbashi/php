<?php
require_once 'db_connect.php';

if($_POST) {

    $p_name =$_POST['p_name'];
    $p_address =$_POST['p_address'];
    $p_type =$_POST['p_type'];
    $p_short_description =$_POST['p_short_description'];
    $p_web_address =$_POST['p_web_address'];
    $place_img =$_POST['place_img'];


    $sql = "INSERT INTO place (
            p_name,
            p_address,
            p_type,
            p_short_description,
            p_web_address,
            place_img 
            ) VALUES (
            '$p_name',
            '$p_address',
            '$p_type',
            '$p_short_description',
            '$p_web_address',
            '$place_img'
            )";
            
    if($connect->query($sql) === TRUE) {
    echo'<html>

    <head>

    <title>PHP CRUD  |  Add place</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script><body>'
        ;
        echo "<h1 class='text-center text-danger'>New Record Successfully Created</h1>";
        echo "<div class=' text-center container'>";
        echo "<a href='../create.php' style='text-decoration:none'>
                <button type='button' class='btn btn-warning m-1'>
                    Back
                </button>
                </a>";

        echo "<a href='../index.php'><button type='button' class='btn btn-warning m-1'>Home</button></a>";
        echo'</div></body>

            </html>';
    } else {

        echo "Error " . $sql . ' ' . $connect->connect_error;

    }
    $connect->close();

}

?>

