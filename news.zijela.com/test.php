<?php
session_start();
require ('config.php');
//UPDATE DB WHEN NEWS ITEM IS READ

if (isset($_POST['readupdate'])):
    $sql1 = 'SELECT `sessionReadPoints`,`totalReadPoints` FROM marketer where email="'.$_SESSION['loggedInEmail'].'"';
    $result1 = mysqli_query($dbc, $sql1);
    $row1 = mysqli_fetch_array($result1);  
    $session=$row1['sessionReadPoints'];
    $total=$row1['totalReadPoints'];
    $session++;
    $total++;
endif;
    $sql = 'UPDATE marketer SET sessionReadPoints='.$session.',totalReadPoints='.$total.' WHERE email="'.$_SESSION['loggedInEmail'].'"';
    if (mysqli_multi_query($dbc, $sql)) {
            $success= array(
            "updated"=>"true"
            );
        echo json_encode ($success);
    }


