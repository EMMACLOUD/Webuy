<?php
if (isset($_POST['btnsubmit'])) {
	require "conn.php";
	$Name=$_POST['Name'];
	$Phone=$_POST['Phone'];
	$Email=$_POST['Email'];
	$Message=$_POST['Message'];

	$sql="INSERT INTO contact (Name,Phone,Email,Message) VALUES('$Name','$Phone','$Email','$Message');";
	$query=mysqli_query($conn,$sql);

		if (!$query) {
			echo "Record is not saved".mysqli_error($conn);
		}

		else {
			echo "<script>alert('Admin will get back to You Shortly')</script>";
		}
}
?>