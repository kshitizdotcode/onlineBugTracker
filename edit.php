<?php 
include 'include/connect.php'; 
include 'include/header.php'; 

?>

<h1 class="h2">Edit Bug</h1>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#ID</th>
                  <th scope="col">TITLE</th>
                  <th scope="col">DATE</th>
                  <th scope="col">STATUS</th>
                  <th scope="col">PRIORITY</th>
                  <th scope="col">ASSIGNED</th>
                  <th scope="col">ETA (Hrs)</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
              <tbody>
              <?php
                // select bug.bug_id,bug.bug_title,bug.bug_date,s.status_title,p.priority_title,d.developer_name,bug.bug_eta from bug left join status as s on bug.bug_status = s.status_id left join priority as p on bug.bug_priority = p.priority_id left join developer as d on bug.bug_assignedDeveloper = d.developer_id;
                $sql="select bug.bug_id,bug.bug_title,bug.bug_date,s.status_title,p.priority_title,d.developer_name,bug.bug_eta from bug 
                left join status as s on bug.bug_status = s.status_id
                left join priority as p on bug.bug_priority = p.priority_id
                left join developer as d on bug.bug_assignedDeveloper = d.developer_id;";
                $result=mysqli_query($con,$sql);
                if ($result) {
                  while ($row=mysqli_fetch_assoc($result)) {
                    $id= $row['bug_id'];
                    $title= $row['bug_title'];
                    $date= $row['bug_date'];
                    $status= $row['status_title'];
                    $priority= $row['priority_title'];                
                    $assigned= $row['developer_name'];
                    $eta= $row['bug_eta'];
                  echo'
                <tr>
                  <td>'.$id.'</td>
                  <td>'.$title.'</td>
                  <td>
                  <span class="">'.$date.'</span>
                  </td>
                  <td>
                    <span class="btn-color badge rounded-pill">'.$status.'</span>
                  </td>
                  <td>
                    <span class="btn-color badge rounded-pill">'.$priority.'</span>
                  </td>
                  <td>'.$assigned.'</td>
                  <td>'.$eta.'</td>
                  <td>
                    <li class="list-inline-item">
                      <a class="text-light" href="update.php?updateid='.$id.'">
                      <button
                        class="btn btn-success btn-sm"
                        type="button"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Update"
                      >
                        <span data-feather="edit"></span>
                        </button>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="text-light" href="delete.php?deleteid='.$id.'">
                      <button
                        class="btn btn-danger btn-sm"
                        type="button"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Delete"
                      >
                      <span data-feather="edit"></span>
                      </button>
                    </a>
                    </li>
                  </td>
                </tr>';
                  }
                }  
              ?>
              </tbody>
            </table>
          </div>
<?php include 'include/footer.php'; ?>