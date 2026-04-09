<?php
require_once("config.php");
if(isset($_POST["companyId"]))
{
$companyId=$_POST["companyId"];
$select="select tbl_employee.*,companyname from tbl_employee join  tbl_company on tbl_employee.compid=tbl_company.compid where tbl_company.compid='$companyId'";  
$query=mysqli_query($conn,$select);
if(mysqli_num_rows($query) >0)
{
while($fetch=mysqli_fetch_array($query))
{
?>
<table>

<tr>
<td><?php echo $fetch["name"];?></td>
<td><?php echo $fetch["email"];?></td>
<td><?php echo $fetch["salary"];?></td>
<td><?php echo $fetch["companyname"];?></td>
</tr>
</table>

<?php    
}
}
else
{
?>
<h5 align="center">sorry no employee found here</h5>
<?php
}
}
?>
