<?php

// connect to SQLiteDatabase
$conn = mysqli_connect('localhost', 'zack02', '$1234.Q5p6M7', 'netninja1');

// check the connection
if(!$conn){
  echo 'Connection error: ' . mysqli_connect_error();
}

// write the query to get all the data
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

// make the query and get the result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free the result from memory
mysqli_free_result($result);

// close the connection
mysqli_close($conn);

// print_r($pizzas);

 ?>

  <!DOCTYPE html>
  <html lang="en">

    <?php include('templates/header.php'); ?>

    <h4 class="center grey-text">Awesome Pizzas</h4>

    <div class="container">
      <div class="row">

          <?php foreach ($pizzas as $pizza){ ?>

            <div class="col s6 md3">
              <div class="card z-depth-0">
                <div class="card-content center">
                  <h6> <?php echo htmlspecialchars($pizza['title']); ?> </h6>
                  <div class=""><?php echo htmlspecialchars($pizza['ingredients']); ?>
                  </div>
                  <div class="card-action right-align">
                    <a href="#" class="brand-text">more info</a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
      </div>

    </div>

    <?php include('templates/footer.php'); ?>

  </html>
