<?php
include 'cbssession.php';
if(!session_id()){
    session_start();
}
include ('dbconnect.php');
include ('bookmodal.php');
include 'headercustomer.php';
$uid = $_SESSION['uid'];
$sql = "SELECT * FROM tb_user WHERE u_id ='$uid'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>

<html lang="en">
<body>
<div class="container">
    <div class="col-md-12">
        <h2 class="text-center text"><br>Profile Setting</h2>

        <br>
        <form method="POST" action="profileprocess.php" >
            <div class="form-floating mb-3">
                <label for="floatingInput">User IC</label>
                <input type="text" class="form-control" id="floatingInput" placeholder="<?php echo $_SESSION['uid'] ?>" name="uid" disabled >
            </div>
            <br>
            <div class="form-floating mb-3">
                <label for="floatingInput">Name</label>
                <input type="text" class="form-control" id="floatingInput" placeholder="<?php echo $_SESSION['uname'] ?>" name="uname"  >
            </div>
            <br>
            <div class="form-floating mb-3">
                <label for="floatingInput">Phone Number</label>
                <input type="text" class="form-control" id="floatingInput" placeholder="<?php echo $_SESSION['uphone']?>" name="uphone"  >

            </div>
            <br>
            <div class="form-floating mb-3">
                <label for="floatingInput">Address</label>
                <input type="text" class="form-control" id="floatingInput" placeholder="<?php echo $_SESSION['uaddress'] ?>" name="uaddress"  >

            </div>

            <br>
            <br>
            <input type="submit" name="submit" value="Submit" class="btn btn-warning">
            <button type="reset" class="btn btn-outline-light">Reset</button>
        </form>

    </div>

    <br><br><br>
</div>
</body>
<?php include 'footermain.php' ?>
</html>





