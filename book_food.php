<?php

   $connection = mysqli_connect('127.0.0.1:3310','root','','resto_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $number = $_POST['number'];
      $orders = $_POST['orders'];
      $Additional = $_POST['Additional'];
      $quantity = $_POST['quantity'];
      $time = $_POST['time'];
      $address = $_POST['address'];
      $mssgs = $_POST['mssgs'];

      $request = " insert into book_food(name, number, orders, Additional, quantity, time, address, mssgs) values('$name','$number
      ', '$orders','$Additional','$quantity','$time','$address','$mssgs') ";
      mysqli_query($connection, $request);

      header('location:index.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>