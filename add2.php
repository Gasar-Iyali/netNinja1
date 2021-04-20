<?php

$errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');

  if(isset($_POST['submit'])){

 // check email
  if(empty($_POST['email'])){
    $errors['email'] = 'An email is required <br />';
  } else {
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email'] = 'email must be a valid email address.';
    }
  }

  // check title
   if(empty($_POST['title'])){
     $errors['title'] = 'A title is required <br />';
   } else {
     $title = $_POST['title'];
     if(!preg_match('/^[a-zA-Z\s]+$/', $title))
     $errors['title'] = 'title must be letters and spaces only.';
   }

   // check ingredients
    if(empty($_POST['ingredients'])){
        $errors['ingredients'] = 'At least 2 ingredients are required, <br />';
    } else {
      $ingredients = $_POST['ingredients'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients))
      $errors['ingredients'] = 'Ingredients must be a comma separated list.';
    }

    }// end of the POST check
 ?>

  <!DOCTYPE html>
  <html lang="en">

    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
      <h4 class="center">Add a Pizza</h4>
  <form class="amber lighten-4" action="add2.php" method="POST">
    <label>Your Email: </label>
    <input type="text" name="email">
    <div class="red-text"><?php echo $errors['email']; ?></div>
    <label>Pizza Title: </label>
    <input type="text" name="title">
    <div class="red-text"><?php echo $errors['title']; ?></div>
    <label>Pizza Ingredients(comma separated): </label>
    <input type="text" name="ingredients">
    <div class="red-text"><?php echo $errors['ingredients']; ?></div>
    <div class="center">
      <input type="submit" name="submit" class="btn brand z-depth-0" value="Submit">

    </div>
  </form>
    </section>
    <?php include('templates/footer.php'); ?>

  </html>
