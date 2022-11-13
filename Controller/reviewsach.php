<?php
    $action = 'review';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
         
    }
    switch($action){
        case 'review':
            include "View/reviewsach.php";
            break;
        case 'review_action':
           include "View/reviewsachchitiet.php";
            break;
    }

?>