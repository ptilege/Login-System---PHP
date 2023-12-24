<?php include('header.php'); ?>
<?php session_start(); ?>

<?php

if(isset($_SESSION['uname'])){
    echo "<h2>Hello ".$_SESSION['uname']."</h2>";
}
else{
    header('location:index.php?message=You Need To Login To Enter The Site');
}


?>

<a href="logout_process.php" class="btn btn-danger">LogOut</a>

<?php  include('footer.php'); ?>