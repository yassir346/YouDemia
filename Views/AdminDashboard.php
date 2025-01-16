<?php 

    include ("../Controllers/UserController.php");

    $usercontroll = new UserController();
    $finder = 'id';
    $usercontroll->Users($finder);
    $finder = 'nom';
    $usercontroll->Users($finder);
?>