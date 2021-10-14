<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "covidhelpdesk";
$con = mysqli_connect($server,$user,$password,$db);
if($con)
{
?>
<script>
		alert("Connection successful");
</script>
<?php
}
else
{
?>
<script>
		alert(" No Connection");
</script>
<?php
}
?>