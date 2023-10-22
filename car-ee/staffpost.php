<?php
include 'cbssession.php';
if(!session_id()){
    session_start();
}
include ('dbconnect.php');
include 'headerstaff.php';
?>

<!DOCTYPE html>

<html lang="en">
<body>
<div class="container">
    <div class="col-md-12">
        <h2 class="text-center text"><br>Add Vehicle Details</h2>

        <br>
        <form method="POST" action="staffpostprocess.php" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Vehicle Registration Number" name="vreg" required>
                <label for="floatingInput">Vehicle Registration Number</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Vehicle Type" name="vtype" required>
                <label for="floatingInput">Vehicle Type</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Vehicle Model" name="vmodel" required>
                <label for="floatingInput">Vehicle Model</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Vehicle Year Make" name="vyear" required>
                <label for="floatingInput">Vehicle Year Make</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Vehicle Price" name="vprice" required>
                <label for="floatingInput">Vehicle Price Rent: RM</label>
            </div>

            <fieldset>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Car Media</label>
                    <input type="file" class="form-control" name="my_media" id="my_media" required>
                    <br>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    <button type="reset" class="btn btn-outline-light">Reset</button>
                </div>
            </fieldset>
        </form>

    </div>

    <br><br><br>
</div>
</body>
<?php include 'footermain.php' ?>
</html>





