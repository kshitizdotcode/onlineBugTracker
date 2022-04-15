<?php
include 'include/connect.php'; 
include 'include/header.php'; 

$updateid=$_GET['updateid'];
$sql="SELECT bug_title,bug_date,bug_eta,bug_desc from `bug` WHERE bug_id=$updateid";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$title= $row['bug_title'];
$date= $row['bug_date'];
$eta= $row['bug_eta'];

if(isset($_POST["submit"])){
  $title=$_POST["title"];
  $date=date('y-m-d',strtotime($_POST["date"]));
  $status=$_POST["status"];
  $priority=$_POST["priority"];
  $assigned=$_POST["assigned"];
  $eta=$_POST["eta"];
  $desc=$_POST["desc"];

  // echo("$title,$date,$status,$priority,$assigned,$desc");
  $sql="UPDATE `bug` SET bug.bug_title='$title',bug.bug_date=$date,bug.bug_status=$status,bug.bug_priority=$priority,bug.bug_assignedDeveloper=$assigned,bug.bug_eta=$eta,bug.bug_desc='$desc' WHERE bug.bug_id=$updateid; ";
  $result=mysqli_query($con, $sql);
  if($result){
    echo "Data inserted successfully";
    header('location:edit.php');
  }
  else{
    die(mysqli_error($con));
}
}
  // echo $title,$date,$status,$priority,$assigned,$desc;
?>


  <h1 class="h2">Update Bug</h1>
          </div>
          <div class="table-responsive">
            <form method="post" action="add.php">
              <div class="form-group mt-3">
                <label for="exampleFormControlInput0" class="form-label"
                  >Title</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput0"
                  name="title"
                  value="<?php echo $title?>"
                />
              </div>
              <div class="form-group mt-3">
                <label for="exampleFormControlInput0" class="form-label"
                  >Date</label
                >
                <input type="date" class="form-control" id="exampleFormControlInput0" name="date" value="<?php echo $date?>">
              </div>
              <div class="form-group mt-3">
                <label for="exampleFormControlSelect2">Status</label>
                <select name="status" class="form-select" id="exampleFormControlSelect2">
                  <option selected disabled>Choose...</option>
                  <option value="1" >Open</option>
                  <option value="2" >Pending</option>
                  <option value="3" >Close</option>
                </select>
              </div>
              <div class="form-group mt-3">
                <label for="exampleFormControlSelect3">Priority</label>
                <select name="priority" class="form-select" id="exampleFormControlSelect3">
                  <option selected disabled>Choose...</option>
                  <option value="1">High</option>
                  <option value="2">Medium</option>
                  <option value="3">Low</option>
                </select>
              </div>
              <div class="form-group mt-3">
                <label for="exampleFormControlSelect4">Assigned</label>
                <select name="assigned" class="form-select" id="exampleFormControlSelect4">
                  <option selected disabled>Choose...</option>
                  <?php
                  $sql2="SELECT developer_id,developer_name FROM developer";
                  $result2=mysqli_query($con,$sql2);
                if ($result2) {
                  while ($row=mysqli_fetch_assoc($result2)) {
                    $developer_id= $row['developer_id'];
                    $developer= $row['developer_name'];
                    echo'
                  <option value="'.$developer_id.'">'.$developer.'</option>';
                  }
                }
                  ?>
                </select>
              </div>
              <div class="form-group mt-3">
                <label for="exampleFormControlSelect4">ETA(HRS)</label>
                <input type="text" class="form-control" id="exampleFormControlInput0" name="eta" value="<?php echo $eta?>">
              
              </div>
              <div class="form-group mt-3">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  name="desc"
                  value=""
                >
              </textarea>
              </div>
              <div class="form-group mt-3 mb-3">
                <button type="sumbit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
<?php include 'include/footer.php'; ?>