<?php

  // if(isset($_GET['submit'])){
  //   echo $_GET['email'];
  //   echo $_GET['title'];
  //   echo $_GET['ingredients'];
  // }

  if(isset($_POST['submit'])){
    echo $_POST['email'];
    echo $_POST['title'];
    echo $_POST['ingredients'];
  }

 ?>

  <!DOCTYPE html>
  <html lang="en">

    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
      <h4 class="center">Add a Pizza</h4>
  <form class="amber lighten-4" action="add.php" method="POST">
    <label for="">Your Email: </label>
    <input type="text" name="email">
    <label for="">Pizza Title: </label>
    <input type="text" name="title">
    <label for="">Pizza Ingredients(comma separated): </label>
    <input type="text" name="ingredients">
    <div class="center">
      <input type="submit" name="submit" class="btn brand z-depth-0" value="Submit">

    </div>
  </form>
    </section>
    <?php include('templates/footer.php'); ?>

  </html>
