<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container mt-2">
<div class="page-header">
<h2>Customers List</h2>
</div>
<div class="row">
<div class="col-md-8">
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">First</th>
<th scope="col">Last</th>
<th scope="col">Email</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
include '../model/registrationdb.php';
$query="select * from comments limit 200"; 
$result=mysqli_query($connect,$query);
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_row($result)): ?>
<tr>
<th scope="row"><?php echo $array[0];?></th>
<td><?php echo $array[1];?></td>
<td><?php echo $array[2];?></td>
<td> 
<a href="javascript:void(0)" class="btn btn-primary view" data-id="<?php echo $array[0];?>">View</a>
</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
<td colspan="3" rowspan="1" headers="">No Data Found</td>
</tr>
<?php endif; ?>
<?php mysqli_free_result($result); ?>
</tbody>
</table>
</div>
<div class="col-md-4">
<span id="fname"></span><br>
<span id="lname"></span><br>
<span id="email"></span><br>
</div>
</div>        
</div>
<script type="text/javascript">
		$(document).ready(function($){
		$('body').on('click', '.view', function () {
		var id = $(this).data('id');
		// ajax
		$.ajax({
		type:"POST",
		url: "ajax-fetch-record.php",
		data: { id: id },
		dataType: 'json',
		success: function(res){
		$('#fname').html(res.fname);
		$('#lname').html(res.lname);
		$('#email').html(res.email);
		}
		});
		});
		});
</script>



<?php 



include "../model/registrationdb.php";
$id = $_POST['id'];
$query="SELECT * from comments WHERE id = '" . $id . "'";
$result = mysqli_query($connect,$query);
$cust = mysqli_fetch_array($result);
if($cust) {
echo json_encode($cust);
} else {
echo "Error: " . $query . "" . mysqli_error($connect);
}


?>
</body>
</html>