<?php
include 'include/connect.php'; 
include 'include/header.php';
 $updateid= null;
 if (!empty($_GET['updateid'])) {
  $updateid=$_GET['updateid'];
 }

  if(isset($_POST['submit'])){
  $status=$_POST['status'];
      echo $status;
      $updateid = $_POST['updateid'];
    $sql="UPDATE bug SET  bug.bug_status=$status WHERE bug.bug_id=$updateid";
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
                <input type ="hidden" name="updateid" value="<?php echo $updateid; ?>"/>
                <label for="exampleFormControlSelect2">Status</label>
                <select name="status" class="form-select" id="exampleFormControlSelect2" required>
                <option selected disabled>Choose...</option>  
                <option value="1">Open</option>
                  <option value="2">Solving</option>
                  <option value="3">Close</option>
                </select>
              </div>
              <div class="form-group mt-3 mb-3">
                <button type="submit" name="submit" class="btn btn-success">Update</button>
              </div>
            </form>
          </div>
<?php include 'include/footer.php'; ?>