<?php

// connect to SQLiteDatabase
$conn = mysqli_connect('localhost', 'zack02', '$1234.Q5p6M7', 'netninja1');

// check the connection
if(!$conn){
  echo 'Connection error: ' . mysqli_connect_error();
}

// write the query to get all the data
$sql = 'SELECT title, ingredients, id FROM pizzas';

// make the query and get the result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free the result from memory
mysqli_free_result($result);

// close the connection
mysqli_close($conn);

print_r($pizzas);
 ?>

  <!DOCTYPE html>
  <html lang="en">

    <?php include('templates/header.php'); ?>

    <?php include('templates/footer.php'); ?>

  </html>
