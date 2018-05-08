<?php

require "db.php";
require "functions.php";

//call a function to get all user table data and populate it in html below
$resultId = getTableData('users');
$resultAll = getTableData('users');
if ( isset($_POST['submit']) ) {
    deleteFromUsers ('users');
    //refresh a page to update data
    header("Refresh:0");
}
?>

<?php include "includes/header.php" ?>
<div class="container">
    <div class="col-sm-8">
        <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="post">
            <h2>Select id which you want to delete</h2>
            <div class="form-group">
                <select name="userId" id="">
                    <?php while ($row = mysqli_fetch_assoc($resultId)): ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="delete">
        </form>
    </div>
</div>
<div class="container">
    <div class="col-sm-8">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($row = mysqli_fetch_assoc($resultAll)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "includes/footer.php" ?>