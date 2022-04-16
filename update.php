<?php
include 'include/connect.php'; 
include 'include/header.php';
?>
<?php 
$updateid=11;
// $updateid=$_GET['updateid'];

if(isset($_POST["update"])){
    $status=$_POST["status"];
    $sql="UPDATE `bug` SET  bug.bug_status=$status WHERE bug.bug_id=$updateid";
    $result=mysqli_query($con, $sql);
    if($result){
      echo "Data Updated successfully";
      header('location:edit.php');
    }
    else{
      die(mysqli_error($con));
}
}
?>
<h1 class="h2">Update Bug</h1>
          </div>
          <div class="table-responsive">
            <form method="post" action="update.php">
              <div class="form-group mt-3">
                <label for="exampleFormControlSelect2">Status</label>
                <select name="status" class="form-select" id="exampleFormControlSelect2">
                <option selected disabled>Choose...</option>  
                <option value="1">Open</option>
                  <option value="2">Solving</option>
                  <option value="3">Close</option>
                </select>
              </div>
              <div class="form-group mt-3 mb-3">
                <button type="submit" name="update" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
<?php include 'include/footer.php'; ?>