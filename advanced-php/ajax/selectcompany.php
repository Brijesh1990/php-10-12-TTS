<?php 
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Company & Employee Details</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- load jquery CDN and used for ajax  -->
<script src="https://code.jquery.com/jquery-4.0.0.js"></script>
<script>
// ajax via jquery 
function str(val)
{
    $.ajax({
        method:"POST",
        url:"data.php",
        data:"companyId="+val,
        success:function(data)
        {
            $("#employeeId").html(data);
        }

    })
}
</script>
</head>
<body>

<div class="container mt-4">
<div class="row">

<!-- Company Selection -->
<div class="col-md-5 mb-4">
<h4 class="text-center">Select Company load(ajax)</h4>
<form method="post">
<div class="mb-3">
<select class="form-select" id="companyId" onchange="return str(this.value)">
<option>Choose Company</option>
<?php 
$select="select * from tbl_company";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{

?>
<option value="<?php echo $fetch["compid"];?>"><?php echo $fetch["companyname"];?></option>
<?php 

}
?>

</select>
</div>
</form>
<!-- employee details load via ajax -->
<table class="table table-bordered" id="employeeId">

</table>
</div>

<div class="col-md-7">
<h4 class="text-center">Employee Details</h4>
<table class="table table-striped table-bordered">
<thead class="table-primary">
<tr>
<th>Name</th>
<th>Email</th>
<th>Salary</th>
<th>Company</th>
</tr>
</thead>
<tbody>

<?php 
$select="select tbl_employee.*,companyname from tbl_employee join  tbl_company on tbl_employee.compid=tbl_company.compid";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{

?>
<tr>
<td><?php echo $fetch["name"];?></td>
<td><?php echo $fetch["email"];?></td>
<td><?php echo $fetch["salary"];?></td>
<td><?php echo $fetch["companyname"];?></td>
</tr>
<?php 
}
?>

</tbody>
</table>
</div>

</div>
</div>

</body>
</html>