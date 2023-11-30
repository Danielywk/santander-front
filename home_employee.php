<?php

include("first.php");
include("add_employee.php");


$query  = "SELECT * from deductions WHERE deduction_id='1'";
$q = $conn->query($query);
while($row = $q->fetch_assoc())
  {
  }
?>
<?php
include("php/headerEmployee.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">

<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">Employee</h1>
        <h1 class="page-subhead-line">Welcome to <strong><?php echo ' '. $siteName ?></strong> Today is:
        <i class="icon-calendar icon-large" ></i>


        <?php
        date_default_timezone_set("Asia/Dhaka");
        echo  date(" l, F d, Y") . "<br>";

        ?>
         </h1>

    </div>
</div>

          <div class="well bs-component">
            <form class="form-horizontal">
              <fieldset>

                <button type="button" data-toggle="modal" data-target="#addEmployee" class="btn btn-success">Add New Employee</button>
                <br><br>
                <div class="table-responsive">
                  <form method="post" action="" >
                    <table class="table table-bordered table-hover table-condensed" id="myTable">
                      <!-- <h3><b>Ordinance</b></h3> -->
                      <thead>
                        <tr class="info">
                          <th><p align="center">Name/Number</p></th>
                          <th><p align="center">Gender</p></th>
                          <th><p align="center">Employee Type</p></th>
                          <th><p align="center">Department</p></th>
                            <th><p align="center">Salary Rate</p></th>
                          <th><p align="center">Action</p></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php


                        global $emp_id;

                          $query = "select * from employee ORDER BY emp_id asc";
                        $q = $conn->query($query);
                        while($row = $q->fetch_assoc())
                          {
                            $id     =$row['emp_id'];
                            $emp_id = $id;
                            $lname  =$row['lname'];
                              $lnumber  =$row['mobileNo'];
                            $fname  =$row['fname'];
                            $type   =$row['emp_type'];




                        ?>

                        <tr>
                          <td align="center"><a href="view_employee.php?emp_id=<?php echo $row["emp_id"]; ?>" title="Update"><?php echo $row['fname'] ?>, <?php echo $row['lname'] ?></br><?php echo $row['mobileNo'] ?></a></td>
                          <td align="center"><a href="view_employee.php?emp_id=<?php echo $row["emp_id"]; ?>" title="Update"><?php echo $row['gender'] ?></a></td>
                          <td align="center"><a href="view_employee.php?emp_id=<?php echo $row["emp_id"]; ?>" title="Update"><?php echo $row['emp_type'] ?></a></td>
                          <td align="center"><a href="view_employee.php?emp_id=<?php echo $row["emp_id"]; ?>" title="Update"><?php echo $row['division'] ?></a></td>
                            <td align="center"><a href="view_employee.php?emp_id=<?php echo $row["emp_id"]; ?>" title="Update"><?php echo $row['salary'] ?></a></td>

                          <td align="center">
                            <a class="btn btn-danger" href="delete.php?emp_id=<?php echo $row["emp_id"]; ?>">Delete</a>
                          </td>
                        </tr>

                        <?php } ?>
                      </tbody>

                        <tr class="info">
                          <th><p align="center">Name/Number</p></th>
                          <th><p align="center">Gender</p></th>
                          <th><p align="center">Employee Type</p></th>
                          <th><p align="center">Department</p></th>
                            <th><p align="center">Salary Rate</p></th>
                          <th><p align="center">Action</p></th>
                        </tr>
                    </table>
                  </form>
                </div>
              </fieldset>
            </form>
          </div>

      <!-- this modal is for ADDING an EMPLOYEE -->
      <div class="modal fade" id="addEmployee" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>


              <h3 align="center"><b>Add Employee</b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">

              <form class="form-horizontal" action="#" name="form" method="post">
                <div class="form-group">
                  <input type="hidden" name="emp_id" value="<?php echo $emp_id;?>">
                  <label class="col-sm-4 control-label">Firstname</label>
                  <div class="col-sm-8">
                    <input type="text" name="fname" class="form-control" placeholder="Firstname" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Lastname</label>
                  <div class="col-sm-8">
                    <input type="text" name="lname" class="form-control" placeholder="Lastname" required="required">
                  </div>
                </div>

                  <div class="form-group">
                      <label class="col-sm-4 control-label">Mobile No</label>
                      <div class="col-sm-8">
                          <input type="text" name="mobile" class="form-control" placeholder="Mobile No" required="required">
                      </div>
                  </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Gender</label>
                  <div class="col-sm-8">
                    <select name="gender" class="form-control" placeholder="Gender" required>
                      <option value="">Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Employee Type</label>
                  <div class="col-sm-8">
                    <select name="emp_type" class="form-control" placeholder="Employee Type" required>
                      <option value="">Employee Type</option>
                      <option value="Job Order">Job Order</option>
                      <option value="Regular">Regular</option>
                      <option value="Casual">Casual</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Division</label>
                  <div class="col-sm-8">
                    <select name="division" class="form-control" placeholder="Division" required>
                      <option value="">Division</option>
                      <option value="Admin">Admin</option>
                      <option value="Human Resource">Human Resource</option>
                      <option value="Accounting">Accounting</option>
                      <option value="Engineering">Engineering</option>
                      <option value="MIS">MIS</option>
                      <option value="Supply">Supply</option>
                      <option value="Maintenance">Maintenance</option>
                      <option value="Control">Control</option>
                      <option value="Control">Others</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Salary Rate</label>
                    <div class="col-sm-8">
                        <input type="text" name="salary_rate" class="form-control" placeholder="Enter salary Rate" required="required">
                    </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-4 control-label"></label>
                  <div class="col-sm-8">
                    <input type="submit" name="submit" class="btn btn-success" value="Submit">
                    <input type="reset" name="" class="btn btn-danger" value="Clear Fields">
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>

      <!-- this modal is for my Colins -->
      <div class="modal fade" id="colins" role="dialog">
        <div class="modal-dialog modal-sm">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center">You are logged in as <b><?php echo $_SESSION['username']; ?></b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <div align="center">
                <a href="logout.php" class="btn btn-block btn-danger">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>




    <!-- this function is for modal -->
    <script>
      $(document).ready(function()
      {
        $("#myBtn").click(function()
        {
          $("#myModal").modal();
        });
      });
    </script>




        <?php

        include ("last.php");

        ?>
