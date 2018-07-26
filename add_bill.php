<?php
$conn =  new mysqli("localhost","root","","payroll");

?>
<?php

if(isset($_POST['submit'])!="")
{
    $billsno      = $_POST['billsno'];
    $bill_no      = $_POST['bill_no'];
    $group_id      = $_POST['group'];
    $work_type      = $_POST['work_type'];
    $work_area    = $_POST['area'];
    $bill_date      = $_POST['bill_date'];
    $bill_amount     = $_POST['bill_amount'];


    $sql = $conn->query("INSERT into companybill(bill_no,billsno,company_group_id,work_type,work_area,bill_date,bill_amount)
    VALUES('$bill_no','$billsno','$group_id','$work_type','$work_area','$bill_date','$bill_amount')");

    if($sql)
    {
        ?>
        <script>
            alert('Company Bill has been successfully added.');
            window.location.href='home_bill.php?page=emp_list';
        </script>
        <?php
    }

    else
    {
        ?>
        <script>
            alert('Invalid.');
            window.location.href='home_bill.php';
        </script>
        <?php
    }
}
?>


<?php

if(isset($_POST['submitbill'])!="")
{
    $bill_id      = $_POST['bill_id'];
    $company_id      = $_POST['company'];


    $sql = $conn->query("INSERT into bill(bill_id,company_id)VALUES('$bill_id','$company_id')");

    if($sql)
    {
        ?>
        <script>
            alert('Company Bill has been successfully added.');
            window.location.href='home_bill.php?page=emp_list';
        </script>
        <?php
    }

    else
    {
        ?>
        <script>
            alert('Invalid.');
            window.location.href='home_bill.php';
        </script>
        <?php
    }
}
?>

<?php

if(isset($_POST['setAsPaid'])!="")
{

    $company_id      = $_POST['company_id'];
    $billsno     = $_POST['billsno'];
    $remark      = $_POST['remark'];
    $reduced     = $_POST['reduced'];
    $totalBill      = $_POST['totalBill'];
    $receive_amount     = $_POST['npaid'];

    date_default_timezone_set("Asia/Dhaka");
    $receive_date = date("l, F d, Y");


    $sqlInsert = $conn->query("INSERT into billreceived(billsno,totoal_bill,received_date,received_amount,reduced,remark,pay_status)VALUES('$billsno','$totalBill','$receive_date','$receive_amount','$reduced','$remark','1')");
    $sqlUpdate = $conn->query("UPDATE companybill SET remark='$remark', pay_status='1' where billsno = '".$billsno."' ");

    if($sqlInsert && $sqlUpdate)
    {
        ?>
        <script>
            alert('Company Bill has been successfully updated.');
            window.location.href='home_bill.php?page=emp_list';
        </script>
        <?php
    }

    else
    {
        ?>
        <script>
            alert('Invalid.');
            window.location.href='home_bill.php';
        </script>
        <?php
    }
}
?>
