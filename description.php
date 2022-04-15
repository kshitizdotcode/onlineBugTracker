<?php include 'include/header.php'; 
include 'include/connect.php'; 
?>
            <h1 class="h2">Description</h1>
          </div>
          <div class="table-responsive">
            <div class="card">
              <?php
                  if(isset($_GET['descriptionid'])){
                    
                    $descriptionid=$_GET['descriptionid'];
                    $sql="select bug.bug_id,bug.bug_title,bug.bug_date,s.status_title,p.priority_title,d.developer_name,bug.bug_eta,bug.bug_desc from bug 
                    left join status as s on bug.bug_status = s.status_id
                    left join priority as p on bug.bug_priority = p.priority_id
                    left join developer as d on bug.bug_assignedDeveloper = d.developer_id WHERE bug_id=$descriptionid";
                    $result=mysqli_query($con,$sql);
                    if ($result) {
                    // while ($row=mysqli_fetch_assoc($result)) {
                      $row=mysqli_fetch_assoc($result);
                      $id= $row['bug_id'];
                      $title= $row['bug_title'];
                      $date= $row['bug_date'];
                      $status= $row['status_title'];
                      $priority= $row['priority_title'];                
                      $assigned= $row['developer_name'];
                      $eta= $row['bug_eta'];
                      $desc= $row['bug_desc'];
                      echo '
                      <h4 class="card-header"><span class="fw-bold">#</span>'.$id.'</h5>
                      <div class="card-body">
                          <h3 class="fw-bold">'.$title.'</h3>
                          <div class="mb-2">
                            <span class="mb-1 fw-bold" data-feather="calendar"></span>
                            <span class="">'.$date.'</span>
                          </div>
                          <div class=" mb-2 d-flex">
                            <div>
                              <span class="fw-bold">Status: </span>
                              <span class="btn-color badge rounded-pill">'.$status.'</span>
                            </div>
                            <div class="ms-3">
                              <span class="fw-bold">Priority: </span>
                              <span class="btn-color badge rounded-pill">'.$priority.'</span>
                            </div>
                          </div>
                          <div class="">
                          <span class="fw-bold">ETA(Hrs): </span>
                          <span class="">'.$eta.'</span>
                        </div>
                          <div class="mb-2">
                          <p class="mt-3 mb-0">
                          '.$desc.'
                          </p>
                        </div>
                        </div>
                        <div class="card-footer text-muted">Assigned: '.$assigned.'</div>';
                  }
                  }
                // }
                  ?>
            </div>
<?php include 'include/footer.php'; ?>