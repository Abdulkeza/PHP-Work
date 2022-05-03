<?php
 if(isset($_POST['save'])){
     require_once("signupConfig.php");

     //creating an object of our class

     $sc = new signupConfig();

     $sc->setfirstName($_POST['firstname']);
     $sc->setlastName($_POST['lastname']);
     $sc->setAddres($_POST['address']);

     $sc->insertData();
     print_r($firstname);

    //  echo("data saved successfully"); 
 }
?>