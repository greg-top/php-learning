<?php

require "db.php";
require "functions.php";

if ( isset($_POST['submit']) ) {
    insertUserData();
}

?>

<?php include "includes/header.php" ?>

<div class="container">
    <div class="col-sm-8">
        <h1 class="text-center">Create</h1>
        <?php if ( isset($_POST['submit']) ): ?>
            <div class="well text-center">
                <h2><?php showSuccessMessage("User created") ?> </h2>
            </div>
        <?php endif; ?>
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <input type="submit" name="submit" class="btn btn-primary">
        </form>
    </div>
</div>

<?php include "includes/footer.php" ?>