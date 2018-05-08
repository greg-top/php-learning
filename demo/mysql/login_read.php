<?php

  require "db.php";
  require "functions.php";

    //call a function to get all user table data and populate it in html below
    $resultAll = getTableData('users');

?>

<?php include "includes/header.php" ?>

<div class="container">
    <div class="col-sm-8">
        <h1 class="text-center">Read</h1>
        <?php //fetch data from mysqli object and print them ?>
        <?php while ($row = mysqli_fetch_assoc($resultAll)): ?>

            <pre><?php print_r($row); ?></pre>

        <?php endwhile; ?>
    </div>
</div>

<?php include "includes/footer.php" ?>