<?php include('header.php');  ?>

<?php
   if(isset($_GET['message'])){
    echo "<h4>" . $_GET['message'] . "</h4>";
   }

?>
    
    <form id="form1" class="form" action="login_process.php" method="POST">
                    <div class="form-group">
                        <label for="uname">User Name</label>
                        <input type="text" name="uname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email ID</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <input type="submit" name="login" value="login" class="btn btn-success mt-3">

    </form>

<?php  include('footer.php'); ?>