
<?
$con = mysqli_connect("localhost", "root", "", "tutor");
// Check connection
if (!$con)
{
    die("Connection failed: " . mysqli_connect_error());

}
else{
	echo "connected";
}
?>