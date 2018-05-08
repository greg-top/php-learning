<?php

require "db.php";
require "functions.php";

//call a function to get all user table data and populate it in html below
$resultAll = getTableData('users');
if ( isset($_POST['submit'] ) ) {

    updateUserData ();
}
?>

<?php include "includes/header.php" ?>

<div class="container">
    <div class="col-sm-8">
        <h1 class="text-center">Update</h1>
        <?php if ( isset($_POST['submit']) ): ?>
            <div class="well text-center">
                <h2><?php showSuccessMessage("User modified") ?> </h2>
            </div>
        <?php endif; ?>
        <form action="login_update.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group">
                <select name="userId" id="">
                    <?php while ($row = mysqli_fetch_assoc($resultAll)): ?>
                    <?php var_dump($row) ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="update">
        </form>
    </div>
</div>

<?php include "includes/footer.php" ?>